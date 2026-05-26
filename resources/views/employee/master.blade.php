<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="{{ asset('/assets/image/png') }}" sizes="16x16"
        href="{{ asset('/assets/png/favicon.png') }}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/css/all.min.css') }}" defer="defer">

    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/css/simple-line-icons.css') }}" defer="defer">

    <!-- Datepicker -->
    <link rel="stylesheet" href="{{ asset('/assets/css/datepicker.min.css') }}" defer="defer">

    <!-- TimePicker -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap-timepicker.min.css') }}" defer="defer">

    <!-- Select Plugin -->
    <link rel="stylesheet" href="{{ asset('/assets/css/select2.min.css') }}" defer="defer">

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Template CSS -->
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('/assets/css/main.css') }}">

    <title>Dashboard</title>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('/assets/png/favicon.png') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="8tzOEL4nT9Bva1qlJPL4LXVNFcMhCFO0mGtqX3fh" />

    <link rel="stylesheet" href=" {{ asset('/assets/css/main.min.css') }}" defer="defer">

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-colorpicker.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-timepicker.min.js') }}" defer="defer"></script>

</head>


<body id="body" class=" ">

    <!-- HEADER START -->
    <header class="main-header clearfix bg-white" id="header">


        <!-- NAVBAR LEFT(MOBILE MENU COLLAPSE) START-->
        <div class="navbar-left float-left d-flex align-items-center">
            <!-- PAGE TITLE START -->
            <div class="page-title d-none d-lg-flex">
                <div class="page-heading">
                    <h2 class="mb-0 pr-3 text-dark f-18 font-weight-bold d-flex align-items-center">
                        <span class="d-inline-block text-truncate mw-300">Dashboard</span>

                        <span class="text-lightest f-12 f-w-500 mx-2 mw-250 text-truncate">
                            <a href="dashboard.html" class="text-lightest">Home</a> &bull;
                            Dashboard
                        </span>
                    </h2>
                </div>
            </div>
            <!-- PAGE TITLE END -->

            <div class="d-block d-lg-none menu-collapse cursor-pointer position-relative" onclick="openMobileMenu()">
                <div class="mc-wrap">
                    <div class="mcw-line"></div>
                    <div class="mcw-line center"></div>
                    <div class="mcw-line"></div>
                </div>
            </div>


        </div>

        <!-- NAVBAR LEFT(MOBILE MENU COLLAPSE) END-->
        <!-- NAVBAR RIGHT(SEARCH, ADD, NOTIFICATION, LOGOUT) START-->
        <div class="page-header-right float-right d-flex align-items-center justify-content-end">

            <span id="timer-clock">
            </span>

            <ul class="d-flex align-items-center">
                <!-- LOGOUT START With Bootstrap Model -->
                <li data-toggle="tooltip" data-placement="top" title="Logout">
                    <div class="logout_box">
                        <form action="{{ route('employee.logout') }}" method="POST" id="logout-form">
                            @csrf
                        </form>
                        <button type="button" class=" f-16 btn btn-danger border-0 d-block" data-bs-toggle="modal"
                            data-bs-target="#logoutModal">
                            <i class="fa fa-power-off f-16 text-white"></i>
                            Log Out
                        </button>
                    </div>
                </li>
                <!-- LOGOUT END -->
            </ul>
        </div>
        <!-- NAVBAR RIGHT(SEARCH, ADD, NOTIFICATION, LOGOUT) START-->
    </header>
    <!-- HEADER END -->

    <!-- SIDEBAR START -->
    @include('employee.sidebar')
    <!-- SIDEBAR END -->

    @yield('content')

    <!-- Global Required Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/main.min.js') }}" defer="defer"></script>
    <script src="{{ asset('assets/js/locales-all.min.js') }}" defer="defer"></script>
    <script src="{{ asset('assets/js/moment-timezone-with-data.min.js') }}"></script>
    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>

    <!-- Logout Confirmation Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger"
                        onclick="document.getElementById('logout-form').submit()">Logout</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>