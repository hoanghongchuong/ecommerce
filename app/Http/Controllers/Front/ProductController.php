<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
class ProductController extends AbstractBaseController
{
    public function __construct(Category $category, Product $product)
    {
//        parent::__construct();
        $this->Category = $category;
        $this->Product = $product;
    }

    /*
     * get product by slug category
     * @return view
     */
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
        return view('front.product.detail', compact('product'));
    }

}
