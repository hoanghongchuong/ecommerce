<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetail;
class StoreController extends AbstractBaseController
{
    public function __construct(Category $category, Product $product, Order $order, OrderDetail $orderDetail)
    {
        $this->Category = $category;
        $this->Product = $product;
        $this->Order = $order;
        $this->OrderDetail = $orderDetail;
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
    /*
     * list order
     * @return view
     */
    public function order(Request $req)
    {
        $orders = $this->OrderDetail->where('store_id', $req->is_store->id)->get();
        return view('front.store.order.index', compact('orders'));
    }

    /*
     * action updateStatus
     * update status order store
     * @param Request $req
     * @return void
     */
    public function UpdateStatus(Request $req)
    {
        $orderDetail = $this->OrderDetail->where('id', $req->order_id)->first();
        $order = $this->Order->where('id', $orderDetail->order_id)->first();        
        $listOrderDetail = $this->OrderDetail->where('order_id', $order->id)->get();
        if(count($listOrderDetail) == 1){
            $order->status =  2;
            $order->save();
        }else{
            foreach($listOrderDetail as $item){
                if($item->status==1){
                    $order->status =  2;

                    $order->save();
                    break; 
                }
            }
        }
       
        
        if ($orderDetail) {
            $orderDetail->status =  $orderDetail->status == 1 ? 0 : 1;
            $orderDetail->save();
            return (Int)$orderDetail->status;
        }
    
            
    }
}
