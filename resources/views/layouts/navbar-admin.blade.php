<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">                
                <li class="sidebar-item"><a href="{{ route('admin.home') }}" class="sidebar-link"><i class="mdi mdi-home"></i><span class="hide-menu"> Beranda </span></a></li>
                <li class="sidebar-item"><a href="{{ route('admin.list-users') }}" class="sidebar-link"><i class="mdi mdi-account"></i><span class="hide-menu"> Daftar Akun </span></a></li>
                {{-- <li class="sidebar-item"><a href="" class="sidebar-link"><span class="hide-menu"> Formulir SD </span></a></li>
                <li class="sidebar-item"><a href="" class="sidebar-link"><span class="hide-menu"> Formulir SMP </span></a></li> --}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>