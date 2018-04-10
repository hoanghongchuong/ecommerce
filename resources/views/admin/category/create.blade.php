@extends('admin.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Category
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-dashboard">
                    </i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    category
                </a>
            </li>
            <li>
                <a href="#">
                    create
                </a>
            </li>
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        {{--<h3 class="box-title"></h3>--}}
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{ isset($category) ? route('admin.category.edit', $category->id) : route('admin.category.create') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên danh mục <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" id="txtName" name="name" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="">Đường dẫn <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" id="txtAlias" name="slug" placeholder="Đường dẫn">
                            </div>
                            <div class="form-group">
                                <label for="">Mô tả</label>
                                <textarea name="description" id="" placeholder="Mô tả..." class="form-control" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Danh mục cha</label>
                                <select name="parent_id" class="form-control" id="">
                                    <option value="">-- Chọn danh mục cha --</option>
                                    <option value="">danh mucj cha 1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <input type="file" name="image" id="">
                                {{--<p class="help-block">Example block-level help text here.</p>--}}
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Nổi bật
                                </label>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div><!-- /.box -->

            </div>
        </div>
    </div>
@endsection