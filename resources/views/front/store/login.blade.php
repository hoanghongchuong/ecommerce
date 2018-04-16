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
</head>
<body class="body-tk-main">
<main class="tk-main">
	<section class="tk-logo">
		<div class="container">
			<div class="text-center">
				<a href="{{url('')}}" title=""><img src="{{ asset('/front/images/logo/logo.png')}}" alt="" title=""> </a>
			</div>
		</div>
	</section>
	<section class="form-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="tk-block-login">
						<h1 class="title-page">Đăng nhập gian hàng của bạn</h1>
						<form action="{{ route('store.login') }}" method="post">
							{{csrf_field()}}
							<div class="tk-block">
								<label>Email</label>
								<input type="email" name="email" placeholder="Nhập email">
							</div>
							<div class="tk-block">
								<label>Mật khẩu</label>
								<input type="password" name="password" placeholder="Nhập mật khẩu">
							</div>
							@if(session('message'))
								<p style="color:red; margin-top:15px">{{ session('message') }}</p>
							@endif
							{{--<div class="tk-block row">--}}
								{{--<div class="col-md-6">--}}
									{{--<label>Mã Fbuy</label>--}}
									{{--<input type="text" placeholder="">--}}
								{{--</div>--}}
							{{--</div>--}}
							<div class="tk-btn">
								<button type="submit"><span>ĐĂNG NHẬP</span></button>
								<button type="reset" class="btn-delete"><span>HỦY</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="tk-footer-nav">
		<div class="container">
			<div class="buy-category">
				<ul class="flex-center-center">
					<li><a href="{{ route('store.register') }}" target="_blank" title="">Đăng ký bán hàng</a> </li>
					<li><a href="#" title="">Giới thiệu về Fbuy.com.vn</a> </li>
					<li><a href="#" title="">Điều khoản và điều kiện giao dịch</a> </li>
					<li><a href="#" title="">Nội quy Sàn TMDT Fbuy</a> </li>
				</ul>
			</div>
		</div>
	</section>
</main>

<script>
    var heightDiv = $('.tk-main').height();
    var heightScreen = $(window).height();

    if (heightDiv <= heightScreen){
        $('.tk-footer-nav').addClass('fixed');
    }
</script>
<!--Link js-->
<script type="text/javascript" src="{{ asset('/front/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/jquery.steps.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/slimselect.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/front/js/private.js')}}"></script>

</body>
</html>