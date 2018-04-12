<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterStoreController extends Controller
{
    public function register()
    {

        return view('front.store.register');
    }
}
