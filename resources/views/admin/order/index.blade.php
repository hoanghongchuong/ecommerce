@extends('admin.layout')
@section('content')
    <section class="content-header">
        <h1>
            Order
            <small>list</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:">order</a></li>
            <li class="active">list</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @include('admin._partials.alert ')
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã hóa đơn</th>
                                    <th>Họ tên</th>
                                    <th>Tổng tiền</th>
                                    <th>Phương thức thanh toán</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $k => $item)
                                <tr>
                                    <td>{{ $k+1 }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{ number_format($item->total) }}</td>
                                    <td>
                                        <?php
                                        if($item->payment_method == 1) echo"Thanh toán khi giao hàng";
                                        if($item->payment_method == 2) echo"Chuyển khoản qua ngân hàng";
                                        if($item->payment_method == 3) echo"Chuyển khoản online";
                                        ?>
                                    </td>
                                    <td>{{ date('d/m/Y - H:i:s', strtotime($item->created_at)) }}</td>
                                    <td>
                                        <?php
                                        switch ($item->status) {
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
                                    <td>
                                        <a href="{{ route('admin.order.detail', $item->id) }}" class="btn btn-warning" style="margin-right: 5px;">
                                            <i class="fa fa-eye"> Chi tiết</i>
                                        </a>
                                        <a href="{{ route('admin.order.delete', $item->id) }}" class="btn btn-danger">
                                            <i class="fa fa-trash"> Xóa</i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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