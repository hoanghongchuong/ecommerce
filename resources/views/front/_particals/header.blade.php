<header>
    <section class="header-top">
        <div class="container">
            <ul class="flex-center-end">
                <li><a href="" title="">Tải app Fbuy</a> </li>
                <li><a href="chinh-sach-bao-mat.html" title="">Chính sách bảo mật</a> </li>
                <li><a href="" title="">Chính sách thanh toán</a> </li>
                <li class="relative">
                    <a href="" title="" id="check-code">Kiểm tra đơn hàng</a>
                    <div class="check-code">
                        <div class="block-shadow">
                            <p>Mã đơn hàng</p>
                            <input type="text" placeholder="">
                            <a href="kiem-tra-don.html" title="" class="bg-blue text-uppercase">KIỂM TRA</a>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('store.register') }}" title="">BÁN HÀNG CÙNG FBUY</a> </li>
            </ul>
        </div>
    </section>
    <section class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 header-col-1">
                    <div class="logo">
                        <a href="{{ url('') }}" title=""><img src="{{asset('/front/images/logo/logo.png')}}" alt="" title=""> </a>
                    </div>
                </div>
                <div class="col-md-6 header-col-2">
                    <div class="search">
                        <form>
                            <input type="text" placeholder="Tìm kiếm trên Fbuy....">
                            <button><i class="fa fa-search"></i> </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 header-col-3">
                    <div class="header-action">
                        <div class="header-cart">
                            <a href="" title="" data-toggle="modal" data-target="#cart-modal">
                                <img src="{{asset('/front/images/icon/i-cart.png')}}" alt="" title="">
                                <span>5</span>
                            </a>
                        </div>
                        <div class="header-user">
                            <a href="" title="">
                                <span><img src="{{asset('/front/images/icon/i-user.png')}}" alt="" title=""> </span>
                                <div class="header-user--name">
                                    <p>Tài khoản <i class="fa fa-caret-down"></i> </p>
                                    <p>Signup & Login</p>
                                </div>
                            </a>
                            <div class="user-abs">
                                <div class="user-not-login user-abs-inner block-shadow">
                                    <a href="" title="" data-toggle="modal" data-target="#login-modal" class="bg-blue">Đăng nhập</a>
                                    <p>Khách hàng mới</p>
                                    <a href="" title="" data-toggle="modal" data-target="#register-modal" class="txt-blue">
                                        <i class="fa fa-user-plus"></i> Đăng ký tài khoản
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>