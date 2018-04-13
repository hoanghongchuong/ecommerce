@extends('front.layout')
@section('content')

    <main class="cd-main-content">
        <section class="breadcrumbs">
            <div class="container">
                <ul class="flex-center">
                    <li><a href="{{ url('') }}" title=""><i class="fa fa-home"></i> Trang chủ</a> </li>
                    <li><span>{{ $category->name }}</span> </li>
                </ul>
            </div>
        </section>
        @include('front._particals.slider2')
        <section class="product-page">
            <div class="container">
                <div class="top-section text-center">
                    <h1 class="page-title text-uppercase">{{ $category->name }}</h1>
                    <p>Tìm thấy {{ $numbProduct }} sản phẩm trong danh mục</p>
                </div>
                <div class="cateChild-slider slider-general owl-carousel">
                    <div class="item">
                        <a href="danh-sach-san-pham.html" title="">
                            <span class="cateChild-img"><img src="images/product/img-cate-1.png" alt="" title=""></span>
                            <span>Thực phẩm chế biến sẳn</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="danh-sach-san-pham.html" title="">
                            <span class="cateChild-img"><img src="images/product/img-cate-2.png" alt="" title=""></span>
                            <span>Lương thực khô</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="danh-sach-san-pham.html" title="">
                            <span class="cateChild-img"><img src="images/product/img-cate-3.png" alt="" title=""></span>
                            <span>Thực phẩm sấy khô</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="" title="">
                            <span class="cateChild-img"><img src="images/product/img-cate-4.png" alt="" title=""></span>
                            <span>Đồ uống</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="danh-sach-san-pham.html" title="">
                            <span class="cateChild-img"><img src="images/product/img-cate-5.png" alt="" title=""></span>
                            <span>Thực phẩm đóng hộp</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="danh-sach-san-pham.html" title="">
                            <span class="cateChild-img"><img src="images/product/img-cate-6.png" alt="" title=""></span>
                            <span>Rau - củ - quả</span>
                        </a>
                    </div>
                </div>
                <div class="filter">
                    <div class="row">
                        <div class="col-md-6 filter-name">
                            <span>Sắp xếp sản phẩm</span>
                            <select>
                                <option>Theo tên từ A -> Z</option>
                                <option>Theo tên từ Z -> A</option>
                            </select>
                        </div>
                        <div class="col-md-6 filter-number">
                            <span>Hiển thị</span>
                            <select>
                                <option>8</option>
                                <option>16</option>
                            </select>
                            <span>sản phẩm / 1 trang</span>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-md-3">
                            <div class="relative">
                                <div class="pro-item">
                                    <div class="pro-img">
                                        <a href="{{ url($product->slug. '-p'. $product->id) }}" title="{{ $product->name }}"><img src="{{ asset($product->image) }}" alt="" title=""> </a>
                                    </div>
                                    <div class="pro-info">
                                        <h4><a href="{{ url('san-pham/'.$product->slug. '-p'.$product->id.'.html') }}" title="{{ $product->name }}">{{ $product->name }}</a> </h4>
                                        <p class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <div class="price-box">
                                            @if($product->price_old > $product->price)
                                            <span class="price-down">-{{ 100 - ($product->price*100 / $product->price_old) }}%</span>
                                            @else
                                                <span class="price-down">-0%</span>
                                            @endif
                                            <div class="pro-price">
                                                <p class="new-price">{{ number_format($product->price) }} đ</p>
                                                @if($product->price_old > $product->price)
                                                <p class="old-price">{{ number_format($product->price_old) }} đ</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div class="pro-adv">--}}
                                        {{--<span><img src="{{ asset('/front/images/product/pro-adv.png')}}" alt="" title=""></span>--}}
                                        {{--<p>Tặng kèm 1 hộp kẹo dừa Bến Tre trị giá <b class="txt-red">32.000 đ</b> </p>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12">
                            <div class="paginations">
                                <ul class="flex-center-end">
                                    <li><a href="" title=""><i class="fa fa-angle-left"></i> </a> </li>
                                    <li><span>1</span></li>
                                    <li><a href="" title="">2</a> </li>
                                    <li class="no-bg"><a href="" title="">.....</a> </li>
                                    <li><a href="" title="">19</a> </li>
                                    <li><a href="" title=""><i class="fa fa-angle-right"></i> </a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-watched">
                    <h5>Sản phẩm đã xem</h5>
                    <div class="watched-slider owl-carousel">
                        <div class="watched-item">
                            <a href="san-pham-chi-tiet.html" title=""><img src="images/product/img-cate-1.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="san-pham-chi-tiet.html" title=""><img src="images/product/img-cate-2.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="san-pham-chi-tiet.html" title=""><img src="images/product/img-cate-3.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="san-pham-chi-tiet.html" title=""><img src="images/product/img-cate-4.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="san-pham-chi-tiet.html" title=""><img src="images/product/img-cate-5.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="san-pham-chi-tiet.html" title=""><img src="images/product/img-cate-6.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="images/product/img-cate-1.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="images/product/img-cate-2.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="images/product/img-cate-4.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="images/product/img-cate-6.png" alt="" title=""> </a>
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