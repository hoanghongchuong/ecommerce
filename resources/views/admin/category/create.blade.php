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
                                <input type="text" class="form-control" id="txtName" name="name" value="{{@$category->name}}" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="">Đường dẫn <span style="color:red">(*)</span></label>
                                <input type="text" class="form-control" id="txtAlias" value="{{@$category->slug}}" name="slug" placeholder="Đường dẫn">
                            </div>
                            <div class="form-group">
                                <label for="">Mô tả</label>
                                <textarea name="description" id="textContent1" placeholder="Mô tả..." class="form-control" cols="30" rows="10">
                                    {{@$category->description}}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="ten">Danh mục cha</label>
                                <select name="parent_id" class="form-control">
                                    <option value="0">Chọn danh mục</option>
                                    <?php cate_parent($parent,0,"--",isset($category) ? $category->parent_id : ''); ?>
                                </select>
                          </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <p><img src="{{ asset(@$category->image) }}" class="image_upload_preview" style="width:150px;" alt=""></p>
                                <input type="file" name="image" class="inputFile" id="">
                                {{--<p class="help-block">Example block-level help text here.</p>--}}
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="is_highlight"
                                        {!! (isset($category) && $category->is_highlight==1)?'checked="checked"':'' !!}> Nổi bật
                                </label>
                            </div>
                            {{--<div class="checkbox">--}}
                                {{--<label>--}}
                                    {{--<input type="checkbox" name="active"--}}
                                        {{--{!! (isset($category) && $category->active==1)?'checked="checked"':'' !!}> Hiển thị--}}
                                {{--</label>--}}
                            {{--</div>--}}
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