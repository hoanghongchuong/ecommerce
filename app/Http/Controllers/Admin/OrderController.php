<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Session\Store;
use App\Models\Store as Stores;
use App\Models\Admin;
class OrderController extends Controller
{
    public function __construct(Order $order, Stores $store, Admin $admin)
    {
        $this->Order = $order;
        $this->Admin = $admin;
        $this->Stores = $store;
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
     * action detal
     * get detail order
     * @return view
     */
    public function detail($id)
    {
        $order = $this->Order->find($id);
        $detailOrder = json_decode($order->detail);

        return view('admin.order.detail', compact('order','detailOrder'));
    }

    public function delete($id)
    {
        $data = $this->Order->find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Xóa thành công');
    }

}
