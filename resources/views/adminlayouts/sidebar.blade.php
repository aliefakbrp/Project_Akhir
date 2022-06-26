<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin') }}" class="brand-link">
        <div class="pl-5">
            <i class="pr-2 fas fa-solid fa-hotel"></i>
            <span class="brand-text font-weight-light">AKB Hotels</span>
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <li class="nav nav-link">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <a href="#">
                    <div class="image">
                        <img src="{{ asset('/template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                            alt="User Image" />
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </a>
            </div>
            <ul></ul>
        </li>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search" />
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    {{-- <a href="/admin" class="nav-link {{ Route('admin') ? 'active' : ''}}"> --}}
                        <a href="/admin" class="nav-link {{ Request::routeIs('admin') ? 'active' : ''}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/edithotel"
                        class="nav-link {{ Request::routeIs('adminedithotel') ? 'active' : '' }}">
                        {{-- <i class="nav-icon fas fa-edit"></i> --}}
                        <i class="nav-icon fas fa-atom"></i>
                        <p>
                            Edit Hotel
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/verivy" class="nav-link {{ Request::routeIs('adminverivy') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>
                            Verivy
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/history" class="nav-link {{ Request::routeIs('adminhistory') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>
                            History
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
