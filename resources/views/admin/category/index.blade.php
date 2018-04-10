@extends('admin.layout')
@section('content')
    <section class="content-header">
        <h1>
            Category
            <small>list</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:">category</a></li>
            <li class="active">list</li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    @include('admin._partials.alert ')
                    <div class="box-header">
                    <p><a href="{{ route('admin.category.create') }}" class="btn btn-primary">Thêm</a> &nbsp; <a href="" class="btn btn-danger">Thoát</a></p>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table_datatable table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên danh mục</th>
                                    <th>Danh mục cha</th>
                                    <th>Đường dẫn</th>
                                    <th>Ảnh</th>
                                    <th>Hiển thị</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $k=>$item)
                                <tr>
                                    <td>{{$k+1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>danh mục cha</td>
                                    <td>{{$item->slug}}</td>
                                    <td><img src="{{asset($item->image)}}" style="width:150px" alt=""></td>
                                    <td><a href="" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>  Hiển thị</a></td>
                                    <td>
                                        <a class="btn btn-warning" style="margin-right: 5px;" href="">
                                            <i class="fa fa-edit"> Sửa</i>
                                        </a>
                                        <a class="btn btn-danger" href="{{route('admin.category.delete', $item->id)}}">
                                            <i class="fa fa-trash-o"> Xóa</i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-header">
                        <p><a href="{{ route('admin.category.create') }}" class="btn btn-primary">Thêm</a> &nbsp; <a href="" class="btn btn-danger">Thoát</a></p>
                    </div><!-- /.box-header -->
                </div><!-- /.box -->
            </div>
        </div>
    </div>
@endsection