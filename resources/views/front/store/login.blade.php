<form action="" method="post">
	{{csrf_field()}}
	@if(session('message'))
        <p style="color:red">{{ session('message') }}</p>
    @endif
	<input type="text" name="email" placeholder="Nhập email"> <br>
	<input type="text" name="password" placeholder="Nhập mật khẩu"> <br>
	<button type="submit">Đăng nhập</button>
</form>