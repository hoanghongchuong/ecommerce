@extends('admin.layout')
@section('content')

    <section class="content-header">
        <h1>
            Order
            <small>detail</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:">order</a></li>
            <li class="active">detail</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <h3>Thông tin đơn hàng</h3>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>

                                <th>Mã hóa đơn</th>
                                <th>Họ tên</th>
                                <th>Tổng tiền</th>
                                <th>Phương thức thanh toán</th>
                                <th>Ngày đặt hàng</th>
                                <th>Ghi chú</th>
                                <th>Trạng thái</th>
                                {{--<th>Hành động</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>{{ $order->code }}</td>
                                    <td>{{ $order->full_name }}</td>
                                    <td>{{ number_format($order->total) }}</td>
                                    <td>
                                        <?php
                                        if($order->payment_method == 1) echo"Thanh toán khi giao hàng";
                                        if($order->payment_method == 2) echo"Chuyển khoản qua ngân hàng";
                                        if($order->payment_method == 3) echo"Chuyển khoản online";
                                        ?>
                                    </td>
                                    <td>{{ date('d/m/Y - H:i:s', strtotime($order->created_at)) }}</td>
                                    <td>{{ $order->content }}</td>
                                    <td>
                                        <select name="" id="status_order" data-id="{{ $order->id }}" class="form-control" style="text-align:center">
                                            <option value="1" @if($order->status ==1) selected @endif>Mới đặt</option>
                                            <option value="2"  @if($order->status ==2) selected @endif>Xác nhận</option>
                                            <option value="3" @if($order->status ==3) selected @endif>Đang giao hàng</option>
                                            <option value="4" @if($order->status ==4) selected @endif>Hoàn thành</option>
                                            <option value="5" @if($order->status ==5) selected @endif>Hủy</option>
                                        </select>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="">
                            <h3>Chi tiết</h3>
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Giá tiền</th>
                                    <th>Tổng tiền</th>
                                    <th>Store</th>
                                    <th>Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orderDetail as $k => $detail)
                                <tr>
                                    <td>{{ $k+1 }}</td>
                                    <td>{{ $detail->product->name }}</td>
                                    <td><img src="{{ asset($detail->product->image) }}" style="width:100px" alt=""></td>
                                    <td>{{ $detail->qty }}</td>
                                    <td>{{ number_format($detail->price) }}</td>
                                    <td>{{ number_format($detail->price * $detail->qty) }}</td>
                                    @if($detail->admin_id)
                                        <?php if($detail->admin_id){
                                            $adminx = DB::table('admins')->select('full_name', 'id')->where('id', $detail->admin_id)->first();
//                                            dd($admin);
                                        } ?>
                                        <td>{{ $adminx->full_name }}</td>
                                    @else
                                        <?php if($detail->store_id){
                                            $store = DB::table('stores')->select('full_name', 'id')->where('id', $detail->store_id)->first();
                                        } ?>
                                        <td>{{ $store->full_name}}</td>
                                    @endif
                                    <td>
                                        <?php
                                        switch ($detail->status) {
                                            case '0':
                                                echo "Mới đặt";
                                                break;
                                            case '1':
                                                echo "Xác nhận";
                                                break;

                                            default:
                                                echo "Mới đặt";
                                                break;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer col-md-12">
                        <div class="col-md-6">

                        </div>
                    </div>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
    <script>
        $('#status_order').on('change', function () {
            var status = $(this).val();
            var orderId = $(this).attr('data-id');
            $.ajax({
                url: ' {{ route("admin.order.updateStatus") }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: status,
                    orderId: orderId,
                },
                success: function(res){
                    if(res == 1){
                        toastr["success"]("Cập nhật trạng thái thành công!");
                    }
                }
            });
        });
    </script>
@endsection