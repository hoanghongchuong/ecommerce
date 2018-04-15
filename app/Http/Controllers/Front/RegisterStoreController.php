<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Province;
use App\Models\Store;
use DB;
class RegisterStoreController extends Controller
{
    protected $guard;
    public function __construct(Province $province, Store $store)
    {
        $this->Province = $province;
        $this->Store = $store;
        $this->guard = Auth::guard('is_store');
    }
    /*
     * action get view register store
     * @return view
     */
    public function register()
    {
        $province = $this->Province->all();
        return view('front.store.register', compact('province'));
    }
    /*
     * action post register store
     * @return redirect
     */
    public function postRegister(Request $req)
    {
        $req->validate([
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:stores',
            'province_id' => 'required',
            'district_id' => 'required',
            'address' => 'required',
            'business_license' => 'required',
            

        ]);
        $data = $req->only($this->Store->getFieldList());
        $data['password'] = \Hash::make('123456');
        if ($req->hasFile('business_license')) {
            $image         = $req->file('business_license');
            $data['business_license'] = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/store'), $data['business_license']);
            $data['business_license'] = 'uploads/store/' . $data['business_license'];
        }
        $this->Store->fill($data)->save();
        return view('front.store.regissucess');
    }

    public function login(Request $req)
    {
        if($this->guard->check()){
            return redirect()->route('store.index');
        }
        if($req->isMethod('GET')){
            return view('front.store.login');
        }
        $req->validate([
           'email' => 'required|email',
            'password' => 'required'
        ]);
        $account = $req->only(['email', 'password']);
        // dd($account);
        if($this->guard->attempt([
           'email' => $account['email'],
           'password' => $account['password'],
           'status' => Store::ACTIVE,
        ])){
            return redirect()->route('store.index');
        }else{
            return redirect()->back()->with('message','Email hoặc password không chính xác');
        }

    }
}
