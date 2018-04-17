@extends('admin.layout')
@section('content')
	<section class="content-header">
        <h1>
            Store
            <small>detail</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="backend"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="javascript:">store</a></li>
            <li class="active">detail</li>
        </ol>
    </section>
	 <div class="content">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                       
                    </div>
                    <div class="box-body">
                    	<div class="form-group">
                    		<label>Tên cửa hàng:</label>
                    		<div class="form-control">{{ $store->full_name }}</div>
                    	</div>
                    	<div class="form-group">
                    		<label>Địa chỉ:</label>
                    		<div class="form-control">{{ $store->address }}</div>
                    	</div>
                    	<div class="form-group">
                    		<label>Email:</label>
                    		<div class="form-control">{{ $store->email }}</div>
                    	</div>
                    	<div class="form-group">
                    		<label>số điện thoại:</label>
                    		<div class="form-control">{{ $store->phone }}</div>
                    	</div>  
                    	<div class="form-group">
                    		<label>Website:</label>
                    		<div class="form-control">{{ $store->website }}</div>
                    	</div>
                    	<div class="form-group">
                    		<label>Lĩnh vực kinh doanh:</label>
                    		<div class="form-control"></div>
                    	</div>  
                    	<div class="form-group">
                    		<label>Sản phẩm đặc biệt:</label>
                    		<div class="form-control"></div>
                    	</div>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
            	<div class="form-group">
            		<label>Ảnh giấy phép kinh doanh:</label>
            		<p><img src="{{ asset($store->business_license) }}" alt=""></p>
            	</div> 
            	<div class="form-group">
            		<label>Ảnh giấy chứng nhận đăng ký:</label>
            		<p>
            			
            			<img src="{{ asset($store->registration_certificate) }}" onerror="this.src='{{asset('admin_assets/no-image.jpg')}}'" width="150px" alt="">
            			
            		</p>
            	</div> 
            </div>
        </div>
    </div>
@endsection