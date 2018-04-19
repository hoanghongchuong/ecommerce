<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Session\Store;
use App\Models\Store as Stores;
use App\Models\Admin;
class OrderController extends Controller
{
    public function __construct(Order $order, Stores $store, Admin $admin, OrderDetail $orderDetail )
    {
        $this->Order = $order;
        $this->Admin = $admin;
        $this->Stores = $store;
        $this->OrderDetail = $orderDetail;
    }

    /*
     * action index
     * get list order
     * @return view
     */
    public function index()
    {
        $orders = $this->Order->orderBy('id', 'desc')->get();
        return view('admin.order.index', compact('orders'));
    }
    /*
     * action detail
     * get detail order
     * @return view
     */
    public function detail($id)
    {
        $order = $this->Order->find($id);
        $orderDetail = $this->OrderDetail->where('order_id', $order->id)->get();
        return view('admin.order.detail', compact('order', 'orderDetail'));
    }

    public function updateStatus(Request $req)
    {
        $status = $req->status;
        $order = $this->Order->find($req->orderId);
        $this->Order->where('id', $req->orderId)->update(['status' => $status]);
        return 1;
    }
    /*
     * action delete order
     */
    public function delete($id)
    {
        $data = $this->Order->find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Xóa thành công');
    }

}
