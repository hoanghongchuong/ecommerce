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
                                    <td>{{ $order->payment_method }}</td>
                                    <td>{{ date('d/m/Y - H:i:s', strtotime($order->created_at)) }}</td>
                                    <td>{{ $order->content }}</td>
                                    <td>
                                        <?php
                                        switch ($order->status) {
                                            case '0':
                                                echo "Mới đặt";
                                                break;
                                            case '1':
                                                echo "Xác nhận";
                                                break;
                                            case '2':
                                                echo "Đang giao hàng";
                                                break;
                                            case '3':
                                                echo "Hoàn thành";
                                                break;
                                            case '4':
                                                echo "Hủy";
                                                break;
                                            default:
                                                echo "Mới đặt";
                                                break;
                                        }
                                        ?>
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
                                @foreach($detailOrder as $k => $detail)
                                <tr>
                                    <td>{{ $k+1 }}</td>
                                    <td>{{ $detail->product_name }}</td>
                                    <td><img src="{{ asset( $detail->product_img ) }}" style="width:100px" alt=""></td>
                                    <td>{{ $detail->product_numb }}</td>
                                    <td>{{ number_format($detail->product_price) }}</td>
                                    <td>{{ number_format($detail->product_price * $detail->product_numb) }}</td>
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
@endsection