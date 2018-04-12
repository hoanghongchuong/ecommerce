@extends('front.layout')
@section('content')
@include('front._particals.slider')
<section class="highlight-product" id="id-1">
    <div class="container">
        <h4><a href="danh-muc-san-pham.html" title=""  class="txt-blue">Đặc sản xứ Thanh</a> </h4>
        <div class="product-slider owl-carousel">
            <div class="product-item">
                <a href="san-pham-chi-tiet.html" title="" class="zoom"><img src="{{asset('/front/images/product/product-1.jpg')}}" title="" alt=""> </a>
                <div class="product-info">
                    <p><a href="san-pham-chi-tiet.html" title="">Nem chua xứ Thanh | Thơm ngon, thích hợp cho những cuộc nhậu</a> </p>
                    <p class="star">
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                    </p>
                    <p class="product-price">Giá: <b class="txt-red">30.000 VNĐ</b> /10 chiếc</p>
                </div>
            </div>
            <div class="product-item">
                <a href="san-pham-chi-tiet.html" title="" class="zoom"><img src="{{asset('/front/images/product/product-2.jpg')}}" title="" alt=""> </a>
                <div class="product-info">
                    <p><a href="san-pham-chi-tiet.html" title="">Kẹo lạc Bảo Minh | Đặc sản vùng Tây Bắc - Thanh Hóa</a> </p>
                    <p class="star">
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                    </p>
                    <p class="product-price">Giá: <b class="txt-red">30.000 VNĐ</b> /10 chiếc</p>
                </div>
            </div>
            <div class="product-item">
                <a href="san-pham-chi-tiet.html" title="" class="zoom"><img src="{{asset('/front/images/product/product-3.jpg')}}" title="" alt=""> </a>
                <div class="product-info">
                    <p><a href="san-pham-chi-tiet.html" title="">Chè lam Bảo Minh gói 200g - Mã 9EQGVK</a> </p>
                    <p class="star">
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                    </p>
                    <p class="product-price">Giá: <b class="txt-red">30.000 VNĐ</b> /10 chiếc</p>
                </div>
            </div>
            <div class="product-item">
                <a href="san-pham-chi-tiet.html" title="" class="zoom"><img src="{{asset('/front/images/product/product-4.jpg')}}" title="" alt=""> </a>
                <div class="product-info">
                    <p><a href="san-pham-chi-tiet.html" title="">Bánh gai Tứ trụ - Đặc sản vùng đất Thọ Xuân - Thanh Hóa</a> </p>
                    <p class="star">
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                        <a class="fa fa-star"></a>
                    </p>
                    <p class="product-price">Giá: <b class="txt-red">30.000 VNĐ</b> /10 chiếc</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block-product" id="id-2">
    <div class="container">
        <div class="block-cate">
            <div class="flex-center-between">
                <div class="block-title">
                    <a href="danh-muc-san-pham.html" title="">
                        <span class="inflex-center-center">1</span>Thiết bị điện tử
                    </a>
                </div>
                <div class="block-cate-list">
                    <ul class="inflex-center-center">
                        <li><a href="danh-sach-san-pham.html" title="">ĐTDĐ</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Hệ thống giải trí tại gia</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Laptop</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Máy ảnh & Máy quay</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Máy bay camera</a> </li>
                        <li><a href="danh-muc-san-pham.htmll" title=""><i class="fa fa-angle-double-right"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="block-banner">
            <div class="row no-gutters">
                <div class="col-md-6 height-4">
                    <a href="danh-sach-san-pham.html" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-1.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-4">
                    <a href="danh-sach-san-pham.html" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-2.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-4">
                    <a href="danh-sach-san-pham.html" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-3.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-4.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-5.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html"title="" class=""><img src="{{asset('/front/images/banner/banner-block-6.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html"title="" class=""><img src="{{asset('/front/images/banner/banner-block-7.jpg')}}" alt="" title=""> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block-product" id="id-3">
    <div class="container">
        <div class="block-cate">
            <div class="flex-center-between">
                <div class="block-title block-title-2">
                    <a href="danh-muc-san-pham.html" title="">
                        <span class="inflex-center-center">2</span>Thiết bị gia dụng
                    </a>
                </div>
                <div class="block-cate-list">
                    <ul class="inflex-center-center">
                        <li><a href="danh-sach-san-pham.html" title="">Bàn ủi & Bàn ủi hơi nước</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Đồ gia dụng nhà bếp</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Gia dụng nhà bếp</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Hệ thống giải trí tại gia</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Tivi</a> </li>
                        <li><a href="danh-muc-san-pham.html" title=""><i class="fa fa-angle-double-right"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="block-banner">
            <div class="row no-gutters">
                <div class="col-md-6 height-4">
                    <a href="" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-8.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-4">
                    <a href="danh-sach-san-pham.html" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-9.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-4">
                    <a href="danh-sach-san-pham.html" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-10.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-11.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-12.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-13.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-14.jpg')}}" alt="" title=""> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block-product" id="id-4">
    <div class="container">
        <div class="block-cate">
            <div class="flex-center-between">
                <div class="block-title block-title-3">
                    <a href="danh-muc-san-pham.html" title="">
                        <span class="inflex-center-center">3</span>Chăm sóc sức khỏe
                    </a>
                </div>
                <div class="block-cate-list">
                    <ul class="inflex-center-center">
                        <li><a href="danh-sach-san-pham.html" title="">Chăm sóc cá nhân</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Chăm sóc răng miệng</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Khử mùi</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Kính áp tròng</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Nước hoa</a> </li>
                        <li><a href="danh-sach-san-pham.html" title="">Thiết bị y tế</a> </li>
                        <li><a href="danh-muc-san-pham.html" title=""><i class="fa fa-angle-double-right"></i></a> </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="block-banner">
            <div class="row no-gutters">
                <div class="col-md-6 height-4">
                    <a href="" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-15.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-4">
                    <a href="danh-sach-san-pham.html" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-16.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-4">
                    <a href="danh-sach-san-pham.html" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-17.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-18.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-19.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-20.jpg')}}" alt="" title=""> </a>
                </div>
                <div class="col-md-3 height-5">
                    <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-21.jpg')}}" alt="" title=""> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block-group">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block-product"  id="id-5">
                    <div class="block-cate">
                        <div class="flex-center-between">
                            <div class="block-title block-title-4">
                                <a href="danh-sach-san-pham.html" title="">
                                    <span class="inflex-center-center">4</span>Mẹ, Bé và Đồ chơi
                                </a>
                            </div>
                            <div class="block-cate-list">
                                <ul class="inflex-center-center">
                                    <li><a href="danh-muc-san-pham.html" title=""><i class="fa fa-angle-double-right"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="block-banner">
                        <div class="row">
                            <div class="col-md-12 height-6">
                                <a href="danh-sach-san-pham.html" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-22.jpg')}}" alt="" title=""> </a>
                            </div>
                            <div class="col-md-6 height-7">
                                <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-23.jpg')}}" alt="" title=""> </a>
                            </div>
                            <div class="col-md-6 height-7">
                                <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-24.jpg')}}" alt="" title=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-product"  id="id-6">
                    <div class="block-cate">
                        <div class="flex-center-between">
                            <div class="block-title block-title-5">
                                <a href="danh-muc-san-pham.html" title="">
                                    <span class="inflex-center-center">5</span>Siêu thị - tạp hóa
                                </a>
                            </div>
                            <div class="block-cate-list">
                                <ul class="inflex-center-center">
                                    <li><a href="danh-muc-san-pham.html" title=""><i class="fa fa-angle-double-right"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="block-banner">
                        <div class="row">
                            <div class="col-md-12 height-6">
                                <a href="danh-sach-san-pham.html" title="" class="effect"><img src="{{asset('front/images/banner/banner-block-25.jpg')}}" alt="" title=""> </a>
                            </div>
                            <div class="col-md-6 height-7">
                                <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('front/images/banner/banner-block-26.jpg')}}" alt="" title=""> </a>
                            </div>
                            <div class="col-md-6 height-7">
                                <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('front/images/banner/banner-block-27.jpg')}}" alt="" title=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-product"  id="id-7">
                    <div class="block-cate">
                        <div class="flex-center-between">
                            <div class="block-title block-title-6">
                                <a href="danh-muc-san-pham.html" title="">
                                    <span class="inflex-center-center">6</span>Thời trang
                                </a>
                            </div>
                            <div class="block-cate-list">
                                <ul class="inflex-center-center">
                                    <li><a href="danh-muc-san-pham.html" title=""><i class="fa fa-angle-double-right"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="block-banner">
                        <div class="row">
                            <div class="col-md-12 height-6">
                                <a href="danh-sach-san-pham.html" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-28.jpg')}}" alt="" title=""> </a>
                            </div>
                            <div class="col-md-6 height-7">
                                <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-29.jpg')}}" alt="" title=""> </a>
                            </div>
                            <div class="col-md-6 height-7">
                                <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-30.jpg')}}" alt="" title=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="block-product"  id="id-8">
                    <div class="block-cate">
                        <div class="flex-center-between">
                            <div class="block-title block-title-7">
                                <a href="danh-muc-san-pham.html" title="">
                                    <span class="inflex-center-center">7</span>Dụng cụ thể thao
                                </a>
                            </div>
                            <div class="block-cate-list">
                                <ul class="inflex-center-center">
                                    <li><a href="danh-muc-san-pham.html" title=""><i class="fa fa-angle-double-right"></i></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="block-banner">
                        <div class="row">
                            <div class="col-md-12 height-6">
                                <a href="danh-sach-san-pham.html" title="" class="effect"><img src="{{asset('/front/images/banner/banner-block-31.jpg')}}" alt="" title=""> </a>
                            </div>
                            <div class="col-md-6 height-7">
                                <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-32.jpg')}}" alt="" title=""> </a>
                            </div>
                            <div class="col-md-6 height-7">
                                <a href="danh-sach-san-pham.html" title="" class=""><img src="{{asset('/front/images/banner/banner-block-33.jpg')}}" alt="" title=""> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="category-logo"  id="id-9">
    <div class="container">
        <h5>Danh mục ngành hàng</h5>
        <ul>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-1.jpg')}}" alt="" title=""></span>  <span>Nồi cơm điện</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-2.jpg')}}" alt="" title=""></span> <span>Dưỡng ẩm</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-3.jpg')}}" alt="" title=""></span> <span>Lò nướng</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-4.jpg')}}" alt="" title=""></span> <span>Các loại kẹo</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-5.jpg')}}" alt="" title=""></span> <span>Máy sấy tóc</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-6.jpg')}}" alt="" title=""></span> <span>Dụng cụ dã ngoại</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-7.jpg')}}" alt="" title=""></span> <span>ĐTDĐ</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-8.jpg')}}" alt="" title=""></span> <span>Phụ kiện ĐT</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-9.jpg')}}" alt="" title=""></span> <span>Giày nam</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-10.jpg')}}" alt="" title=""></span> <span>Tả giấy</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-11.jpg')}}" alt="" title=""></span> <span>Loa di động</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-12.jpg')}}" alt="" title=""></span> <span>Giày nữ</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-13.jpg')}}" alt="" title=""></span> <span>Đồng hồ nam</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-14.jpg')}}" alt="" title=""></span> <span>Smart tivi</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-15.jpg')}}" alt="" title=""></span> <span>Linh kiện điện</span> </a>
            </li>
            <li>
                <a href="danh-sach-san-pham.html" title=""><span class="cate-img"><img src="{{asset('/front/images/banner/cate-img-16.jpg')}}" alt="" title=""></span> <span>Bánh kẹo</span> </a>
            </li>
        </ul>
    </div>
