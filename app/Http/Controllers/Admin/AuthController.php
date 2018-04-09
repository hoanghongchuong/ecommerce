<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Admin;

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
            return redirect()->back();
        }

    }
}
