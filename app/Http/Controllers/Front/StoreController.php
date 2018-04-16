<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
class StoreController extends AbstractBaseController
{
    public function __construct(Category $category, Product $product)
    {
        $this->Category = $category;
        $this->Product = $product;
    }
    public function index()
    {

        return view('front.store.index');
    }

    public function detailStore($id)
    {

        return view('front.store.detail');
    }

    public function listProduct(Request $req)
    {
        $products = $this->Product->where('store_id', $req->is_store->id)->orderBy('id','desc')->get();
        
        return view('front.store.product.index', compact('products'));
    }

    public function create(Request $req, $id = null)
    {

        if($req->isMethod('GET')){
            if($id){
                $product = $this->Product->findOrFail($id);
            }
            $categories = $this->Category->where('parent_id', 0)->orderBy('id', 'desc')->get();
            return view('front.store.product.create', compact('categories'));
        }
        $req->validate([
            'name' => 'required',
            'slug' => 'nullable',
            'image' => 'nullable|image|max:2048',
            'price' => 'required'
        ]);
        $data = $req->only($this->Product->getFieldList());
        $data['store_id'] = $req->is_store->id;
        $data['slug'] = isset($req->slug) ? $req->slug : str_slug($req->name);
        if ($req->hasFile('image')) {
            $image         = $req->file('image');
            $data['image'] = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $data['image']);
            $data['image'] = 'uploads/products/' . $data['image'];
        }
        $this->Product->updateOrCreate(['id' => $id], $data);

        return view('front.store.product.success');
    }

    public function postCreate(Request $req)
    {
        $data = $req->only($this->Product->getFieldList());
        $data['store_id'] = $req->is_store->id;
        $data['slug'] = isset($req->slug) ? $req->slug : str_slug($req->name);

        dd($data);
    }
}
