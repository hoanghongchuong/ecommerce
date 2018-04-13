<?php

namespace App\Http\Controllers;

abstract class AbstractBaseController extends Controller
{

    public function splitString($slug)
    {
        $array_string = explode('-', $slug);
        $last = array_pop($array_string);
        $key = substr( $last,  0, 1 );
        return $key;
    }
}
