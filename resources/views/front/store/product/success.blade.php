@extends('front.store.layout')
@section('contentStore')
    <main class="tk-overlay">
        <section class="banner">
            <img src="{{ asset('/front/images/banner/tk-banner.jpg')}}" alt="" title="">
        </section>
        @include('front.store._particals.headerStore')
        <section class="tk-manage-product">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="finish-step">
                            <img src="{{ asset('/front/images/icon/i-finish.png')}}" alt="" title="" class="mgr-20">
                            <span>Bạn đã đăng 01 sản phẩm lên hệ thống quản lý. Chúng tôi sẽ xét duyệt SP của bạn sớm nhất</span>
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
        <section class="tk-footer-nav tk-footer-mainnav">
            <div class="container">
                <div class="buy-category">
                    <ul class="flex-center-center">
                        <li><a href="" title="">Đăng ký bán hàng</a> </li>
                        <li><a href="" title="">Giới thiệu về Fbuy.com.vn</a> </li>
                        <li><a href="" title="">Điều khoản và điều kiện giao dịch</a> </li>
                        <li><a href="" title="">Nội quy Sàn TMDT Fbuy</a> </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection