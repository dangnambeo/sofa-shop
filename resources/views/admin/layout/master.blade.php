<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>SOFA.T</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin_asset/images/favicon.ico') }}">
    <!-- Table datatable css -->
    <link href="{{ asset('admin_asset/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_asset/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_asset/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

    <!--Select2-->
    <link href="{{ asset('admin_asset/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="{{ asset('admin_asset/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_asset/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('admin_asset/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
          id="bootstrap-stylesheet" />
    <link href="{{ asset('admin_asset/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_asset/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link href="{{ asset('admin_asset/css/style.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

    <!-- App css -->
    <link href="{{ asset('admin_asset/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_asset/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_asset/css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

<!-- Begin page -->
<div id="wrapper">


    <!-- Topbar Start -->
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                        </h5>
                    </div>

                    <div class="slimscroll noti-scroll">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                            <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                        </a>



                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fi-arrow-right"></i>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('admin_asset/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                    <span class="ml-1">Samuel <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>Profile</span>
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

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('admin_asset/images/logo-light.png') }}" alt="" height="16">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="{{ asset('admin_asset/images/logo-sm.png') }}" alt="" height="28">
                        </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>

        </ul>
    </div>
    <!-- end Topbar -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">

        <div class="slimscroll-menu">

            <!--- Sidemenu -->
            <div id="sidebar-menu">

                <ul class="metismenu" id="side-menu">
                    <li>
                        <a href="#">
                            <i class="fe-airplay"></i>
                            <span class="badge badge-danger badge-pill float-right">3</span>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('list-user') }}">
                            <i class="fas fa-user-friends"></i>

                            <span> Danh sách nhân viên </span>
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
            <div class="container-fluid">
                @yield('content')
            </div>
        </div> <!-- end content -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        2017 - 2019 &copy; Abstack theme by <a href="">Coderthemes</a>
                    </div>

                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->



<!-- Vendor js -->
<script src="{{ asset('admin_asset/js/vendor.min.js') }}"></script>

<!-- Chart JS -->
<script src="{{ asset('admin_asset/libs/chart-js/Chart.bundle.min.js') }}"></script>

<!-- Init js -->
<script src="{{ asset('admin_asset/js/pages/dashboard.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('admin_asset/js/app.min.js') }}"></script>

<!-- plugin js -->
<script src="{{ asset('admin_asset/libs/moment/moment.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/jquery-ui/jquery-ui.min.js') }}"></script>


<!-- Required datatable js -->
<script src="{{ asset('admin_asset/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('admin_asset/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin_asset/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/datatables/buttons.print.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('admin_asset/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatables init -->
<script src="{{ asset('admin_asset/js/pages/datatables.init.js') }}"></script>
<!--Select2-->


<script src="{{ asset('admin_asset/libs/multiselect/jquery.multi-select.js') }}"></script>
<script src="{{ asset('admin_asset/libs/select2/select2.min.js') }}"></script>

<script src="{{ asset('admin_asset/libs/jquery-mockjax/jquery.mockjax.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/autocomplete/jquery.autocomplete.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/bootstrap-select/bootstrap-select.min.js') }}"></script>

<script src="{{ asset('admin_asset/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>


<!--Select2-->

<script src="{{ asset('admin_asset/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin_asset/libs/pdfmake/vfs_fonts.js') }}"></script>

<!-- Datatables init -->
<script src="{{ asset('admin_asset/js/pages/datatables.init.js') }}"></script>

<!--SweetAlert-->
<!-- Plugins js -->
<script src="{{ asset('admin_asset/libs/dropzone/dropzone.min.js') }}"></script>
<!-- Plugins js -->

</body>
</html>
