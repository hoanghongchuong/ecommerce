@extends('front.layout')
@section('content')
    <main class="cd-main-content">
        <section class="breadcrumbs">
            <div class="container">
                <ul class="flex-center">
                    <li><a href="" title=""><i class="fa fa-home"></i> Trang chủ</a> </li>
                    <li><span> Giỏ hàng</span> </li>
                </ul>
            </div>
        </section>
        <section class="cart">
            <div class="container">
                <form action="{{route('updateCart')}}" method="post" >
                    {{ csrf_field() }}
                <div class="cart-view">
                    <h4>Giỏ hàng của bạn ( {{ Cart::count() }} sản phẩm )</h4>
                    <table class="table table-responsive">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>SẢN PHẨM</th>
                            <th>GIÁ THÀNH</th>
                            <th>SỐ LƯỢNG</th>
                            <th>THÀNH TIỀN</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cart as $key => $item)
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="flex-center cart-flex">
                                    <span><img src="{{ asset($item->options->image) }}" alt="" title=""> </span>
                                    <div class="product-ac">
                                        <p><a href="" title="">{{ $item->name }}</a> </p>
                                        <p class="delete-product">
                                            <a href="{{ route('deleteCart', $item->rowId) }}" title="" class="txt-red">
                                                <i class="fa fa-trash"></i>
                                                Xóa sản phẩm
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td><p class="money">{{ number_format($item->price) }} ₫</p> </td>
                            <td><input type="number" value="{{$item->qty}}" id="{{ $item->rowId }}"  name="numb[{{$key}}]"></td>
                            <td><p class="money">{{number_format($item->price * $item->qty)}} ₫</p></td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="5">
                                <p class="total-money">
                                    Thành tiền: {{ number_format($total) }} ₫
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="cart-action">
                        <a href="{{ url('') }}" title="" class="bg-blue">TIẾP TỤC MUA HÀNG</a>
                        <div class="">
                            <button type="submit" class="bg-blue btn-updatecart">CẬP NHẬT</button>
                            <a href="{{ route('payment') }}" title="" class="bg-blue">THANH TOÁN</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
        <section class="watched">
            <div class="container">
                <div class="product-watched">
                    <h5>Sản phẩm đã xem</h5>
                    <div class="watched-slider owl-carousel">
                        <div class="watched-item">
                            <a href="" title=""><img src="{{ asset('/front/images/product/img-cate-1.png')}}" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="{{ asset('/front/images/product/img-cate-2.png')}}" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="{{ asset('/front/images/product/img-cate-3.png')}}" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="{{ asset('/front/images/product/img-cate-4.png')}}" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="{{ asset('/front/images/product/img-cate-5.png')}}" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="{{ asset('/front/images/product/img-cate-6.png')}}" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="{{ asset('/front/images/product/img-cate-1.png')}}" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="{{ asset('/front/images/product/img-cate-2.png')}}" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="{{ asset('/front/images/product/img-cate-4.png')}}" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="{{ asset('/front/images/product/img-cate-6.png')}}" alt="" title=""> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="method-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-uppercase">CÁCH THỨC THANH TOÁN</h6>
                        <ul class="flex-center">
                            <li><a href="" title=""><img src="{{ asset('/front/images/product/payment-1.png')}}" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="{{ asset('/front/images/product/payment-2.png')}}" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="{{ asset('/front/images/product/payment-3.png')}}" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="{{ asset('/front/images/product/payment-4.png')}}" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="{{ asset('/front/images/product/payment-5.png')}}" alt="" title=""> </a> </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h6 class="text-uppercase">DỊCH VỤ GIAO HÀNG</h6>
                        <ul class="flex-center">
                            <li><a href="" title=""><img src="{{ asset('/front/images/product/transit-1.png')}}" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="{{ asset('/front/images/product/transit-2.png')}}" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="{{ asset('/front/images/product/transit-3.png')}}" alt="" title=""> </a> </li>
                        </ul>
                    </div>
                    <div class="col-md-3 newsletter">
                        <h6 class="text-uppercase">ĐĂNG KÝ NHẬN KHUYẾN MÃI</h6>
                        <form>
                            <button type="submit"><i class="fa fa-envelope-o"></i> </button>
                            <input type="email" placeholder="Email của bạn">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection