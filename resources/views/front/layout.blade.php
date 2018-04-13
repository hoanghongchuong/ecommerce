<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>Trang chủ | Thương Mại Điện Tử </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="copyright" content="" />

    <meta property="og:image" content="">
    <!--link css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/slimselect.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/responsive.css')}}">

    <!--Jquery library-->
    <script type="text/javascript" src="{{asset('/front/js/jquery.min.js')}}"></script>
    <script type="text/javascript">
        function baseUrl(){
            return '<?php echo url('/'); ?>';
        }
        {{--window.token = '{{ csrf_token() }}';--}}
        {{--window.urlAddCart = '{{ route("addProductToCartAjax") }}';--}}
        window.urlLoadDistrict = '{{ route("loadDistrictByProvince") }}';

    </script>
</head>
<body>


@include('front._particals.header')

    @yield('content')


@include('front._particals.footer')

<!-- Navfixed Left-->
<section id="IntroMenu" class="">
    <a href="index.html" title="" class="class-1">
        <span class="icon"><img src="{{asset('front/images/icon/i-home.png')}}" alt="" title=""> </span>
        <span class="text">Trang chủ</span>
    </a>
    <a href="#id-1" title="" class="class-2">
        <span class="icon"><img src="{{asset('/front/images/icon/i-dacsan.png')}}" alt="" title=""> </span>
        <span class="text">Đặc sản xứ Thanh</span></a>
    <a href="#id-2" title="" class="class-3">
        <span class="icon"><img src="{{asset('/front/images/icon/i-phone.png')}}" alt="" title=""> </span>
        <span class="text">Thiết bị điện tử</span>
    </a>
    <a href="#id-3" title="" class="class-4">
        <span class="icon"><img src="{{asset('/front/images/icon/i-laptop.png')}}" alt="" title=""> </span>
        <span class="text">Thiết bị gia dụng</span>
    </a>
    <a href="#id-4" title="" class="class-5">
        <span class="icon"><img src="{{asset('/front/images/icon/i-heart.png')}}" alt="" title=""> </span>
        <span class="text">Chăm sóc sức khỏe</span>
    </a>
    <a href="#id-5" title="" class="class-6">
        <span class="icon"><img src="{{asset('/front/images/icon/i-cycle.png')}}" alt="" title=""> </span>
        <span class="text">Mẹ, Bé và Đồ chơi</span>
    </a>
    <a href="#id-6" title="" class="class-7">
        <span class="icon"><img src="{{asset('/front/images/icon/i-shop.png')}}" alt="" title=""> </span>
        <span class="text">Siêu thị - tạp hóa</span>
    </a>
    <a href="#id-7" title="" class="class-8">
        <span class="icon"><img src="{{asset('/front/images/icon/i-shirt.png')}}" alt="" title=""> </span>
        <span class="text">Thời trang</span>
    </a>
    <a href="#id-8" title="" class="class-9">
        <span class="icon"><img src="{{asset('/front/images/icon/i-tenis.png')}}" alt="" title=""> </span>
        <span class="text">Dụng cụ thể thao</span>
    </a>
    <a href="#id-9" title="" class="class-10">
        <span class="icon"><img src="{{asset('/front/images/icon/i-list.png')}}" alt="" title=""> </span>
        <span class="text">Danh mục ngành hàng</span>
    </a>
</section>

<!-- Modal login-->
<div class="modal fade modal-user" id="login-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-cont">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="col-large">
                <div class="login-mod">
                    <h4>Đăng nhập tài khoản</h4>
                    <form>
                        <div class="form-block">
                            <label>Email hoặc SDT</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="form-block">
                            <label>Mật khẩu</label>
                            <input type="password" placeholder="">
                        </div>
                        <div class="form-block">
                            <button type="submit" class="bg-blue">ĐĂNG NHẬP</button>
                        </div>
                        <p class="or mg-20"><span>Hoặc đăng nhập bằng</span></p>
                    </form>
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
            </div>
            <div class="col-small">
                <div class="log-rule">
                    <p>Quyền lợi khi đăng ký thành viên</p>
                    <ul>
                        <li>
                            <span><img src="{{asset('/front/images/icon/i-check.png')}}" alt="" title=""></span>
                            <span>Hưởng chính sách giá đặc biệt cho thành viên</span>
                        </li>
                        <li>
                            <span><img src="{{asset('/front/images/icon/i-check.png')}}" alt="" title=""></span>
                            <span>Mua hàng nhanh chỉ với 1 nhấp chuột</span>
                        </li>
                        <li>
                            <span><img src="{{asset('/front/images/icon/i-check.png')}}" alt="" title=""></span>
                            <span>Sản phẩm đa dạng</span>
                        </li>
                        <li>
                            <span><img src="{{asset('/front/images/icon/i-check.png')}}" alt="" title=""></span>
                            <span>Đổi trả dễ dàng</span>
                        </li>
                        <li>
                            <span><img src="{{asset('/front/images/icon/i-check.png')}}" alt="" title=""></span>
                            <span>Tích điểm thưởng khi mua sản phẩm</span>
                        </li>
                    </ul>
                    <a href="" title="" class="pd-10" data-toggle="modal" data-target="#register-modal">ĐĂNG KÝ</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Modal login-->

