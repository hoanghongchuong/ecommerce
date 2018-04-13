<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Models\Category;
use App\Models\Album;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;
class ProductController extends Controller
{
    /*
     * constructor
     * @param Product $product
     */
    public function __construct(Product $product, Category $category)
    {
        $this->Product = $product;
        $this->Category = $category;
    }

    public function index()
    {
        $products = $this->Product->getAllProduct();
        return view('admin.product.index', compact('products'));
    }
    /*
     * create action
     *@param Request $req, $id
     *return view
     */
    public function create(Request $req, $id = null){
        if($req->isMethod('GET')){
            if($id){
                $product = $this->Product->findOrFail($id);
            }
            $parent = $this->Category->select('id', 'name', 'parent_id')->get()->toArray();
            return view('admin.product.create', compact('product', 'id','parent'));
        }
        $req->validate([
            'name' => 'required',
            'slug' => 'nullable',
            'image' => 'nullable|image|max:2048',
        ]);
        $data = $req->only($this->Product->getFieldList());
        $data['author'] = $req->admin->id;
        $data['slug'] = isset($req->slug) ? $req->slug : str_slug($req->name);

        $data['is_highlight'] = isset($data['is_highlight']) ? true : false;
        $data['active']    = isset($data['active']) ? true : false;

        if ($req->hasFile('image')) {
            $image         = $req->file('image');
            $data['image'] = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $data['image']);
            $data['image'] = 'uploads/products/' . $data['image'];
        }
        

        $newProduct = $this->Product->updateOrCreate(['id' => $id], $data);

        $galeries = [];
        if ($req->hasFile('album_image')) {
            foreach ($req->file('album_image') as $index => $file) {
                $imageFileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('uploads/products'), $imageFileName);
                $galeries[] = [
                    'product_id' => $newProduct->id,
                    'image' => $imageFileName
                ];
            }
        }

        Album::insert($galeries);
        return redirect()->route('admin.product.index')->with('message', 'Cập nhật thành công');
    }

    public function delete($id)
    {
        $this->Product->find($id)->delete();
        return redirect()->back()->with('message', 'Xóa thành công');
    }
}
