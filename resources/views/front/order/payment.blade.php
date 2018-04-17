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
                        <li class="active"><a href="thanh-toan-buoc-1.html" title="">
                                <span>1</span> Thông tin đăng nhập
                            </a> </li>
                        <li><a href="thanh-toan-buoc-2.html" title="">
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
                        <div class="col-md-4 offset-md-2">
                            <div class="payment-step">
                                <form action="{{ route('postUsername') }}" method="post">
                                    {{ csrf_field() }}
                                <div class="payment-step-1">
                                    <p>Vui lòng nhập số điện thoại hoặc Email để tiếp tục thanh toán</p>
                                    <input type="text" placeholder="Email hoặc số điện thoại" name="username" class="input-sty mg-20">
                                    <div class="radio-box">
                                        <input type="radio" id="checkbox_1"  value="1" name="acc-check" checked>
                                        <label for="checkbox_1">Tôi đã có tài khoản tại Fbuy</label>
                                    </div>
                                    <div class="radio-box">
                                        <input type="radio" id="checkbox_2" value="2" name="acc-check">
                                        <label for="checkbox_2">Tôi là khách hàng mới</label>
                                    </div>
                                    <div class="has-account desc-acc" id="account-1">
                                        <input type="password" placeholder= "Mật khẩu (*)" class="input-sty">
                                        <p class="forget-pass"><a href="" title="" class="txt-blue">Quên mật khẩu</a> </p>
                                        <div class="form-block">
                                            <button type="submit" class="bg-blue text-uppercase">đăng nhập mua hàng</button>
                                        </div>
                                        <p class="or mg-20"><span>Hoặc đăng nhập bằng</span></p>
                                        <div class="login-social">
                                            <a href="" title="">
                                                <i class="fa fa-google-plus"></i>
                                                Google
                                            </a>
                                            <a href="" title="">
                                                <i class="fa fa-facebook"></i>
                                                Facebook
                                            </a>
                                        </div>
                                    </div>
                                    <div class="nothas-account desc-acc" id="account-2">
                                        {{--<input type="password" placeholder= "Mật khẩu (*)" class="input-sty">--}}
                                        {{--<input type="password" placeholder= "Nhập lại mật khẩu (*)" class="input-sty">--}}
                                        <div class="form-block">
                                            <button type="submit" class="bg-blue text-uppercase">Tiếp tục</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4 offset-md-2">
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