@extends('front.layout')
@section('content')
    <main class="cd-main-content">
        <section class="breadcrumbs">
            <div class="container">
                <ul class="flex-center">
                    <li><a href="" title=""><i class="fa fa-home"></i> Trang chủ</a> </li>
                    <li><span>Thanh toán</span> </li>
                </ul>
            </div>
            <div class="payment-title">
                <div class="container">
                    <ul class="flex-center-end">
                        <li><a href="thanh-toan-buoc-1.html" title="">
                                <span>1</span> Thông tin đăng nhập
                            </a> </li>
                        <li class="active"><a href="thanh-toan-buoc-2.html" title="">
                                <span>2</span> Địa chỉ nhận hàng
                            </a> </li>
                        <li><a href="thanh-toan-buoc-3.html" title="">
                                <span>3</span> Thanh toán
                            </a> </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="payment">
            <div class="container">
                <div class="detail-content">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="payment-step">
                                <div class="payment-step-2">
                                    <p class="mgb-20">Địa chỉ nhận hàng</p>
                                    <form method="post" action=" {{ route('postInfor') }}">
                                        {{ csrf_field() }}
                                        <div class="form-block row">
                                            <div class="col-md-6">
                                                <input type="text" class="input-sty" name="full_name" placeholder="Họ tên người nhận">
                                            </div>
                                        </div>
                                        <div class="form-block row">
                                            <div class="col-md-6">
                                                <input type="text" class="input-sty" name="phone" placeholder="Số điện thoại người nhận">
                                            </div>
                                        </div>
                                        <div class="form-block row">
                                            <div class="col-md-6">
                                                <input type="email" class="input-sty" name="email" value="{{ $username }}" placeholder="Email người nhận">
                                            </div>
                                        </div>
                                        <div class="form-block row">
                                            <div class="col-md-6">
                                                <input type="text" class="input-sty" name="address" placeholder="Địa chỉ nhận hàng">
                                            </div>
                                        </div>
                                        <div class="form-block row">
                                            <div class="col-md-8">
                                                <textarea placeholder="Nội dung" name="content" class="input-sty"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-block row">
                                            <div class="col-md-3">
                                                <button type="submit" class="bg-blue">BƯỚC TIẾP THEO</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-order">
                                <p>Đơn hàng (2 sản phẩm)</p>
                            </div>
                            <ul class="ul-block">
                                <li>
                                    <div class="block-hori">
                                        <div class="hori-left">
                                            <a href="" title=""><img src="images/product/product-20.png" alt="" title=""> </a>
                                        </div>
                                        <div class="hori-right">
                                            <p><a href="" title="">Bánh Pía hương vị Sầu Riêng - Đặc sản Tây Ninh</a> </p>
                                            <p class="txt-red">13.000.000 đ <span>x 3</span></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block-hori">
                                        <div class="hori-left">
                                            <a href="" title=""><img src="images/product/product-19.png" alt="" title=""> </a>
                                        </div>
                                        <div class="hori-right">
                                            <p><a href="" title="">Bộ 2 thùng 24 lon bia Tiger Crystal 330 ml + Tặng 4 lon cùng loại</a> </p>
                                            <p class="txt-red">13.000.000 đ <span>x 3</span></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="order-total">
                                <p class="flex-center-between">
                                    <span>Tổng tiền</span>
                                    <span class="txt-red font-weight-bold">12.460.000 đ</span>
                                </p>
                                <p class="flex-center-between">
                                    <span>Cước phí vận chuyển</span>
                                    <span>140.000 đ</span>
                                </p>
                            </div>
                            <div class="order-end">
                                <p class="flex-center-between">
                                    <span>Tổng thanh toán</span>
                                    <span class="font-weight-bold">17.000.000 đ</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="back-cart"><a href="gio-hang.html" title=""><i class="fa fa-arrow-left"></i> Quay lại giỏ hàng</a> </div>
                </div>
            </div>
        </section>
        <section class="method-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-uppercase">CÁCH THỨC THANH TOÁN</h6>
                        <ul class="flex-center">
                            <li><a href="" title=""><img src="images/product/payment-1.png" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="images/product/payment-2.png" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="images/product/payment-3.png" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="images/product/payment-4.png" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="images/product/payment-5.png" alt="" title=""> </a> </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h6 class="text-uppercase">DỊCH VỤ GIAO HÀNG</h6>
                        <ul class="flex-center">
                            <li><a href="" title=""><img src="images/product/transit-1.png" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="images/product/transit-2.png" alt="" title=""> </a> </li>
                            <li><a href="" title=""><img src="images/product/transit-3.png" alt="" title=""> </a> </li>
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