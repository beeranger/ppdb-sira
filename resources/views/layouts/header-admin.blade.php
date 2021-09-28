<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-lg navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)">
                <i class="ri-close-line fs-6 ri-menu-2-line"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
                <a href="{{ route('admin.home') }}" class="logo">
                    <!-- Logo icon -->
                    <b class="logo-icon">
                        <!-- Dark Logo icon -->
                        <img src="{{ asset('/assets/logo-utama.png') }}" alt="homepage" class="dark-logo" height="50px"/>
                    </b>
                    <!--End Logo icon -->
                    
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                   class="ri-more-line fs-6"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav me-auto">                
                                
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('assets/images/users/2.jpg') }}" alt="user" class="rounded-circle" width="40">
                        <span class="ms-1 font-weight-medium d-none d-sm-inline-block">{{ Auth::user()->name }}<i data-feather="chevron-down" class="feather-sm"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <div class="d-flex no-block align-items-center p-3 bg-primary text-white mb-2">
                            <div class=""><img src="{{ asset('assets/images/users/5.jpg') }}" alt="user" class="rounded-circle" width="60"></div>
                            <div class="ms-2">
                                <h4 class="mb-0 text-white">{{ Auth::user()->name }}</h4>
                                <p class=" mb-0">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i data-feather="log-out"
                                class="feather-sm text-danger me-1 ms-1"></i> Keluar</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>                     
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>