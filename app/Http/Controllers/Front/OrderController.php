<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Cart;

class OrderController extends Controller
{
    public function __construct(Order $order, Product $product)
    {
        $this->Order = $order;
        $this->Product = $product;
    }

    /*
     * get total money
     */
    protected function getTotalPrice()
    {
        $cart = Cart::content();
        $total = 0;
        foreach ($cart as $key) {
            $total += $key->price * $key->qty;
        }
        return $total;
    }
    /*
     * get gio hang
     * @return view
     */
    public function getCart()
    {
        $cart = Cart::content();
//        dd($cart);
        $total = $this->getTotalPrice();
        return view('front.order.index', compact('cart','total'));
    }
    /*
     * post product to Cart
     * @return redirect
     */
    public function addCart(Request $req)
    {

        $data = $req->only('product_id','product_numb');
        $product = $this->Product->getDetail($data['product_id']);
        if (!$product) {
            return 'product not found';
        }
        Cart::add(array(
            'id'           => $product->id,
            'name'         => $product->name,
            'qty'          => $data['product_numb'],
            'price'        => $product->price,
            'options'      => array(
                'image'    => $product->image,
                'code'     => $product->code,
                'slug'     => $product->slug,
                'store_id' => $product->store_id,
                'admin_id' => $product->admin_id,

            )
        ));
        return redirect()->route('getCart');
    }
    /*
     * action update cart
     */
    public function updateCart(Request $req)
    {
        $data = $req->numb;
        if($data>0){
            foreach($data as $key=>$item){
                Cart::update($key, $item);
            }
        }
        return redirect()->back();
    }

    public function deleteCart($id){
        Cart::remove($id);
        return redirect()->back();
    }
    public function payment()
    {

        return view('front.order.payment');
    }

    public function postUsername(Request $req)
    {
        $username = $req->username;
        return view('front.order.payment2', compact('username'));
    }

    public function postInfor(Request $req)
    {
        session_start();
        $data = $req->all();
        session()->put('info', $data);
        $cart = Cart::content();
        $total = $this->getTotalPrice();
        return view('front.order.payment3', compact('data', 'cart','total'));
    }

    public function postOrder(Request $req)
    {
        $cart = Cart::Content();
        $info = $req->session()->get('info');
        // dd($infor);
        $order                 = new Order;
        $order->full_name      = $info['full_name'];
        $order->phone          = $info['phone'];
        $order->email          = $info['email'];
        $order->address        = $info['address'];
        $order->content        = $info['content'];
        $order->code           = str_random(6);
        $total                 = $this->getTotalPrice();
        $order->payment_method = $req->payment_method;
        $order->total          = $total;
        $order->status         = 0;
        if($total > 0){
            $order->save();
            foreach($cart as $key){
                $product = $this->Product->where('id', $key->id)->first();
                // dd($product->admin_id);
                $orderDetail             = new OrderDetail;
                $orderDetail->product_id = $key->id;
                $orderDetail->order_id   = $order->id;
                $orderDetail->admin_id   = $product->admin_id;
                $orderDetail->store_id   = $product->store_id;
                $orderDetail->price      = $key->price;
                $orderDetail->qty        = $key->qty;
                $orderDetail->totalprice = $key->price * $key->qty;
                $orderDetail->status     = 0;   
                $orderDetail->save(); 
            }

        }else{
            echo "<script type='text/javascript'>
				alert('Giỏ hàng của bạn rỗng!');
				window.location = '".url('/')."' 
			</script>";
        }
        Cart::destroy();

        return redirect()->route('post.success');
    }
    public function success(){
        return view('front.store.ordersucess');
    }
}
