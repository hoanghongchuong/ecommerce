<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\District;
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

    /*
     * ajax get district
     *
     */
    public function loadDistrictByProvince(Request $req)
    {
        $id = $req->id;
        $district = District::where('cate_id', $id)->get();
        foreach ($district as $item) {
            echo "<option value='" . $item->id . "'>" . $item->name . "</option>";
        }
    }
}
