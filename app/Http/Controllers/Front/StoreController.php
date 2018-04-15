<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends AbstractBaseController
{
    public function index()
    {
    	return view('front.store.index');
    }
}
