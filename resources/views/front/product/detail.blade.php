@extends('front.layout')
@section('content')
    <main class="cd-main-content">
        <section class="breadcrumbs">
            <div class="container">
                <ul class="flex-center">
                    <li><a href="{{ url('') }}" title=""><i class="fa fa-home"></i> Trang chủ</a> </li>
                    <li><a href="#" title="">Siêu thị - Tạp hóa - Tiêu dùng</a></li>
                    <li><span>Bánh pía vị Sầu Riêng</span> </li>
                </ul>
            </div>
        </section>
        <section class="detail-page">
            <div class="container">
                <div class="detail-content">
                    <div class="product-detail">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="sync1" class="product-image-slider owl-carousel owl-theme not-dqowl">
                                    <a href="{{ asset('/front/images/product/product-main.jpg')}}" data-fancybox="images"><img src="{{ asset('/front/images/product/product-main.jpg')}}" alt="" title=""> </a>
                                    <a href="{{ asset('/front/images/product/product-main-2.jpg')}}" data-fancybox="images"><img src="{{ asset('/front/images/product/product-main-2.jpg')}}" alt="" title=""> </a>
                                    <a href="{{ asset('/front/images/product/product-main-3.jpg')}}" data-fancybox="images"><img src="{{ asset('/front/images/product/product-main-3.jpg')}}" alt="" title=""> </a>
                                    <a href="{{ asset('/front/images/product/product-main-4.jpg')}}" data-fancybox="images"><img src="{{ asset('/front/images/product/product-main-4.jpg')}}" alt="" title=""> </a>
                                </div>
                                <div id="sync2" class="slider-general owl-carousel  not-dqowl mgt-15">
                                    <div class="item">
                                        <a href="" title="" class=""><img src="{{ asset('/front/images/product/product-thumb-1.jpg')}}" alt="" title="">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" title="" class=""><img src="{{ asset('/front/images/product/product-thumb-2.jpg')}}" alt="" title="">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" title="" class=""><img src="{{ asset('/front/images/product/product-thumb-3.jpg')}}" alt="" title="">
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="" title="" class=""><img src="{{ asset('/front/images/product/product-thumb-4.jpg')}}" alt="" title="">
                                        </a>
                                    </div>
                                </div>
                                <div class="action-facebook">
                                    <div class="facebook-icon"><img src="{{ asset('/front/images/icon/i-bluan.png')}}"> </div>
                                    <div class="wishlist">
                                        <a href="" title=""><i class="fa fa-heart"></i> Yêu thích </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="productDetail-desc">
                                    <h1 class="title-page">Bánh pía chay sầu riêng 300Gr</h1>
                                    <div class="product-status">
                                        <div class="star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="status-number">
                                            <div class="instock stock">
                                                <span><img src="{{ asset('/front/images/icon/i-instock.png')}}" alt="" title=""> </span>
                                                <span>Còn hàng</span>
                                            </div>
                                            <div class="outstock stock" style="display: none">
                                                <span><img src="images/icon/i-outstock.png" alt="" title=""> </span>
                                                <span>Hết hàng</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box in-detail-page">
                                        <span class="price-down">-26%</span>
                                        <div class="pro-price">
                                            <p class="new-price">240.000 ₫</p>
                                            <p class="old-price">Giá cũ: 300.000 đ</p>
                                        </div>
                                    </div>
                                    <div class="product-shortdesc">
                                        <ul>
                                            <li>Trọng lượng: 300Gr </li>
                                            <li>Năm sản xuất: Tháng 2 năm 2018 </li>
                                            <li>Hạn sử dụng: 6 tháng kể từ ngày sản xuất </li>
                                            <li>Thương hiệu: Bảo Minh cake </li>
                                            <li>Chất liệu: Sầu riêng, bột mì, đường, sữa,... </li>
                                            <li>Sử dụng: Ăn ngay </li>
                                        </ul>
                                        <p class="note-promo">Tặng 1 hộp kẹo dừa Bến Tre khi mua sản phẩm nhân dịp năm mới 2018</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="product-action">
                                    <p><strong>Số lượng</strong></p>
                                    <div class="action-number">
                                        <span class="fa fa-minus minus" aria-hidden="true"></span>
                                        <input  type="text" value="1" class="qty">
                                        <span class="fa fa-plus add" aria-hidden="true"></span>
                                    </div>
                                    <a href="" title="" class="bg-blue addCart-button">THÊM VÀO GIỎ</a>
                                    <a href="gio-hang.html" title="" class="bg-blue buyNow-button">MUA NGAY</a>
                                </div>
                                <div class="product-time">
                                    <p>Được phát hành bởi</p>
                                    <h5>Bảo Minh Cake</h5>
                                    <div class="expiry">
                                        <div class="expiry-1">
                                            <p>Đánh giá</p>
                                            <p>68%</p>
                                        </div>
                                        <div class="expiry-2">
                                            <p>Thời gian hoạt động</p>
                                            <p>11 tháng</p>
                                        </div>
                                    </div>
                                    <div class="to-shop">
                                        <a href="cua-hang.html" title="" class="text-uppercase">ĐẾN CỬA HÀNG</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shop-similar">
                        <h5>02 cơ sở cũng cũng cấp sản phẩm <a href="" title="">Bánh pía chay sầu riêng 300Gr</a> </h5>
                        <div class="row">
                            <div class="col-md-10">
                                <table class="table table-responsive">
                                    <thead>
                                    <tr>
                                        <td>THÔNG TIN NHÀ CUNG CẤP</td>
                                        <td>THÔNG TIN GIAO HÀNG</td>
                                        <td>GIÁ THÀNH</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="txt-blue">Cửa hàng Bách Hóa Thanh Xuân Nam</td>
                                        <td>
                                            <p>Giao hàng tiêu chuẩn: <strong>Miễn phí</strong></p>
                                            <p>Giao hàng từ 2 - 4 ngày làm việc.</p>
                                        </td>
                                        <td><p class="txt-red"><strong>320.000 đ</strong></p> </td>
                                        <td>
                                            <a href="" title="" class="bg-blue">Thêm vào giỏ hàng</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="txt-blue">Công ty Bánh kẹo Nam Thăng Long</td>
                                        <td>
                                            <p>Giao hàng tiêu chuẩn: <strong>Miễn phí</strong></p>
                                            <p>Giao hàng từ 2 - 4 ngày làm việc.</p>
                                        </td>
                                        <td><p class="txt-red"><strong>355.000 đ</strong></p></td>
                                        <td>
                                            <a href="" title="" class="bg-blue">Thêm vào giỏ hàng</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-2">
                                <div class="transit">
                                    <p>Vận chuyển</p>
                                    <ul>
                                        <li><a href="bai-viet.html" title="">Chính sách đổi trả</a> </li>
                                        <li><a href="bai-viet.html" title=""> Chính sách vận chuyển</a> </li>
                                        <li><a href="bai-viet.html" title="">Chính sách khách hàng</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-desc">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="product-left">
                                <h6 class="title-bold">Thông tin sản phẩm</h6>
                                <div class="desc">
                                    <p>Bánh pía là một trong những đặc sản của Sóc Trăng, do người Hoa di cư vào miền Nam sáng tạo ra. Bánh pía được làm bằng bột mì, sầu riêng, lòng đỏ trứng. Đôi khi bánh pía còn được gọi là bánh bía, bánh lột da.</p>
                                    <p class="text-center"><img src="images/product/product-detail.jpg" alt="" title=""> </p>
                                    <p>Bánh pía là một trong những đặc sản của Sóc Trăng, do người Hoa di cư vào miền Nam sáng tạo ra. Bánh pía được làm bằng bột mì, sầu riêng, lòng đỏ trứng. Đôi khi bánh pía còn được gọi là bánh bía, bánh lột da.</p>
                                    <p>Bánh pía là một trong những đặc sản của Sóc Trăng, do người Hoa di cư vào miền Nam sáng tạo ra. Bánh pía được làm bằng bột mì, sầu riêng, lòng đỏ trứng. Đôi khi bánh pía còn được gọi là bánh bía, bánh lột da.</p>
                                    <div class="read-more text-center"><a href="" title="">Xem thêm</a> </div>
                                </div>
                            </div>
                            <div class="rating-box">
                                <h6 class="title-bold">Đánh giá - bình luận</h6>
                                <div class="rating-total">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="rated">
                                                <p>Đánh giá trung bình</p>
                                                <h4>4.6/5</h4>
                                                <p class="star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="rate-note">
                                                <p class="txt-red font-italic"><strong>Quý khách có thắc mắc về sản phẩm hoặc dịch vụ của Laptop Global? Quý khách đang muốn khiếu nại về sản phẩm hoặc đơn hàng đã mua?</strong></p>
                                                <ul>
                                                    <li>Liên hệ hotline <a href="" title="">0933716568</a> , để được hỗ trợ ngay.</li>
                                                    <li>Vui lòng xem thêm về  <a href="" title=""></a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cache"></div>
                            <div class="rating-me">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>Để lại đánh giá của bạn</p>
                                        <p class="star">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </p>
                                    </div>
                                    <div class="col-md-9">
                                        <form>
                                            <div class="form-block row">
                                                <div class="col-md-4"><input type="text" placeholder="Họ tên"></div>
                                                <div class="col-md-4"><input type="text" placeholder="Email"></div>
                                                <div class="col-md-4"><input type="text" placeholder="Số điện thoại"></div>
                                                <div class="col-md-12"><textarea placeholder="Nội dung"></textarea></div>
                                                <div class="col-md-12"><button type="submit">GỬI ĐÁNH GIÁ</button> </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-box">
                                <div class="filter-comment">
                                    <div class="row">
                                        <div class="col-md-3 flex-center"><span>Sắp xếp bình luận theo</span></div>
                                        <div class="col-md-3">
                                            <select>
                                                <option>Mới nhất</option>
                                                <option>Cũ nhất</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select>
                                                <option>5 sao</option>
                                                <option>4 sao</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="show-comment">
                                    <div class="cmt-box">
                                        <div class="comment-item cmt-question">
                                            <div class="avata-cmt">
                                                <img src="images/icon/icon-avatar-1.jpg" alt="" title="">
                                            </div>
                                            <div class="info-cmt">
                                                <div class="cus-info">
                                                <span class="info-1">
                                                    <span>Võ Chí Công -</span>
                                                    <span>Đã đăng cách đây 2 ngày</span>
                                                </span>
                                                    <span class="info-2 star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                                </div>
                                                <p>Mình muốn hỏi chiếc này có sẵn tại shop ở hà nội không ạ. Và VGA của máy la 1050ti hay 1050 vậy ạ</p>
                                                <div class="cmt-action">
                                                    <a href="" title="">
                                                        <i class="fa fa-comments-o"></i>
                                                        3 bình luận
                                                    </a>
                                                    <a href="" title="">Trả lời</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment-item cmt-reply admin-reply">
                                            <div class="avata-cmt">
                                                <img src="images/icon/icon-avatar-2.jpg" alt="" title="">
                                            </div>
                                            <div class="info-cmt">
                                                <div class="cus-info">
                                                <span class="info-1">
                                                    <span>Trần Thu Hà</span>
                                                    <span class="qtv">QTV</span>
                                                    <span>Đã đăng cách đây 2 ngày</span>
                                                </span>
                                                </div>
                                                <p>Chào anh, chi nhánh HN hiện đang có sẵn hàng, nhưng do số lượng hàng thay đổi liên tục nên anh hãy gọi vào sđt chi nhánh HN để check hàng trước khi đến. Có 2 phiên bản GPU là GTX 1050 và GTX 1050Ti tùy theo cấu hình anh nhé.</p>
                                            </div>
                                        </div>
                                        <div class="comment-item cmt-reply">
                                            <div class="avata-cmt">
                                                <img src="images/icon/icon-avatar-2.jpg" alt="" title="">
                                            </div>
                                            <div class="info-cmt">
                                                <div class="cus-info">
                                                <span class="info-1">
                                                    <span>Hùng Thu Thủy</span>
                                                    <span>Đã đăng cách đây 2 ngày</span>
                                                </span>
                                                </div>
                                                <p>Vâng ạ, Cảm ơn Ad!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="sticky-top product-related">
                                <h6 class="title-bold">Sản phẩm tương tự</h6>
                                <ul class="ul-block">
                                    <li>
                                        <div class="block-hori">
                                            <div class="hori-left">
                                                <a href="san-pham-chi-tiet.html" title=""><img src="images/product/product-20.png" alt="" title=""> </a>
                                            </div>
                                            <div class="hori-right">
                                                <p><a href="san-pham-chi-tiet.html" title="">Bộ 2 thùng 24 lon bia Tiger Crystal 330 ml</a> </p>
                                                <p class="txt-red">13.000.000 đ</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block-hori">
                                            <div class="hori-left">
                                                <a href="san-pham-chi-tiet.html" title=""><img src="images/product/product-19.png" alt="" title=""> </a>
                                            </div>
                                            <div class="hori-right">
                                                <p><a href="san-pham-chi-tiet.html" title="">Bộ 2 thùng 24 lon bia Tiger Crystal 330 ml</a> </p>
                                                <p class="txt-red">13.000.000 đ</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block-hori">
                                            <div class="hori-left">
                                                <a href="san-pham-chi-tiet.html" title=""><img src="images/product/product-18.png" alt="" title=""> </a>
                                            </div>
                                            <div class="hori-right">
                                                <p><a href="san-pham-chi-tiet.html" title="">Bộ 2 thùng 24 lon bia Tiger Crystal 330 ml</a> </p>
                                                <p class="txt-red">13.000.000 đ</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block-hori">
                                            <div class="hori-left">
                                                <a href="san-pham-chi-tiet.html" title=""><img src="images/product/product-17.png" alt="" title=""> </a>
                                            </div>
                                            <div class="hori-right">
                                                <p><a href="san-pham-chi-tiet.html" title="">Bộ 2 thùng 24 lon bia Tiger Crystal 330 ml</a> </p>
                                                <p class="txt-red">13.000.000 đ</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block-hori">
                                            <div class="hori-left">
                                                <a href="san-pham-chi-tiet.html" title=""><img src="images/product/product-16.png" alt="" title=""> </a>
                                            </div>
                                            <div class="hori-right">
                                                <p><a href="san-pham-chi-tiet.html" title="">Bộ 2 thùng 24 lon bia Tiger Crystal 330 ml</a> </p>
                                                <p class="txt-red">13.000.000 đ</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block-hori">
                                            <div class="hori-left">
                                                <a href="" title=""><img src="images/product/product-15.png" alt="" title=""> </a>
                                            </div>
                                            <div class="hori-right">
                                                <p><a href="" title="">Bộ 2 thùng 24 lon bia Tiger Crystal 330 ml</a> </p>
                                                <p class="txt-red">13.000.000 đ</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mgt-20 ads">
                                    <a href="" title=""><img src="images/banner/ads-1.jpg" alt="" title=""> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-watched">
                    <h5>Sản phẩm đã xem</h5>
                    <div class="watched-slider owl-carousel">
                        <div class="watched-item">
                            <a href="" title=""><img src="images/product/img-cate-1.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="images/product/img-cate-2.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="images/product/img-cate-3.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="images/product/img-cate-4.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="images/product/img-cate-5.png" alt="" title=""> </a>
                        </div>
                        <div class="watched-item">
                            <a href="" title=""><img src="images/product/img-cate-6.png" alt="" title=""> </a>
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