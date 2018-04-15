<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <title>Trang chủ | Thương Mại Điện Tử </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="copyright" content="" />

    <meta property="og:image" content="">
    <!--link css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/jquery.steps.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/front/css/slimselect.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/front/css/responsive.css')}}">

    <!--Jquery library-->
    <script type="text/javascript" src="{{asset('/front/js/jquery.min.js')}}"></script>
    <script type="text/javascript">
        function baseUrl(){
            return '<?php echo url('/'); ?>';
        }
        {{--window.token = '{{ csrf_token() }}';--}}
        window.urlLoadDistrict = '{{ route("loadDistrictByProvince") }}';

    </script>
</head>
<body class="body-tk-main">
<main class="tk-main">
    <section class="tk-logo">
        <div class="container">
            <div class="text-center">
                <a href="{{ url('') }}" title=""><img src="{{asset('/front/images/logo/logo.png')}}" alt="" title=""> </a>
            </div>
        </div>
    </section>
    <section class="form-section">
        <!--<div class="container">-->
        <!--<div class="row">-->
        <!--<div class="col-md-4 offset-md-4 col-lg-4 offset-lg-4">-->
        <!--<h1 class="title-page">Đăng ký bán hàng cùng Fbuy</h1>-->

        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
        <form class="form-tk" id="step-register" method="post" action="{{ route('store.postRegister') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="container">
                <h1 class="title-page">Đăng ký bán hàng cùng Fbuy</h1>
                <h3>Bước 1</h3>
                <section class="register-1">
                    <div class="row">
                        <div class="col-md-4 offset-md-4 col-lg-4 offset-lg-4">
                            <div class="tk-block">
                                <label>Tên công ty / Tên cửa hàng  (*)</label>
                                <input type="text" name="full_name"  placeholder="Tên công cty hoặc tên cửa hàng">
                                @if ($errors->first('full_name')!='')
                                    <label class="control-label" for="inputError">
                                        <i class="fa fa-times-circle-o"></i>
                                        <span style="color: red;">{!! $errors->first('full_name'); !!}</span>
                                    </label>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tk-block">
                                        <label>Số điện thoại (*)</label>
                                        <input type="text" name="phone"  placeholder="Số điện thoại">
                                        @if ($errors->first('phone')!='')
                                            <label class="control-label" for="inputError">
                                                <i class="fa fa-times-circle-o"></i>
                                                <span style="color: red;">{!! $errors->first('phone'); !!}</span>
                                            </label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tk-block">
                                        <label>Email (*)</label>
                                        <input type="email" name="email"  placeholder="Email công ty">
                                        @if ($errors->first('email')!='')
                                            <label class="control-label" for="inputError">
                                                <i class="fa fa-times-circle-o"></i>
                                                <span style="color: red;">{!! $errors->first('email'); !!}</span>
                                            </label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tk-block">
                                        <label>Tỉnh/Tp (*)</label>
                                        <select name="province_id"   id="province_id">
                                        <option value="">Tỉnh/Thành phố</option>
                                        @foreach($province as $pro)
                                            <option value="{{$pro->id}}">{{$pro->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    @if ($errors->first('province_id')!='')
                                        <label class="control-label" for="inputError">
                                            <i class="fa fa-times-circle-o"></i>
                                            <span style="color: red;">{!! $errors->first('province_id'); !!}</span>
                                        </label>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <div class="tk-block">
                                        <label>Quận/Huyện</label>
                                        <select name="district_id"  id="district_id">
                                            <option value="">Quận/Huyện</option>

                                        </select>
                                    </div>
                                    @if ($errors->first('district_id')!='')
                                        <label class="control-label" for="inputError">
                                            <i class="fa fa-times-circle-o"></i>
                                            <span style="color: red;">{!! $errors->first('district_id'); !!}</span>
                                        </label>
                                    @endif
                                </div>
                            </div>
                            <div class="tk-block">
                                <label>Địa chỉ (*)</label>
                                <input type="text" name="address"  placeholder="Ghi rõ số nhà, ngõ ngách, đường phố, phường xã.">
                                 @if ($errors->first('address')!='')
                                    <label class="control-label" for="inputError">
                                        <i class="fa fa-times-circle-o"></i>
                                        <span style="color: red;">{!! $errors->first('address'); !!}</span>
                                    </label>
                                @endif
                            </div>
                            <div class="tk-block">
                                <label>Website</label>
                                <input type="text" name="website" placeholder="Website công ty">
                            </div>
                        </div>
                    </div>
                </section>

                <h3>Bước 2</h3>
                <section class="register-2">
                    <div class="row">
                        <div class="col-md-4 offset-md-4 col-lg-4 offset-lg-4">
                            <div class="tk-block">
                                <label>Chọn ngành nghề kinh doanh (*)</label>
                                <select id="multiple" name="career_id" multiple>
                                    <option value="value 1">Thiết bị điện tử</option>
                                    <option value="value 2">Thời trang</option>
                                    <option value="value 3">Value 3</option>
                                    <option value="value 4">Value 4</option>
                                    <option value="value 5">Value 5</option>
                                </select>
                            </div>
                            <div class="form-block-e tk-block">
                                <label class="input-title">Giấy phép kinh doanh (*)</label>
                                <p class="p-ita">Vui lòng đính kèm bản scan giấy đăng ký kinh doanh ngoài.</p>
                                <label class="upload-image text-center">
                                    <input type="file" name="business_license">
                                    <div class="flex-center-center">
                                        <i class="fa fa-cloud-upload"></i>
                                        <div class="file-txt">
                                            <p class="text-left">Click để tải ảnh lên</p>
                                            <p>Tối đa 1 ảnh có dung lượng < 2 Mb</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="form-block-e tk-block">
                                <label class="input-title">Giấy chứng nhận đăng ký</label>
                                <p class="p-ita">Áp dụng đối với NCC có MSKD/MSDN không trùng với MST.</p>
                                <label class="upload-image text-center">
                                    <input type="file" name="registration_certificate">
                                    <div class="flex-center-center">
                                        <i class="fa fa-cloud-upload"></i>
                                        <div class="file-txt">
                                            <p class="text-left">Click để tải ảnh lên</p>
                                            <p>Tối đa 1 ảnh có dung lượng < 2 Mb</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </section>

                <h3>Bước 3</h3>
                <section class="register-3">
                    <div class="row">
                        <div class="col-md-4 offset-md-4 col-lg-4 offset-lg-4">
                            <div class="tk-block">
                                <label>Các nhãn hàng bạn đang kinh doanh</label>
                                <select id="multiple-3" name="brand_id" multiple>
                                    <option value="value 1">Apple</option>
                                    <option value="value 2">Nokia</option>
                                    <option value="value 3">HTC</option>
                                    <option value="value 4">Value 4</option>
                                    <option value="value 5">Value 5</option>
                                </select>
                            </div>
                            <div class="tk-block">
                                <label>Khu vực kinh doanh</label>
                                <div class="flex-center-between">
                                    <div class="radio-box">
                                        <input type="radio" id="check_1" name="place-check " checked="">
                                        <label for="check_1">Nội thành</label>
                                    </div>
                                    <div class="radio-box">
                                        <input type="radio" id="check_2"  name="place-check" >
                                        <label for="check_2">Ngoại thành</label>
                                    </div>
                                    <div class="radio-box">
                                        <input type="radio" id="check_3" name="place-check">
                                        <label for="check_3">Huyện lân cận</label>
                                    </div>
                                </div>
                            </div>
                            <div class="tk-block">
                                <label>Sản phẩm độc quyền? Đặc thù? Hay thế mạnh?</label>
                                <input type="text" name="special_product" placeholder="">
                            </div>
                            <div class="tk-block">
                                <label>Mã xác nhận</label>
                                <div class="flex-center">
                                    <span class="mgr-20"><img src="{{ asset('/front/images/banner/captcha.jpg')}}" alt="" title=""> </span>
                                    <input type="text" placeholder="">
                                </div>
                            </div>
                            <div class="tk-btn">
                                <button type="submit"><span>ĐĂNG KÝ</span></button>
                            </div>
                        </div>
                    </div>
                </section>
                <h3>Hoàn thành</h3>
                <section class="register-4">
                    <div class="tk-block-success flex-center-center">
                        <span class="mgr-20"><img src="{{ asset('/front/images/icon/i-tk-success.png')}}" alt="" title=""> </span>
                        <div class="tk-txt">
                            <p class="font-weight-bold">Đăng ký thành công !</p>
                            <p class="mg-10">Bạn đã đăng ký thành công tài khoản “Bán hàng cùng Fbuy”. Vui lòng kiểm tra email để xác thực tài khoản và nhận thông tin tài khoản</p>
                        </div>
                    </div>
                </section>
            </div>
        </form>
        <!--<div class="link-page">-->
        <!--<div class="container">-->
        <!--<div class="flex-center-between">-->
        <!--<a href="index.html" title=""><img src="images/icon/i-tk-prev.png" alt="" title=""> <span>QUAY LẠI</span> </a>-->
        <!--<a href="TK-dang-ky-2.html" title=""><span>TIẾP TỤC</span><img src="images/icon/i-tk-next.png" alt="" title="">  </a>-->
        <!--</div>-->
        <!--</div>-->
        <!--</div>-->
    </section>
    <section class="tk-footer-nav">
        <div class="container">
            <div class="buy-category">
                <ul class="flex-center-center">
                    <li><a href="TK-dang-ky-1.html" title="">Đăng ký bán hàng</a> </li>
                    <li><a href="bai-viet.html" title="">Giới thiệu về Fbuy.com.vn</a> </li>
                    <li><a href="bai-viet.html" title="">Điều khoản và điều kiện giao dịch</a> </li>
                    <li><a href="bai-viet.html" title="">Nội quy Sàn TMDT Fbuy</a> </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<!--Link js-->
<script type="text/javascript" src="{{ asset('/front/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/jquery.steps.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/slimselect.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/private.js')}}"></script>
<script>
    var form = $("#step-register");
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft"
    });
</script>
<script>
    new SlimSelect({
        select: '#multiple',
        showSearch: true
    });

</script>
<script>
    new SlimSelect({
        select: '#multiple-3',
        showSearch: true
    })
</script>

</body>
</html>