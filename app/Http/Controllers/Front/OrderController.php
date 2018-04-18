<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderStore;
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
//        session_start();

        $data = $req->only('product_id','product_numb');
        $product = $this->Product->getDetail($data['product_id']);
        if (!$product) {
            return 'product not found';
        }
        Cart::add(array(
            'id' => $product->id,
            'name' => $product->name,
            'qty' => $data['product_numb'],
            'price' => $product->price,
            'options' => array(
                'image' => $product->image,
                'code' => $product->code,
                'slug' => $product->slug,
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
//        dd($cart);
        $total = $this->getTotalPrice();
        return view('front.order.payment3', compact('data', 'cart','total'));
    }

    public function postOrder(Request $req)
    {
        $cart = Cart::Content();
//        dd($cart);
        $info = $req->session()->get('info');
        $order = new Order;
        $order->full_name = $info['full_name'];
        $order->phone = $info['phone'];
        $order->email = $info['email'];
        $order->address = $info['address'];
        $order->content = $info['content'];
        $order->code = str_random(6);
        $total = $this->getTotalPrice();
        $order->payment_method = $req->payment_method;
        $order->total = $total;
        $detail =[];
        foreach ($cart as $key) {
            $detail[] = [
                'product_name' => $key->name,
                'product_numb' => $key->qty,
                'product_price' => $key->price,
                'product_img' => $key->options->image,
                'product_code' => $key->options->code,
                'admin_id' => $key->options->admin_id,
                'store_id' => $key->options->store_id,
                'status' => 0
            ];
        }
        $order->detail = json_encode($detail);
//        dd($order);
        if($total > 0){
            $order->save();
//            $store_detail = [];
//            $orderStore = new OrderStore();
//            foreach ($cart as $key) {
//                if(empty($store_detail)){
//                    $store_detail[] = [
//                        'store_id' => $key->options->store_id,
//                        'detail' => [
//                            'product_id' => $key->id,
//                            'qty' => $key->qty,
//                            'price' => $key->price
//                        ]
//                    ];
//                }else{
//                    foreach($store_detail as $item){
//                        if($item->store_id == $key->options->store_id){
//
//                        }else{
//
//                        }
//                    }
//                }
//
//            }

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
        return view('front.ordersucess');
    }
}
