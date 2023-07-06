<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Truyện Tranh</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ $user->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">Nội dung</li>
                <li class="nav-item">
                    <a href="{{ route('admin_categories_list') }}" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Danh Mục</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin_manges_list') }}" class="nav-link">
                        <i class="nav-icon far fa-edit text-warning"></i>
                        <p>Truyện Tranh</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin_tags_list') }}" class="nav-link">
                        <i class="nav-icon far fa-bookmark text-warning"></i>
                        <p>Từ khóa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin_manges_list') }}" class="nav-link">
                        <i class="nav-icon far fa-comments text-warning"></i>
                        <p>Binh luận</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin_manges_list') }}" class="nav-link">
                        <i class="nav-icon far fa-sun text-warning"></i>
                        <p>Cấu Hình</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin_manges_list') }}" class="nav-link">
                        <i class="nav-icon far fa-list-alt text-warning"></i>
                        <p>Menu</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