<!-- Modal register-->
<div class="modal fade modal-user" id="register-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-cont">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="col-large">
                <div class="login-mod">
                    <h4>Đăng ký tài khoản</h4>
                    <form>
                        <div class="form-block">
                            <label>Email hoặc SDT</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="form-block">
                            <label>Mật khẩu</label>
                            <input type="password" placeholder="">
                        </div>
                        <div class="form-block">
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" placeholder="">
                        </div>
                        <div class="form-block">
                            <button type="submit" class="bg-blue">ĐĂNG KÝ</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-small">
                <div class="log-rule">
                    <p>Quyền lợi khi đăng ký thành viên</p>
                    <ul>
                        <li>
                            <span><img src="{{asset('/front/images/icon/i-check.png')}}" alt="" title=""></span>
                            <span>Hưởng chính sách giá đặc biệt cho thành viên</span>
                        </li>
                        <li>
                            <span><img src="{{asset('/front/images/icon/i-check.png')}}" alt="" title=""></span>
                            <span>Mua hàng nhanh chỉ với 1 nhấp chuột</span>
                        </li>
                        <li>
                            <span><img src="{{asset('/front/images/icon/i-check.png')}}" alt="" title=""></span>
                            <span>Sản phẩm đa dạng</span>
                        </li>
                        <li>
                            <span><img src="{{asset('/front/images/icon/i-check.png')}}" alt="" title=""></span>
                            <span>Đổi trả dễ dàng</span>
                        </li>
                        <li>
                            <span><img src="{{asset('/front/images/icon/i-check.png')}}" alt="" title=""></span>
                            <span>Tích điểm thưởng khi mua sản phẩm</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Modal register-->

<!-- Modal cart-->
<div class="modal fade modal-cart" id="cart-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-cont">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="cart-view">
                <h4>Giỏ hàng của bạn</h4>
                <table class="table table-responsive">
                    <thead>
                    <tr>
                        <th>SẢN PHẨM</th>
                        <th>GIÁ THÀNH</th>
                        <th>SỐ LƯỢNG</th>
                        <th>THÀNH TIỀN</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="flex-center cart-flex">
                                <span><img src="{{asset('/front/images/product/cart-pro-1.png')}}" alt="" title=""> </span>
                                <div class="product-ac">
                                    <p><a href="" title="">Chè lam Bảo Minh gói 200g ...</a> </p>
                                    <p class="delete-product">
                                        <a href="" title="" class="txt-red">
                                            <i class="fa fa-trash"></i>
                                            Xóa sản phẩm
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td><p class="money">28.990.000 ₫</p> </td>
                        <td><input type="number" value="1" min="0"></td>
                        <td><p class="money">28.990.000 ₫</p></td>
                    </tr>
                    <tr>
                        <td>
                            <div class="flex-center cart-flex">
                                <span><img src="{{asset('/front/images/product/cart-pro-2.png')}}" alt="" title=""> </span>
                                <div class="product-ac">
                                    <p><a href="" title="">Chè lam Bảo Minh gói 200g ...</a> </p>
                                    <p class="delete-product">
                                        <a href="" title="" class="txt-red">
                                            <i class="fa fa-trash"></i>
                                            Xóa sản phẩm
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td><p class="money">28.990.000 ₫</p> </td>
                        <td><input type="number" value="1" min="0"></td>
                        <td><p class="money">28.990.000 ₫</p></td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <p class="total-money">
                                Thành tiền: 57.000.000 ₫
                            </p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="cart-action">
                    <a href="" title="" class="bg-blue">TIẾP TỤC MUA HÀNG</a>
                    <a href="thanh-toan-buoc-1.html" title="" class="bg-blue">THANH TOÁN</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Link js-->
<script type="text/javascript" src="{{asset('/front/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/slimselect.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/private.js')}}"></script>

</body>
</html>