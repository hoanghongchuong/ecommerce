<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * index dashboard action
     * @return view
     */
    public function index()
    {
        return view('admin.index');
    }
}