</section>
<section class="method-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h6 class="text-uppercase">CÁCH THỨC THANH TOÁN</h6>
                <ul class="flex-center">
                    <li><a href="" title=""><img src="{{asset('/front/images/product/payment-1.png')}}" alt="" title=""> </a> </li>
                    <li><a href="" title=""><img src="{{asset('/front/images/product/payment-2.png')}}" alt="" title=""> </a> </li>
                    <li><a href="" title=""><img src="{{asset('/front/images/product/payment-3.png')}}" alt="" title=""> </a> </li>
                    <li><a href="" title=""><img src="{{asset('/front/images/product/payment-4.png')}}" alt="" title=""> </a> </li>
                    <li><a href="" title=""><img src="{{asset('/front/images/product/payment-5.png')}}" alt="" title=""> </a> </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h6 class="text-uppercase">DỊCH VỤ GIAO HÀNG</h6>
                <ul class="flex-center">
                    <li><a href="" title=""><img src="{{asset('/front/images/product/transit-1.png')}}" alt="" title=""> </a> </li>
                    <li><a href="" title=""><img src="{{asset('/front/images/product/transit-2.png')}}" alt="" title=""> </a> </li>
                    <li><a href="" title=""><img src="{{asset('/front/images/product/transit-3.png')}}" alt="" title=""> </a> </li>
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
@endsection