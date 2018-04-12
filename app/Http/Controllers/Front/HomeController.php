<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
class HomeController extends Controller
{
    public function __construct(Category $category)
    {
        $this->Category = $category;
    }
    public function index()
    {
        $categories = $this->Category->getRootCategory();
        return view('front.index', compact('categories'));
    }
}
