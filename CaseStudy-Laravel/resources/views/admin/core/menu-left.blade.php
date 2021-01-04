<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Cake-Baker Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link active">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dash board</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.list') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Quản Lý Người Dùng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('role.list') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Quản Lý Chức Vụ</p>
                    </a>

                </li>
                <li class="nav-item menu-open">
                    <a href="{{ route('customer.list') }}" class="nav-link ">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Quản Lý Khách Hàng</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('product.list') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Danh Sách Sản Phẩm</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('category.list') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Danh Sách Thể Loại</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('order.list') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Danh Sách Đơn Hàng</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="return confirm('Bạn muốn đăng xuất không')">
                        <i class="fas fa-sign-out-alt ml-2"></i>
                        <p class="ml-2">Đăng Xuất</p>
                    </a>

                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
