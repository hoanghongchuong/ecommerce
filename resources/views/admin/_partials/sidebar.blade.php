<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset($admin->avatar)}}" style="width:50px;height: 40px;" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Quản lý sản phẩm</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.category.index') }}"><i class="fa fa-circle-o"></i><span>Danh mục sản phẩm</span></a></li>
                    <li><a href="{{ route('admin.product.index') }}"><i class="fa fa-circle-o"></i><span>Sản phẩm</span></a></li>
                </ul>
            </li>            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Quản lý tin tức</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i><span>Danh mục tin tức</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i><span>Tin tức</span></a></li>
                </ul>
            </li>
            <li><a href="backend/bankaccount"><i class="fa fa-envelope"></i><span>Quản lý tài khoản ngân hàng</span></a></li>
            <li><a href="{{ route('province.index') }}"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý tỉnh/ thành phố</span></a></li>
            <li><a href="{{ route('district.index') }}"><i class="fa fa-gear" aria-hidden="true"></i> <span>Quản lý quận/ huyện</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>