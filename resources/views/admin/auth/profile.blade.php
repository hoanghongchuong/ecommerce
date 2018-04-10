@extends('admin.layout')
@section('content')
    <section class="content-header">
        <h1>
            Profile
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:">profile</a></li>
            {{--<li class="active">list</li>--}}
        </ol>
    </section>
    <div class="content">
        <div class="row">
            <div class="box">
                <div class="box-body">
                    <form action="{{ route('admin.profile') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <img src=""  width="200" />
                                        <input type="hidden" name="img_current" value="{!! @$data->photo !!}">
                                    </div>
                                    <label for="file">Chọn File ảnh</label>
                                    <input type="file" id="file" name="fImages" >
                                    <p class="help-block">Width:225px - Height: 162px</p>
                                </div>
                                <div class="form-group">
                                    <label for="">Tên</label>
                                    <input type="text" class="form-control" name="full_name" value="{{$user->full_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="">Mật khẩu mới</label>
                                    <input type="password" class="form-control" name="password">
                                    {!! $errors->first('password') ? '<p class="text-danger">'. $errors->first('password') .'</p>' : ''!!}
                                </div>
                                <div class="form-group">
                                    <label for="">Xác nhận mật khẩu</label>
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                                <button type="submit" class="btn btn-primary">Cập nhật</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection