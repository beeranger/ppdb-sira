<header class="topbar d-print-none">
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
                <a href="" class="logo">
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
                <!-- <li class="nav-item d-none d-md-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                        <i class="mdi mdi-menu font-24"></i>
                    </a>
                </li> -->
                
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav">                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('/assets/images/users/2.jpg') }}" alt="user" class="rounded-circle" width="40">
                        <span class="ms-1 font-weight-medium d-none d-sm-inline-block">{{ Auth::user()->name }} <i data-feather="chevron-down" class="feather-sm"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <div class="d-flex no-block align-items-center p-3 bg-primary text-white mb-2">
                            <div class=""><img src="{{ asset('assets/images/users/5.jpg') }}" alt="user" class="rounded-circle" width="60"></div>
                            <div class="ms-2">
                                <h4 class="mb-0 text-white">{{ Auth::user()->name }}</h4>
                                <p class=" mb-0">email : {{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        {{-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href=""><i data-feather="settings" class="feather-sm text-warning me-1 ms-1"></i>
                            Ubah Password</a> --}}
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i data-feather="log-out"
                                class="feather-sm text-danger me-1 ms-1"></i> Keluar</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../assets/images/users/2.jpg" alt="user" class="rounded-circle" width="40">
                        <span class="ms-1 font-weight-medium d-none d-sm-inline-block">Jonathan Doe <i data-feather="chevron-down" class="feather-sm"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <div class="d-flex no-block align-items-center p-3 bg-primary text-white mb-2">
                            <div class=""><img src="../assets/images/users/5.jpg" alt="user" class="rounded-circle" width="60"></div>
                            <div class="ms-2">
                                <h4 class="mb-0 text-white">Marken Doe</h4>
                                <p class=" mb-0">deo@gmail.com</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="#"><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i> My
                            Profile</a>
                        <a class="dropdown-item" href="#"><i data-feather="credit-card" class="feather-sm text-info me-1 ms-1"></i>
                            My Balance</a>
                        <a class="dropdown-item" href="#"><i data-feather="mail" class="feather-sm text-success me-1 ms-1"></i>
                            Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i data-feather="settings" class="feather-sm text-warning me-1 ms-1"></i>
                            Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i data-feather="log-out"
                                class="feather-sm text-danger me-1 ms-1"></i> Logout</a>
                        <div class="dropdown-divider"></div>
                        <div class="p-2"><a href="#"
                                class="btn d-block w-100 btn-primary rounded-pill">View Profile</a></div>
                    </div>
                </li> --}}
            </ul>
        </div>
    </nav>
</header>