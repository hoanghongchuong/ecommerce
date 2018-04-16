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
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Danh mục cha</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td><img src="" style="width:150px" alt=""></td>
                                    <td>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" style="margin-right: 5px;" href="">
                                            <i class="fa fa-edit"> Sửa</i>
                                        </a>
                                        <a class="btn btn-danger" href="">
                                            <i class="fa fa-trash-o"> Xóa</i>
                                        </a>
                                    </td>
                                </tr>

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