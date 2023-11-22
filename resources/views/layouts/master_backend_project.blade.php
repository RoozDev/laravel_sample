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
                        <img src="{{ !empty($adminData['profile'][0]['photo']) ?
                                                          url(\Illuminate\Support\Facades\Auth::user()->profile[0]['photo']) :
                                                          url('upload/no_image.jpg')}}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ms-1">
                                   {{ Illuminate\Support\Facades\Auth::user()->name }}
                                    <i class="mdi mdi-chevron-down"></i>
                                </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->


                        <!-- item-->
                        <a href="{{ route('user.profile') }}" class="dropdown-item notify-item">
                            <i class="fe-user"></i>
                            <span>نمایه کاربر</span>
                        </a>

                        <!-- item-->
                        <a href="{{ route('dashboard.logout') }}" class="dropdown-item notify-item">
                            <i class="fe-log-out"></i>
                            <span>خروج</span>
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
                <a href="{{ route('dashboard') }}" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="" height="22">
                                <!-- <span class="logo-lg-text-light">UBold</span> -->
                            </span>
                    <span class="logo-lg">
                                <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="20">
                        <!-- <span class="logo-lg-text-light">U</span> -->
                            </span>
                </a>

                <a href="{{ route('dashboard') }}" class="logo logo-light text-center">
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



                    <li>
                        <a href="{{ route('users.index') }}">
                            <i class="fe-users"></i>
                            <span> کاربران </span>
                        </a>
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
{{--  toastr  --}}
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    switch(type){
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>
</body>
</html>
