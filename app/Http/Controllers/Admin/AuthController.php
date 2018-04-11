<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use DB;
class AuthController extends Controller
{
    /*
     * define guard
     * @var object
     */
    protected $guard;

    /**
     * AuthController constructor.
     * @param Admin $admin
     */
    public function __construct(Admin $admin)
    {
        $this->Admin = $admin;
        $this->guard = Auth::guard('admin');
    }
    /*
     * action login admin
     * @return redirect
     */
    public function login(Request $req)
    {
        if($this->guard->check()){
            return redirect()->route('admin.index');
        }
        if($req->isMethod('GET')){
            return view('admin.auth.login');
        }
        $req->validate([
           'email' => 'required|email',
            'password' => 'required'
        ]);
        $account = $req->only(['email', 'password', 'remember']);
        if($this->guard->attempt([
            'email' => $account['email'],
            'password' => $account['password'],
            'status' => Admin::ACTIVE,
        ], isset($account['remember']) ? true : false)){
            return redirect()->route('admin.index');
        }else{
            return redirect()->back()->with('message','Email hoặc password không chính xác');
        }

    }

    public function profile(Request $req)
    {
        if($req->isMethod('GET')){
            $user_id = $this->guard->user()->id;
            $user = $this->Admin->find($user_id);
            return view('admin.auth.profile',compact('user'));
        }
        $req->validate([
            'password' => 'nullable|min:6|confirmed',
            'full_name' => 'required',
            'avatar' => 'nullable',
        ]);
        $data = $req->only(['full_name', 'password', 'avatar']);
        if(isset($data['password'])){
            $data['password'] = \Hash::make($data['password']);
        }else{
            unset($data['password']);
        }
        if ($req->hasFile('image')) {
            $image         = $req->file('image');
            $data['avatar'] = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/admin'), $data['avatar']);
            $data['avatar'] = 'uploads/admin/' . $data['avatar'];
        }
        $this->guard->user()->where('id', $this->guard->user()->id)->update($data);
        return redirect()->back()->with('message', 'Cập nhật thành công');

    }
    /*
     * action logout
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
