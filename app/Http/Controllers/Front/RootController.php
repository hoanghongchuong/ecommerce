<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class RootController extends AbstractBaseController
{

    public function index($slug)
    {
        $key = $this->splitString($slug);
        if($key == 'c'){
            return redirect()->action('Front\ProductController@getProductByCate');
        }
        if($key == 'p'){
            return redirect()->action('Front\ProductController@getDetailProduct');
        }
    }
}
