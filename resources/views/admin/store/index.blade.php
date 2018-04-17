@extends('admin.layout')
@section('content')
    <section class="content-header">
        <h1>
            Store
            <small>list</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:">store</a></li>
            <li class="active">list</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @include('admin._partials.alert ')
                    <div class="box-header">
                        {{--<p><a href="" class="btn btn-primary">Thêm</a> &nbsp; <a href="" class="btn btn-danger">Thoát</a></p>--}}
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class=" table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên cửa hàng</th>
                                <th>Địa chỉ</th>
                                <th>Ngày đăng ký</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($store as $k=>$item)
                                <tr>
                                    <td>{{ $k+1 }}</td>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ date('d/m/Y', strtotime($item->created_at)) }}</td>
                                    <td>
                                        <a class="btn btn-warning" style="margin-right: 5px;" href="{{ route('admin.store.detail', $item->id) }}">
                                            <i class="fa fa-edit"> Chi tiết</i>
                                        </a>
                                        <a class="btn btn-danger" href="{{ route('admin.store.delete', $item->id) }}">
                                            <i class="fa fa-trash-o"> Xóa</i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-header">
                        <p>
                            {{--<a href="" class="btn btn-primary">Thêm</a> &nbsp;--}}
                            {{--<a href="" class="btn btn-danger">Thoát</a>--}}
                        </p>
                    </div><!-- /.box-header -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
@endsection