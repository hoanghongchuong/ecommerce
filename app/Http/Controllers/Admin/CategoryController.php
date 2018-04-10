<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /*
     * constructor
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->Category = $category;
    }

    /*
     * index action
     * @return view
     */
    public function index()
    {
        $categories = $this->Category->getAllCategories();
        return view('admin.category.index', compact('categories'));
    }

    /*
     * create and update action
     * @param Request $req
     * @param interger $id
     * @return view|redirect
     */
    public function create(Request $req, $id = null){
        if($req->isMethod('GET')){
            if($id){
                $category = $this->Category->findOrFail($id);
            }
            return view('admin.category.create', compact('category', 'id'));
        }
        $req->validate([
           'name' => 'required',
            'slug' => 'nullable',
            'image' => 'nullable|image|max:2048',
        ]);
        $data = $req->only($this->Category->getFieldList());

        $data['name'] = $req->name;
        $data['parent_id'] = $req->parent_id;
        $data['admin_id'] = $req->admin->id;
        if($req->slug){
            $data['slug'] = $req->slug;
        }else{
            $data['slug']= str_slug($req->name);
        }
        if ($req->hasFile('image')) {
            $image         = $req->file('image');
            $data['image'] = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/categories'), $data['image']);
            $data['image'] = 'uploads/categories/' . $data['image'];
        }
        $data['is_highlight'] = isset($data['is_highlight']) ? true : false;
        $this->Category->updateOrCreate(['id' => $id], $data);
        return redirect()->route('admin.category.index')->with('message', 'Cập nhật thành công');
    }

    public function delete($id)
    {
        $this->Category->find($id)->delete();
        return redirect()->back()->with('message', 'Xoá thành công');
    }

}
