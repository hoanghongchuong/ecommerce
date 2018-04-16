@extends('front.store.layout')
@section('contentStore')
    <main class="tk-overlay">
        <section class="banner">
            <img src="{{ asset('/front/images/banner/tk-banner.jpg')}}" alt="" title="">
        </section>
        @include('front.store._particals.headerStore')
        <section class="tk-manage-product">
            <div class="container">
                <h1 class="title-page mgb-20">Danh sách sản phẩm</h1>
                <div class="manageProduct-action">
                    <div class="row">
                        <div class="col-md-6 flex-center">
                            <div class="filter-cate">
                                <select>
                                    <option>Danh mục sản phẩm</option>
                                    <option>Danh mục sản phẩm 1</option>
                                    <option>Danh mục sản phẩm 2</option>
                                </select>
                            </div>
                            <div class="search search-product">
                                <form>
                                    <input type="text" placeholder="Từ khóa...">
                                    <button><i class="fa fa-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 flex-center-end">
                            <div class="import-excel">
                                <a href="" title="" class="txt-blue" data-toggle="modal" data-target="#import-excel">
                                    <img src="images/icon/i-excel.png" alt="" title="">
                                    <span>Import dữ liệu</span>
                                </a>
                            </div>
                            <div class="addProduct-link">
                                <a href="{{ route('store.product.getCreate') }}" title="" class="inflex-center-center">
                                    <img src="{{ asset('/front/images/icon/i-zoom.png')}}" alt="" title="">
                                    <span>Thêm sản phẩm</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-manageProduct">
                    <table class="table table-responsive table-normal">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Sản phẩm</th>
                            <th>Mã sản phẩm</th>
                            <th>Giá cũ</th>
                            <th>Giá bán</th>
                            <th>Tình trạng</th>
                            <th>Hiển thị</th>
                            <th>Ngày up</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="flex cart-flex">
                                    <span><img src="images/product/cart-pro-2.png" alt="" title=""> </span>
                                    <div class="product-ac text-left">
                                        <p><a href="" title="">Kẹo lạc Bảo Minh - Đặc sản xứ Thanh</a> </p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="font-weight-bold">#FB-3025-32018</span></td>
                            <td>45.000 đ</td>
                            <td>50.000 đ</td>
                            <td><span class="txt-blue">Còn hàng</span></td>
                            <td><img src="images/icon/i-hidden.png" alt="" title=""> </td>
                            <td>12-03-2018</td>
                            <td>
                                <div class="manage-action">
                                    <a href="" title="">Quản lý <i class="fa fa-caret-down"></i> </a>
                                    <div class="user-abs">
                                        <div class="block-shadow">
                                            <ul>
                                                <li><a href="" title="">Sửa thông tin</a> </li>
                                                <li><a href="" title="" data-toggle="modal" data-target="#delete-product">Xóa sản phẩm</a> </li>
                                                <li><a href="" title="">Quản lý hình ảnh SP</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="flex cart-flex">
                                    <span><img src="images/product/cart-pro-1.png" alt="" title=""> </span>
                                    <div class="product-ac text-left">
                                        <p><a href="" title="">Kẹo lạc Bảo Minh - Đặc sản xứ Thanh</a> </p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="font-weight-bold">#FB-3025-32018</span></td>
                            <td>45.000 đ</td>
                            <td>50.000 đ</td>
                            <td><span class="txt-blue">Còn hàng</span></td>
                            <td><img src="images/icon/i-hidden.png" alt="" title=""> </td>
                            <td>12-03-2018</td>
                            <td>
                                <div class="manage-action">
                                    <a href="" title="">Quản lý <i class="fa fa-caret-down"></i> </a>
                                    <div class="user-abs">
                                        <div class="block-shadow">
                                            <ul>
                                                <li><a href="" title="">Sửa thông tin</a> </li>
                                                <li><a href="" title="" data-toggle="modal" data-target="#delete-product">Xóa sản phẩm</a> </li>
                                                <li><a href="" title="">Quản lý hình ảnh SP</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="flex cart-flex">
                                    <span><img src="images/product/cart-pro-1.png" alt="" title=""> </span>
                                    <div class="product-ac text-left">
                                        <p><a href="" title="">Bánh chả khay 130gr Bảo Minh</a> </p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="font-weight-bold">#FB-3025-32018</span></td>
                            <td>45.000 đ</td>
                            <td>50.000 đ</td>
                            <td><span class="txt-blue">Còn hàng</span></td>
                            <td>
                                <div class="onoffswitch">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                    <label class="onoffswitch-label" for="myonoffswitch">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                    <p class="stt-check"></p>
                                </div>
                            </td>
                            <td>12-03-2018</td>
                            <td>
                                <div class="manage-action">
                                    <a href="" title="">Quản lý <i class="fa fa-caret-down"></i> </a>
                                    <div class="user-abs">
                                        <div class="block-shadow">
                                            <ul>
                                                <li><a href="" title="">Sửa thông tin</a> </li>
                                                <li><a href="" title="" data-toggle="modal" data-target="#delete-product">Xóa sản phẩm</a> </li>
                                                <li><a href="" title="">Quản lý hình ảnh SP</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="flex cart-flex">
                                    <span><img src="images/product/cart-pro-1.png" alt="" title=""> </span>
                                    <div class="product-ac text-left">
                                        <p><a href="" title="">Bánh chả khay 130gr Bảo Minh</a> </p>
                                    </div>
                                </div>
                            </td>
                            <td><span class="font-weight-bold">#FB-3025-32018</span></td>
                            <td>45.000 đ</td>
                            <td>50.000 đ</td>
                            <td><span class="txt-blue">Còn hàng</span></td>
                            <td>
                                <div class="onoffswitch">
                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch-2" checked>
                                    <label class="onoffswitch-label" for="myonoffswitch-2">
                                        <span class="onoffswitch-inner"></span>
                                        <span class="onoffswitch-switch"></span>
                                    </label>
                                    <p class="stt-check"></p>
                                </div>
                            </td>
                            <td>12-03-2018</td>
                            <td>
                                <div class="manage-action">
                                    <a href="" title="">Quản lý <i class="fa fa-caret-down"></i> </a>
                                    <div class="user-abs">
                                        <div class="block-shadow">
                                            <ul>
                                                <li><a href="" title="">Sửa thông tin</a> </li>
                                                <li><a href="" title="" data-toggle="modal" data-target="#delete-product">Xóa sản phẩm</a> </li>
                                                <li><a href="" title="">Quản lý hình ảnh SP</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="get-page">
                        <div class="row">
                            <div class="col-md-6 flex-center">
                                <div class="number-page">
                                    <span>Hiển thị</span>
                                    <select class="box-radius">
                                        <option>10</option>
                                        <option>20</option>
                                    </select>
                                    <span>sản phẩm</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="paginations">
                                    <ul class="flex-center-end">
                                        <li>Trang</li>
                                        <li><span>1</span></li>
                                        <li><a href="" title="">2</a> </li>
                                        <li><a href="" title="">3</a> </li>
                                        <li><a href="" title="">4</a> </li>
                                    </ul>
                                </div>
                            </div>
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