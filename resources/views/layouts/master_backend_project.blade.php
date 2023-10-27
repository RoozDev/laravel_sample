                                        {{-- header --}}
@include('backend.dashboard.includes.master_header')
                                        {{-- end header --}}

<!-- body start -->
<body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-end mb-0">




                <li class="dropdown notification-list topbar-dropdown">
                    <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ asset('backend/assets/images/users/user-1.jpg') }}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ms-1">
                                    Geneva <i class="mdi mdi-chevron-down"></i>
                                </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="fe-settings noti-icon"></i>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                    <span class="logo-lg">
                                <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="20">
                        <!-- <span class="logo-lg-text-light">U</span> -->
                            </span>
                </a>

                <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                            </span>
                    <span class="logo-lg">
                                <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="20">
                            </span>
                </a>
            </div>

        </div>
    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="h-100" data-simplebar>

            <!-- User box -->
            <div class="user-box text-center">
                <img src="{{ asset('backend/assets/images/users/user-1.jpg') }}" alt="user-img" title="Mat Helme"
                     class="rounded-circle avatar-md">
                <div class="dropdown">
                    <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                       data-bs-toggle="dropdown">Geneva Kennedy</a>
                    <div class="dropdown-menu user-pro-dropdown">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-user me-1"></i>
                            <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-settings me-1"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-lock me-1"></i>
                            <span>Lock Screen</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="fe-log-out me-1"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </div>
                <p class="text-muted">Admin Head</p>
            </div>

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul id="side-menu">

                    <li class="menu-title mt-2">Apps</li>


                    <li>
                        <a href="#sidebarEmail" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
                            <span> Email </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEmail">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="email-inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="email-read.html">Read Email</a>
                                </li>
                                <li>
                                    <a href="email-compose.html">Compose Email</a>
                                </li>
                                <li>
                                    <a href="email-templates.html">Email Templates</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                </ul>

            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

<div class="content-page">
    <div class="content">

         @yield('content')

     </div> <!-- end content  -->


    <!-- Footer Start -->
@include('backend.dashboard.includes.master_footer_section')
    <!-- end Footer -->

</div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
@include('backend.dashboard.includes.master_right_sidebar')
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
@include('backend.dashboard.includes.master_footer')
</body>
</html>
