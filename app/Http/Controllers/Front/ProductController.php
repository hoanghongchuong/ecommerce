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
        $this->Category = $category;
        $this->Product = $product;
    }


}
