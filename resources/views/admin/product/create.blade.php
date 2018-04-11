@extends('admin.layout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Product
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
                    product
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
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box ">
                    <div class="box-header with-border">
                        {{--<h3 class="box-title"></h3>--}}
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form name="frmAdd" method="post" action="{{ isset($product) ? route('admin.product.edit', $product->id) : route('admin.product.create') }}" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Thông tin chung</a></li>

                                <li><a href="#tab_2" data-toggle="tab" aria-expanded="true">Nội dung</a></li>
                                <li><a href="#tab_5" data-toggle="tab" aria-expanded="true">Album hình</a></li>
                                <li><a href="#tab_3" data-toggle="tab" aria-expanded="true">SEO</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group col-md-12 ">
                                                <label for="file">File ảnh</label>
                                                <p><img src="{{ asset(@$product->image) }}" class="image_upload_preview" style="width:150px;" alt=""></p>
                                                <input type="file" name="image" class="inputFile" id="">
                                                <p class="help-block">Width:150px - Height: 86px</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="ten">Danh mục cha</label>
                                                <select name="category_id" class="form-control">
                                                    <option value="0">Chọn danh mục</option>
                                                    <?php cate_parent($parent,0,"--",isset($product) ? $product->category_id : ''); ?>
                                                </select>
                                            </div>
                                            <div class="form-group @if ($errors->first('txtName')!='') has-error @endif">
                                                <label for="ten">Tên <span style="color:red">(*)</span></label>
                                                <input type="text" id="txtName" name="name" value="{{ @$product->name }}"  class="form-control" />
                                                @if ($errors->first('name')!='')
                                                    <label class="control-label" for="inputError">
                                                        <i class="fa fa-times-circle-o"></i>
                                                        <span style="color: red;">{!! $errors->first('name'); !!}</span>
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group @if ($errors->first('slug')!='') has-error @endif">
                                                <label for="alias">Đường dẫn</label>
                                                <input type="text" name="slug" id="txtAlias" value="{{ @$product->slug }}"  class="form-control" />

                                            </div>
                                            <div class="form-group">
                                                <label for="ten">Giá bán</label>
                                                <input type="text" name="price"  value="{{ @$product->price }}"  class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="ten">Giá cũ</label>
                                                <input type="text" name="price_old" value="{{ @$product->price_old }}"  class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <label for="desc">Mô tả</label>
                                                <textarea name="des" rows="5" id="txtContent" class="form-control">
                                                    {{ @$product->des }}
                                                </textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div><!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_2">
                                    <div class="box box-info">
                                      <div class="box-header">
                                            <h3 class="box-title">Mô tả chi tiết</h3>
                                            <div class="pull-right box-tools">
                                              <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                              <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                          </div>
                                      </div>
                                      <div class="box-body pad">
                                          <textarea name="properties" id="txtContent" cols="50" rows="5">
                                              {{ @$product->properties }}
                                          </textarea>
                                      </div>
                                  </div>
                                    <div class="box box-info">
                                        <div class="box-header">
                                            <h3 class="box-title">Nội dung</h3>
                                            <div class="pull-right box-tools">
                                                <button class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                                <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body pad">
                                            <textarea name="content" id="txtContent" cols="50" rows="5">
                                                {{ @$product->content }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- /.tab-pane -->
                                <div class="tab-pane" id="tab_5">
                                    <div class="form-group">
                                        <label class="control-label">Chọn ảnh</label>
                                        <input id="input-2" name="album[]" type="file" class="file" multiple data-show-upload="false" data-show-caption="true" data-allowed-file-extensions='["jpeg", "jpg", "png", "gif"]'>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_3">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="keyword">Title</label>
                                                <textarea name="title" rows="5" class="form-control">
                                                    {{ @$product->title }}
                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="keyword">Keyword</label>
                                                <textarea name="keyword" rows="5" class="form-control">
                                                    {{ @$product->keyword }}
                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" rows="5" class="form-control">
                                                    {{ @$product->description }}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="is_highlight"
                                    {!! (isset($product) && $product->is_highlight==1)?'checked="checked"':'' !!}>Nổi bật
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="active"
                                    {!! (isset($product) && $product->active==1)?'checked="checked"':'' !!}> Hiển thị
                                </label>
                            </div>

                        </div>
                        <div class="clearfix"></div>
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                    <a href="{{ route('admin.product.index') }}" class="btn btn-danger">Thoát</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div><!-- /.box -->

            </div>
        </div>
    </div>
@endsection