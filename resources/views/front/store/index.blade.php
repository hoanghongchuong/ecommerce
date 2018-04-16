@extends('front.store.layout')
@section('contentStore')

    <section class="banner">
        <img src="{{ asset('/front/images/banner/tk-banner.jpg')}}" alt="" title="">
    </section>
    @include('front.store._particals.headerStore')
    <section class="shop-statistic">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="statistic-item">
                        <div class="block-hori">
                            <div class="hori-left">
                                <span><img src="{{ asset('/front/images/icon/i-thonke-1.png')}}" alt="" title=""> </span>
                            </div>
                            <div class="hori-right">
                                <h4>125</h4>
                                <p>Tổng số lượng sản phẩm</p>
                            </div>
                        </div>
                        <ul>
                            <li class="flex-center-between">
                                <span>Sản phẩm bị từ chối</span>
                                <span class="txt-red">5</span>
                            </li>
                            <li class="flex-center-between">
                                <span>Sản phẩm đã được duyệt</span>
                                <span class="txt-blue">118</span>
                            </li>
                            <li class="flex-center-between">
                                <span>Sản phẩm đang chờ duyệt</span>
                                <span class="txt-blue">15</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="statistic-item">
                        <div class="block-hori">
                            <div class="hori-left">
                                <span><img src="{{ asset('/front/images/icon/i-thonke-2.png')}}" alt="" title=""> </span>
                            </div>
                            <div class="hori-right">
                                <h4>755</h4>
                                <p>Tổng số lượng đơn hàng</p>
                            </div>
                        </div>
                        <ul>
                            <li class="flex-center-between">
                                <span>Đơn hàng chưa xử lý</span>
                                <span class="txt-red">5</span>
                            </li>
                            <li class="flex-center-between">
                                <span>Đơn hàng đã xử lý</span>
                                <span class="txt-blue">118</span>
                            </li>
                            <li class="flex-center-between">
                                <span>Đơn hàng đã hủy</span>
                                <span class="txt-blue">15</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="statistic-item">
                        <div class="block-hori">
                            <div class="hori-left">
                                <span><img src="{{ asset('/front/images/icon/i-thonke-3.png')}}" alt="" title=""> </span>
                            </div>
                            <div class="hori-right">
                                <h4>1125</h4>
                                <p>Số lượt đánh giá shop</p>
                            </div>
                        </div>
                        <ul>
                            <li class="flex-center-between">
                                <span>Số lượt đánh giá tốt</span>
                                <span class="txt-red">5</span>
                            </li>
                            <li class="flex-center-between">
                                <span>Số lượt đánh giá kém</span>
                                <span class="txt-blue">118</span>
                            </li>
                            <li class="flex-center-between">
                                <span>Còn lại</span>
                                <span class="txt-blue">15</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="chart">
        <div class="container">
            <div class="detail-content chart-content">
                <div class="filter-time">
                    <select>
                        <option>Hiển thị theo tuần</option>
                        <option>Hiển thị theo tháng</option>
                        <option>Hiển thị theo năm</option>
                    </select>
                </div>
                <canvas id="canvas" width="100%"></canvas>
            </div>
        </div>
    </section>
    <section class="highlight-product sale-product">
        <div class="container">
            <h4>Khuyến mãi</h4>
            <div class="product-slider owl-carousel">
                <div class="product-item">
                    <a href="" title="" class="zoom"><img src="{{ asset('front/images/product/product-1.jpg')}}" title="" alt=""> </a>
                    <div class="product-info">
                        <p><a href="" title="">Nem chua xứ Thanh | Thơm ngon, thích hợp cho những cuộc nhậu</a> </p>
                        <p class="star">
                            <a class="fa fa-star"></a>
                            <a class="fa fa-star"></a>
                            <a class="fa fa-star"></a>
                            <a class="fa fa-star"></a>
                            <a class="fa fa-star"></a>
                        </p>
                        <p class="product-price"><span class="price-down">-6%</span> Giá: <b class="txt-red">30.000 VNĐ</b> /10 chiếc</p>
                    </div>
                </div>
                <div class="product-item">
                    <a href="" title="" class="zoom"><img src="{{ asset('front/images/product/product-2.jpg')}}" title="" alt=""> </a>
                    <div class="product-info">
                        <p><a href="" title="">Kẹo lạc Bảo Minh | Đặc sản vùng Tây Bắc - Thanh Hóa</a> </p>
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
                    <a href="" title="" class="zoom"><img src="{{ asset('front/images/product/product-3.jpg')}}" title="" alt=""> </a>
                    <div class="product-info">
                        <p><a href="" title="">Chè lam Bảo Minh gói 200g - Mã 9EQGVK</a> </p>
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
                    <a href="" title="" class="zoom"><img src="{{ asset('front/images/product/product-4.jpg')}}" title="" alt=""> </a>
                    <div class="product-info">
                        <p><a href="" title="">Bánh gai Tứ trụ - Đặc sản vùng đất Thọ Xuân - Thanh Hóa</a> </p>
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
@endsection