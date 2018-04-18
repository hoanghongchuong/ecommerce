<section class="tk-main-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="shopName">
                    <div class="block-hori">
                        <div class="hori-left">
                            <a href="#" title=""><img src="{{ asset('/front/images/banner/avata-3.jpg')}}" alt="" title=""> </a>
                        </div>
                        <div class="hori-right">
                            <p><a href="#" title="">{{ $is_store->full_name }}</a> </p>
                            <p class="star">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 flex-center">
                <div class="shop-nav">
                    <ul class="flex-center-between">
                        <li>
                            <a href="{{ route('listProduct') }}" title="">Sản phẩm <i class="fa fa-caret-down"></i></a>
                            <div class="user-abs">
                                <div class="block-shadow">
                                    <ul>
                                        <li><a href="{{ route('store.product.getCreate') }}" title="">Thêm sản phẩm</a> </li>
                                        <li><a href="{{ route('listProduct') }}" title="">Danh sách sản phẩm</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ route('store.order.index') }}" title="">Đơn hàng</a> </li>
                        <li><a href="#" title="">Khuyến mãi</a> </li>
                        <li>
                            <a href="" title="">Tài chính <i class="fa fa-caret-down"></i></a>
                            <div class="user-abs">
                                <div class="block-shadow">
                                    <ul>
                                        <li><a href="TK-bao-cao-tai-chinh.html" title="">Báo cáo tài chính</a> </li>
                                        <li><a href="" title="">Tổng quan giao dịch</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="edit-shopInfo"><a href="" title="">Sửa thông tin</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>