@extends('front.layout')
@section('content')
    <main class="cd-main-content">
        <section class="breadcrumbs">
            <div class="container">
                <ul class="flex-center">
                    <li><a href="" title=""><i class="fa fa-home"></i> Trang chủ</a> </li>
                    <li><span>Thanh toán</span> </li>
                </ul>
            </div>
            <div class="payment-title">
                <div class="container">
                    <ul class="flex-center-end">
                        <li><a href="#" title="">
                                <span>1</span> Thông tin đăng nhập
                            </a> </li>
                        <li><a href="#" title="">
                                <span>2</span> Địa chỉ nhận hàng
                            </a> </li>
                        <li class="active"><a href="#" title="">
                                <span>3</span> Thanh toán
                            </a> </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="payment">
            <div class="container">
                <div class="detail-content">
                    <form action="{{ route('postOrder') }}" method="post">
                        {{ csrf_field() }}
                    <div class="row">

                        <div class="col-md-8">
                            <div class="payment-step">
                                <div class="payment-step-3">
                                    <p class="mgb-20">Phương thức thanh toán</p>
                                    <input type="hidden" name="payment_method" value="1" id="payment_method">
                                    <script>
                                        $(function(){
                                            $('#listValuePayment').on('click','a',function(e){
                                                e.preventDefault();

                                                var id = $(this).data('id');
                                                $('#payment_method').val(id);
                                                // console.log($(this).first());
                                                return;
                                            })
                                        })

                                    </script>
                                    <ul class="payment-tabs nav navbar-nav " id="listValuePayment" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active click_payment" data-id="1" href="#cod" role="tab" data-toggle="tab">SHIP COD</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link click_payment" data-id="2" href="#bank" role="tab" data-toggle="tab">Chuyển khoản Ngân hàng</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link click_payment" data-id="3" href="#online" role="tab" data-toggle="tab">Thanh toán Online</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in show active" id="cod"><p>Ship cod</p></div>
                                        <div role="tabpanel" class="tab-pane fade" id="bank">
                                            <div class="choose-bank">
                                                <p class="font-weight-bold font-italic">Lựa chọn ngân hàng và ghi lại thông tin tài khoản để chuyển khoản</p>
                                                <ul class="flex-center-between bank-list">
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="radio" name="bank" checked id="bank-1" value="1">
                                                            <label for="bank-1">
                                                                <img src="{{ asset('/front/images/icon/bank-1.png')}}" alt="" title="">
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="radio" name="bank" id="bank-2" value="2">
                                                            <label for="bank-2">
                                                                <img src="{{ asset('/front/images/icon/bank-2.png')}}" alt="" title="">
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="radio" name="bank" id="bank-3" value="3">
                                                            <label for="bank-3">
                                                                <img src="{{ asset('/front/images/icon/bank-3.png')}}" alt="" title="">
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="radio-box">
                                                            <input type="radio" name="bank" id="bank-4" value="4">
                                                            <label for="bank-4">
                                                                <img src="{{ asset('/front/images/icon/bank-4.png')}}" alt="" title="">
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="bank-acc">
                                                <p class="font-italic font-weight-bold">Thông tin tài khoản</p>
                                                <ul>
                                                    <li id="bankInfo-1" class="desc-bank">
                                                        <div class="bankAcc-info">
                                                            <h5 class="font-weight-bold text-uppercase">Chủ TK: CÔNG TY TNHH TM VÀ DV KỸ NGHỆ VIỆT</h5>
                                                            <p>Số TK: 0501000161516</p>
                                                            <p>Chi nhánh: Ngân hàng Vietcombank Chi Nhánh Bắc Sài Gòn</p>
                                                        </div>
                                                    </li>
                                                    <li id="bankInfo-2" class="desc-bank">
                                                        <div class="bankAcc-info">
                                                            <h5 class="font-weight-bold text-uppercase">Chủ TK: CÔNG TY TNHH TM VÀ DV GCO</h5>
                                                            <p>Số TK: 0501000161516</p>
                                                            <p>Chi nhánh: Ngân hàng Vietcombank Chi Nhánh Bắc Sài Gòn</p>
                                                        </div>
                                                    </li>
                                                    <li id="bankInfo-3" class="desc-bank">
                                                        <div class="bankAcc-info">
                                                            <h5 class="font-weight-bold text-uppercase">Chủ TK: CÔNG TY TNHH TM VÀ DV GAMETV</h5>
                                                            <p>Số TK: 0501000161516</p>
                                                            <p>Chi nhánh: Ngân hàng Vietcombank Chi Nhánh Bắc Sài Gòn</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            {{--<a href="xac-nhan-don.html" class="bg-blue text-uppercase btn-20">THANH TOÁN</a>--}}
                                        </div>
                                        {{--<div role="tabpanel" class="tab-pane fade" id="online"><p>Thanh toán Online</p></div>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="bg-blue text-uppercase btn-20">Thanh toán</button>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="product-order">
                                <p>Đơn hàng ({{ Cart::count() }} sản phẩm)</p>
                            </div>
                            <ul class="ul-block">
                                @foreach($cart as $item)
                                <li>
                                    <div class="block-hori">
                                        <div class="hori-left">
                                            <a href="" title=""><img src="{{ asset($item->options->image) }}" alt="" title=""> </a>
                                        </div>
                                        <div class="hori-right">
                                            <p><a href="" title="">{{ $item->name }}</a> </p>
                                            <p class="txt-red">{{ number_format($item->price) }} đ <span>x {{$item->qty}}</span></p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                            <div class="order-total">
                                <p class="flex-center-between">
                                    <span>Tổng tiền</span>
                                    <span class="txt-red font-weight-bold">{{ number_format($total) }} đ</span>
                                </p>
                                <p class="flex-center-between">
                                    <span>Cước phí vận chuyển</span>
                                    <span>0 đ</span>
                                </p>
                            </div>
                            <div class="order-end">
                                <p class="flex-center-between">
                                    <span>Tổng thanh toán</span>
                                    <span class="font-weight-bold">{{ number_format($total) }} đ</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="back-cart"><a href="" title=""><i class="fa fa-arrow-left"></i> Quay lại giỏ hàng</a> </div>
                </div>
            </div>
        </section>
        <section class="method-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-uppercase">CÁCH THỨC THANH TOÁN</h6>
                        <ul class="flex-center">
                            <li><a href="" title=""><img src=" {{ asset('/front/images/product/payment-1.png')}}" alt="" title=""> </a> </li>
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
    </main>
@endsection