<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Admin;
use App\Models\Store;
//use App\Http\Controllers\Controller;

class RootController extends AbstractBaseController
{

    public function __construct(Category $category, Product $product, Admin $admin, Store $store)
    {
        $this->Category = $category;
        $this->Product = $product;
        $this->Store = $store;
        $this->Admin = $admin;
    }
    public function index($slug)
    {
        $key = $this->splitString($slug);
        if($key == 'c'){
            return $this->getProductByCate($slug);
        }
        if($key == 'p'){
            return $this->getDetailProduct($slug);
        }
    }
    public function getProductByCate($slug)
    {
        $array_string = explode('-', $slug);
        $last = array_pop($array_string);
        $id = substr($last, 1);
        $category = $this->Category->getOneCategoryById($id);
        $products = $category->products;
        $numbProduct = count($products);
        return view('front.product.list', compact('products', 'category', 'numbProduct'));

    }
    public function getDetailProduct($slug)
    {
        $array_string = explode('-', $slug);
        $last = array_pop($array_string);
        $id = substr($last, 1);
        $product = $this->Product->getDetail($id);
        $albums = $this->Product->getAlbum($product->id);
        $category = $this->Category->getOneCategoryById($product->category_id);
        $admin = $this->Admin->where('id', $product->admin_id)->first();
        $store = $this->Admin->where('id', $product->store_id)->first();
        return view('front.product.detail', compact('product', 'category', 'albums','store','admin'));
    }
}
