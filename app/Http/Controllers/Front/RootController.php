<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use Closure;

class RootController extends AbstractBaseController
{

    public function index(Request $req, $slug)
    {
        $key = $this->splitString($slug);
        if($key == 'c'){
            // return redirect()->action('Front\ProductController@getProductByCate');
            $this->getProductByCate($req);
        }
        if($key == 'p'){
            // return redirect()->action('Front\ProductController@getDetailProduct');
            $this->getDetail($req);
        }
    }

    public function getProductByCate(Request $req)
    {

    }

    public function getDetail()
    {

    }
}
