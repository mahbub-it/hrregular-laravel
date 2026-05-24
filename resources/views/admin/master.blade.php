<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

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
                <!-- SEARCH START -->
                <li data-toggle="tooltip" data-placement="top" title="Search" class="d-none d-sm-block">
                    <div class="d-flex align-items-center">
                        <a href="javascript:;" class="d-block header-icon-box open-search">
                            <i class="fa fa-search f-16 text-dark-grey"></i>
                        </a>
                    </div>
                </li>
                <!-- SEARCH END -->
                <!-- Sticky Note START -->
                <li data-toggle="tooltip" data-placement="top" title="Sticky Notes" class="d-none d-sm-block">
                    <div class="d-flex align-items-center">
                        <a href="sticky-notes.html" class="d-block header-icon-box openRightModal">
                            <i class="fa fa-sticky-note f-16 text-dark-grey"></i>
                        </a>
                    </div>
                </li>
                <!-- Sticky Note END -->


                <!-- START TIMER -->
                <li data-toggle="tooltip" data-placement="top" title="Start Timer">
                    <div class="add_box dropdown">
                        <a class="d-block dropdown-toggle header-icon-box" type="link" id="show-active-timer"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-clock f-16 text-dark-grey"></i>
                            <span class="badge badge-primary active-timer-count position-absolute d-none">0</span>
                        </a>
                        <!-- DROPDOWN - INFORMATION -->
                        <div class="dropdown-menu dropdown-menu-right" id="active-timer-list"
                            aria-labelledby="dropdownMenuLink" tabindex="0">
                            <a class="dropdown-item text-primary f-w-500" href="javascript:;" id="start-timer-modal">
                                <i class="fa fa-play mr-2"></i>
                                Start Timer </a>
                        </div>
                    </div>
                </li>
                <!-- START TIMER END -->

                <!-- ADD START -->
                <li data-toggle="tooltip" data-placement="top" title="Create new">
                    <div class="add_box dropdown">
                        <a class="d-block dropdown-toggle header-icon-box" type="link" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-plus-circle f-16 text-dark-grey"></i>
                        </a>
                        <!-- DROPDOWN - INFORMATION -->
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" tabindex="0">
                            <a class="dropdown-item f-14 text-dark openRightModal" href="create.html">
                                <i class="fa fa-plus f-w-500 mr-2 f-11"></i>
                                Add Project </a>

                            <a class="dropdown-item f-14 text-dark openRightModal" href="create-2.html">
                                <i class="fa fa-plus f-w-500 mr-2 f-11"></i>
                                Add Task </a>

                            <a class="dropdown-item f-14 text-dark openRightModal" href="create-3.html">
                                <i class="fa fa-plus f-w-500 mr-2 f-11"></i>
                                Add Client </a>

                            <a class="dropdown-item f-14 text-dark openRightModal" href="create-4.html">
                                <i class="fa fa-plus f-w-500 mr-2 f-11"></i>
                                Add Employee </a>

                            <a class="dropdown-item f-14 text-dark openRightModal" href="create-5.html">
                                <i class="fa fa-plus f-w-500 mr-2 f-11"></i>
                                Add Payment </a>

                            <a class="dropdown-item f-14 text-dark openRightModal" href="create-6.html">
                                <i class="fa fa-plus f-w-500 mr-2 f-11"></i>
                                Create Ticket </a>
                        </div>
                    </div>
                </li>
                <!-- ADD END -->

                <!-- NOTIFICATIONS START -->
                <li title="New notifications">
                    <div class="notification_box dropdown">
                        <a class="d-block dropdown-toggle header-icon-box show-user-notifications" type="link"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell f-16 text-dark-grey"></i>
                        </a>
                        <!-- DROPDOWN - INFORMATION -->
                        <div class="dropdown-menu dropdown-menu-right notification-dropdown border-0 shadow-lg py-0 bg-additional-grey"
                            tabindex="0">
                            <div
                                class="d-flex px-3 justify-content-between align-items-center border-bottom-grey py-1 bg-white">
                                <div class="___class_+?50___">
                                    <p class="f-14 mb-0 text-dark f-w-500">New notifications</p>
                                </div>
                            </div>
                            <div id="notification-list">

                            </div>

                        </div>
                    </div>
                </li>
                <!-- NOTIFICATIONS END -->

                <!-- LOGOUT START With Bootstrap Model -->
                <li data-toggle="tooltip" data-placement="top" title="Logout">
                    <div class="logout_box">
                        <form action="{{ route('logout') }}" method="POST" id="logout-form">
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
    @include('admin.sidebar')
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