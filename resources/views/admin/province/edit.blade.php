@extends('admin.layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Province
        <small>edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="javascript:">province</a></li>
        <li class="active">edit</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
  
    <div class="box">
        <div class="box-body">
          
          <form name="frmAdd" method="post" action="{{ asset('backend/province/edit/'.$province->id) }}" >
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                          
            <div class="clearfix"></div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Tên</label>
                <input type="text" name="txtName" class="form-control" value="{{$province->name}}">
              </div>
            </div>
            
          <div class="clearfix"></div>
          <div class="box-footer">
            <div class="row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <!-- <button type="button" onclick="javascript:window.location=''" class="btn btn-danger">Thoát</button> -->
              </div>
            </div>
          </div>
        </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
    
</section><!-- /.content -->

@endsection()
