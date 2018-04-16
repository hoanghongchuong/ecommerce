@extends('front.store.layout')
@section('contentStore')
<main class="tk-overlay">
    <section class="banner">
        <img src="{{ asset('/front/images/banner/tk-banner.jpg')}}" alt="" title="">
    </section>
    @include('front.store._particals.headerStore')
    <section class="tk-manage-product">
        <div class="container">
            <h1 class="title-page mgb-20 text-center">Tạo sản phẩm</h1>
            <form id="steps-form" action="{{ route('store.product.getCreate') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div>
                    <h3>Chọn danh mục</h3>
                    <section class="detail-content">
                        <h5>Tạo sản phẩm từ danh mục sẳn có <span class="mgl-20 txt-blue">Danh sách các danh mục</span></h5>
                        <div class="creat-step creat-step-1">
                            <div class="cate-selection cate">
                                <input type="hidden" name="category_id" id="categoryId" value="">
                                <script>
                                    $('#listValue').on('click','a',function(e){
                                        e.preventDefault();
                                        var id = $(this).data('id');
                                        $('#categoryId').val(id);
                                        // console.log($(this).first());
                                        return;
                                    })
                                </script>

                                <ul class="ul-list" id="listValue">
                                    @foreach($categories as $category)
                                    <li >
                                        <a href="" title="" data-id="{{$category->id}}">{{ $category->name }} <i class="fa fa-angle-right"></i> </a>
                                        <div class="cate-selection-child cate">
                                            <?php $cate_child = DB::table('categories')->where('parent_id', $category->id)->get(); ?>
                                            <ul class="ul-list">
                                                @foreach($cate_child as $cate)
                                                <li >
                                                    <a href="" title="" data-id="{{ $cate->id }}" >{{ $cate->name }}
                                                        {{--<i class="fa fa-angle-right"></i> --}}
                                                    </a>
                                                    {{--<div class="cate-selection-child cate">--}}
                                                        {{--<ul class="ul-list">--}}
                                                            {{--<li>--}}
                                                                {{--<a href="" title="">Balo nam<i class="fa fa-angle-right"></i> </a>--}}
                                                                {{--<div class="cate-selection-child cate">--}}
                                                                    {{--<ul class="ul-list">--}}
                                                                        {{--<li><a href="" title="">Ví đựng thẻ nam</a> </li>--}}
                                                                        {{--<li><a href="" title="">Túi đựng tiền xu nam</a> </li>--}}
                                                                        {{--<li><a href="" title="">Ví đựng chìa khóa nam</a> </li>--}}
                                                                        {{--<li><a href="" title="">Kẹp tiền</a> </li>--}}
                                                                        {{--<li><a href="" title="">Ví nam</a> </li>--}}
                                                                    {{--</ul>--}}
                                                                {{--</div>--}}
                                                            {{--</li>--}}
                                                            {{--<li><a href="" title="">Cặp xách laptop <i class="fa fa-angle-right"></i> </a> </li>--}}
                                                            {{--<li><a href="" title="">Túi đeo chéo nam</a> </li>--}}
                                                            {{--<li><a href="" title="">Túi laptop đeo vai <i class="fa fa-angle-right"></i> </a> </li>--}}
                                                            {{--<li><a href="" title="">Túi tote nam <i class="fa fa-angle-right"></i> </a> </li>--}}
                                                            {{--<li><a href="" title="">Ví nam & Phụ kiện <i class="fa fa-angle-right"></i> </a> </li>--}}
                                                        {{--</ul>--}}
                                                    {{--</div>--}}
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </section>
                    {{--<h3>Thông tin chung</h3>--}}
                    {{--<section class="detail-content">--}}
                        {{--<h5>Thông tin chung của sản phẩm</h5>--}}
                        {{--<p class="mg-20"><span class="font-weight-bold mgr-20">Danh mục:  </span> Túi xách và Vali túi du lịch  >  Túi xách nam  >  Ví nam & Phụ kiện  >  Ví nam  >  Ví thời trang nam</p>--}}
                        {{--<div class="creat-step creat-step-2">--}}
                            {{--<form>--}}
                                {{--<div class="tk-blocks">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-2 flex-center">--}}
                                            {{--<label><span class="font-weight-bold">Thương hiệu <span class="txt-red">*</span> </span> </label>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-3">--}}
                                            {{--<select id="single">--}}
                                                {{--<option></option>--}}
                                                {{--<option>Thương hiệu 1</option>--}}
                                                {{--<option>Thương hiệu 2</option>--}}
                                                {{--<option>Thương hiệu 3</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tk-blocks">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-2 flex-center">--}}
                                            {{--<label><span class="font-weight-bold">Chất liệu</span></label>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-3">--}}
                                            {{--<select id="multiple" multiple>--}}
                                                {{--<option>Chất liệu sản phẩm 1</option>--}}
                                                {{--<option>Chất liệu sản phẩm 2</option>--}}
                                                {{--<option>Chất liệu sản phẩm 3</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tk-blocks">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-2 flex-center">--}}
                                            {{--<label><span class="font-weight-bold">Loại ví</span></label>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-2">--}}
                                            {{--<select class="input-sty">--}}
                                                {{--<option>Ví gập</option>--}}
                                                {{--<option>Ví gập 2</option>--}}
                                                {{--<option>Ví gập 2</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</section>--}}

                    <h3>Chi tiết SP</h3>
                    <section class="detail-content">
                        <h5 class="mgb-20">Chi tiết sản phẩm</h5>
                        <div class="creat-step creat-step-3">
                            <form>
                                <div class="tk-blocks">
                                    <div class="row">
                                        <div class="col-md-2 flex-center">
                                            <label><span class="font-weight-bold">Tên SP <span class="txt-red">*</span> </span> </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" name="name" placeholder="Tên sản phẩm" class="input-sty">
                                        </div>
                                    </div>
                                </div>
                                <div class="tk-blocks">
                                    <div class="row">
                                        <div class="col-md-2 flex-center">
                                            <label><span class="font-weight-bold">Giá bán</span> </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="price" placeholder="Giá sản phẩm" class="input-sty" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="tk-blocks">
                                    <div class="row">
                                        <div class="col-md-2 flex-center">
                                            <label><span class="font-weight-bold">Giá cũ</span> </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="number" name="price_old" placeholder="Giá cũ" class="input-sty">
                                        </div>
                                    </div>
                                </div>
                                <div class="tk-blocks">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label><span class="font-weight-bold">Mô tả</span></label>
                                        </div>
                                        <div class="col-md-10">
                                            <textarea name="des" id="contentProduct1" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                    <h3>Hình ảnh SP</h3>
                    <section class="detail-content">
                        <h5 class="mgb-20">Hình ảnh sản phẩm</h5>
                        <div class="creat-step creat-step-4">
                            <div class="tk-blocks">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><span class="font-weight-bold">Hinh hiển thị</span> <span class="txt-red"> *</span> </label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="up-image">
                                            <label>
                                                <input type="file" name="image" >
                                                <img src="{{ asset('/front/images/icon/i-upimage.png')}}" alt="" title="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tk-blocks">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><span class="font-weight-bold">Hình khác</span> </label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="up-list-image">
                                            <div class="up-image">
                                                <label>
                                                    <input type="file" >
                                                    <img src="{{ asset('/front/images/icon/i-upimage-s.png')}}" alt="" title="">
                                                </label>
                                                <label>
                                                    <input type="file" >
                                                    <img src="{{ asset('/front/images/icon/i-upimage-s.png')}}" alt="" title="">
                                                </label>
                                                <label>
                                                    <input type="file" >
                                                    <img src="{{ asset('/front/images/icon/i-upimage-s.png')}}" alt="" title="">
                                                </label>
                                                <label>
                                                    <input type="file" >
                                                    <img src="{{ asset('/front/images/icon/i-upimage-s.png')}}" alt="" title="">
                                                </label>
                                                <label>
                                                    <input type="file" >
                                                    <img src="{{ asset('/front/images/icon/i-upimage-s.png')}}" alt="" title="">
                                                </label>
                                                <button class="load-image">THÊM</button>
                                            </div>
                                            <p class="mgt-20">(Hiển thị tối đa 10 ảnh)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tk-blocks">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><span class="font-weight-bold">Nội dung SP</span></label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="content" id="contentProduct2" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <p class="pull-right"><button type="submit" class="btn btn-primary">Đăng sản phẩm</button></p>
                        </div>
                    </section>
                    <h3>Hoàn tất</h3>
                    <section class="detail-content">
                        <h5 class="mgb-20 text-center">Hoàn thành</h5>
                        <div class="creat-step creat-step-5 mgt-20">
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
                </div>
            </form>
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