@extends('front.store.layout')
@section('contentStore')
    <main class="tk-overlay">
        <section class="banner">
            <img src="{{ asset('/front/images/banner/tk-banner.jpg')}}" alt="" title="">
        </section>
        @include('front.store._particals.headerStore')
        <section class="tk-manage-product">
            <div class="container">
                <h1 class="title-page mgb-20">Danh sách đơn hàng</h1>
                <div class="manageProduct-action">
                    <div class="row">
                        <div class="col-md-6 flex-center">

                            {{--<div class="search search-product">--}}
                                {{--<form>--}}
                                    {{--<input type="text" placeholder="Từ khóa...">--}}
                                    {{--<button><i class="fa fa-search"></i> </button>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        </div>
                        <div class="col-md-6 flex-center-end">

                        </div>
                    </div>
                </div>
                <div class="form-manageProduct">
                    <table class="table table-responsive table-normal">
                        <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Giá bán</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $item)
                            <tr>
                                <td>{{ $item->order->code }}</td>
                                <td>{{ $item->product->name }}</td>
                                <td><img src="{{ asset($item->product->image) }}" style="width: 100px" alt=""></td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ number_format($item->price) }}</td>
                                <td>{{ number_format($item->totalprice) }}</td>
                                <td>
                                    <button class="btn-toggle-status btnx btn-{{ !$item->status? 'warning btn-access' : 'success' }} btn-sm"
                                            order-id="{{ $item->id }}">
                                        @if(!$item->status)
                                            Mới đặt
                                        @else
                                            Xác nhận
                                        @endif
                                    </button>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </section>

    </main>
    <script>
        $('.btn-toggle-status').on('click', function() {
            var btn = $(this);
            if (btn.hasClass('btn-success')) {
                return;
            }
            btn.attr('disabled', '');
            $.ajax({
                url: '{{ route("store.order.status") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    order_id: btn.attr('order-id')
                },
                success: function(res) {
                    if (res == 0) {
                        btn.addClass('btn-warning').removeClass('btn-success');
                        btn.text('Mới đặt');
                    }
                    if (res == 1) {
                        btn.addClass('btn-success').removeClass('btn-warning');
                        btn.text('Xác nhận');
                    }
                    btn.removeAttr('disabled', '');
                }
            });
        });
    </script>
@endsection