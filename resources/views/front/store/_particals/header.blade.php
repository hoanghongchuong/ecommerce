<header>
    <section class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 header-col-1">
                    <div class="logo">
                        <a href="{{ url('') }}" title=""><img src="{{ asset('/front/images/logo/logo.png')}}" alt="" title=""> </a>
                    </div>
                </div>
                <div class="col-md-6 header-col-2">
                    <div class="menu-collapse">
                        <a href="" title=""><img src="{{ asset('/front/images/icon/i-menu.png')}}" alt="" title=""> </a>
                        <div class="nav-hover">
                            <div class="nav-hover-content">
                                <ul>
                                    <li class="has-child"><a href="danh-muc-san-pham.html" title="">Đặc sản xứ Thanh</a></li>
                                    <li class="has-child">
                                        <a href="danh-muc-san-pham.html" title="">Thiết bị điện tử <i class="fa fa-angle-right"></i></a>
                                        <ul class="menu-sub">
                                            <li><a href="danh-sach-san-pham.html" title="">ĐTDĐ</a> </li>
                                            <li><a href="danh-sach-san-pham.html" title="">Hệ thống giải trí tại gia</a> </li>
                                            <li><a href="danh-sach-san-pham.html" title="">Laptop</a> </li>
                                            <li><a href="danh-sach-san-pham.html" title="">Máy ảnh & Máy quay</a> </li>
                                            <li><a href="danh-sach-san-pham.html" title="">Máy bay camera</a> </li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="danh-muc-san-pham.html" title="">Thiết bị gia dụng <i class="fa fa-angle-right"></i></a>
                                        <ul class="menu-sub">
                                            <li><a href="danh-sach-san-pham.html" title="">Bàn ủi & Bàn ủi hơi nước</a> </li>
                                            <li><a href="danh-sach-san-pham.html" title="">Đồ gia dụng nhà bếp</a> </li>
                                            <li><a href="danh-sach-san-pham.html" title="">Gia dụng nhà bếp</a> </li>
                                            <li><a href="danh-sach-san-pham.html" title="">Hệ thống giải trí tại gia</a> </li>
                                            <li><a href="danh-sach-san-pham.html" title="">Tivi</a> </li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="danh-muc-san-pham.html" title="">Chăm sóc sức khỏe <i class="fa fa-angle-right"></i></a>
                                        <ul class="menu-sub">
                                            <li><a href="" title=""></a> </li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="danh-muc-san-pham.html" title="">Mẹ, Bé và Đồ chơi <i class="fa fa-angle-right"></i></a>
                                        <ul class="menu-sub">
                                            <li><a href="" title=""></a> </li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="" title="">Siêu thị / Tạp hóa <i class="fa fa-angle-right"></i></a>
                                        <ul class="menu-sub">
                                            <li><a href="" title=""></a> </li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="" title="">Hàng Gia dụng <i class="fa fa-angle-right"></i></a>
                                        <ul class="menu-sub">
                                            <li><a href="" title=""></a> </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="search">
                        <form>
                            <input type="text" placeholder="Tìm kiếm trên Fbuy....">
                            <button><i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 header-col-3">
                    <div class="header-action">
                        <div class="header-bell">
                            <a href="" title="" data-toggle="modal" data-target="#cart-modal">
                                <i class="fa fa-bell-o"></i>
                            </a>
                        </div>
                        <div class="header-user header-user-shop">
                            <a href="" title="" class="not-login" style="display: none">
                                <span><img src="{{ asset('/front/images/icon/i-user.png')}}" alt="" title=""> </span>
                                <div class="header-user--name">
                                    <p>Tài khoản <i class="fa fa-caret-down"></i> </p>
                                    <p>Signup & Login</p>
                                </div>
                            </a>
                            <a href="" title="" class="logined shop-logined">
                                <span><img src="{{ asset('front/images/icon/icon-avatar-2.jpg')}}" alt="" title=""> </span>
                                <div class="header-user--name">
                                    <p>{{ $is_store->full_name }} <i class="fa fa-caret-down"></i> </p>
                                </div>
                            </a>
                            <div class="user-abs">
                                <!--<div class="user-not-login user-abs-inner block-shadow" style="display: none">-->
                                <!--<a href="" title="" data-toggle="modal" data-target="#login-modal" class="bg-blue">Đăng nhập</a>-->
                                <!--<p>Khách hàng mới</p>-->
                                <!--<a href="" title="" data-toggle="modal" data-target="#register-modal" class="txt-blue">-->
                                <!--<i class="fa fa-user-plus"></i> Đăng ký tài khoản-->
                                <!--</a>-->
                                <!--</div>-->
                                <div class="user-login user-abs-inner block-shadow">
                                    <ul>
                                        <li><a href="{{ route('detailStore', $is_store->id) }}" title="">Thông tin gian hàng</a> </li>
                                        <li><a href="#" title="">Cài đặt tài khoản</a> </li>
                                        <li><a href="{{ route('store.logout') }}" title="">Đăng xuất</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>