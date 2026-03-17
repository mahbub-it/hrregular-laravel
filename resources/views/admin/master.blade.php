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

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap-icons.css') }}" defer="defer">


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

            <ul>
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
                <!-- LOGOUT START -->
                <li data-toggle="tooltip" data-placement="top" title="Logout">
                    <div class="logout_box">
                        <a class="d-block header-icon-box" href="javascript:;" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off f-16 text-dark-grey"></i>
                        </a>
                    </div>
                </li>
                <!-- LOGOUT END -->
            </ul>
        </div>
        <!-- NAVBAR RIGHT(SEARCH, ADD, NOTIFICATION, LOGOUT) START-->
    </header>
    <!-- HEADER END -->

    <!-- SIDEBAR START -->
    <aside class="sidebar-dark">
        <!-- MOBILE CLOSE SIDEBAR PANEL START -->
        <div class="mobile-close-sidebar-panel w-100 h-100" onclick="closeMobileMenu()" id="mobile_close_panel"></div>
        <!-- MOBILE CLOSE SIDEBAR PANEL END -->
        <!-- MAIN SIDEBAR START -->
        <div class="main-sidebar" id="mobile_menu_collapse">
            <!-- SIDEBAR BRAND START -->
            <div class="sidebar-brand-box dropdown cursor-pointer ">
                <div class="dropdown-toggle sidebar-brand d-flex align-items-center justify-content-between  w-100"
                    type="link" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <!-- SIDEBAR BRAND NAME START -->
                    <div class="sidebar-brand-name">
                        <h1 class="mb-0 f-16 f-w-500 text-white-shade mt-0" data-placement="bottom"
                            data-toggle="tooltip" data-original-title="Worksuite">Worksuite
                            <i class="icon-arrow-down icons pl-2"></i>
                        </h1>
                        <div class="mb-0 position-relative pro-name">
                            <span class="bg-light-green rounded-circle"></span>
                            <p class="f-13 text-lightest mb-0" data-placement="bottom" data-toggle="tooltip"
                                data-original-title="Rhoda Beatty">Rhoda Beatty</p>
                        </div>
                    </div>
                    <!-- SIDEBAR BRAND NAME END -->
                    <!-- SIDEBAR BRAND LOGO START -->
                    <div class="sidebar-brand-logo">
                        <img src="{{ asset('/assets/png/worksuite-logo.png') }}">
                    </div>
                    <!-- SIDEBAR BRAND LOGO END -->
                </div>
                <!-- DROPDOWN - INFORMATION -->
                <div class="dropdown-menu dropdown-menu-right sidebar-brand-dropdown ml-3"
                    aria-labelledby="dropdownMenuLink" tabindex="0">
                    <div class="d-flex justify-content-between align-items-center profile-box">
                        <a href="1.html">
                            <div class="profileInfo d-flex align-items-center mr-1 flex-wrap">
                                <div class="profileImg mr-2">
                                    <img class="h-100" src="https://i.pravatar.cc/300?u=admin@example.com"
                                        alt="Rhoda Beatty">
                                </div>
                                <div class="ProfileData">
                                    <h3 class="f-15 f-w-500 text-dark" data-placement="bottom" data-toggle="tooltip"
                                        data-original-title="Rhoda Beatty">Rhoda Beatty</h3>
                                    <p class="mb-0 f-12 text-dark-grey">Team Lead</p>
                                </div>
                            </div>
                        </a>
                        <a href="profile-settings.html" data-toggle="tooltip" data-original-title="Profile Settings">
                            <i class="side-icon bi bi-pencil-square"></i>
                        </a>
                    </div>

                    <a class="dropdown-item d-flex justify-content-between align-items-center f-15 text-dark invite-member"
                        href="javascript:;">
                        <span>Invite member to Worksuite</span>
                        <i class="side-icon bi bi-person-plus"></i>
                    </a>

                    <a class="dropdown-item d-flex justify-content-between align-items-center f-15 text-dark"
                        href="javascript:;">
                        <label for="dark-theme-toggle">Dark Mode</label>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="dark-theme-toggle">
                            <label class="custom-control-label f-14" for="dark-theme-toggle"></label>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex justify-content-between align-items-center f-15 text-dark"
                        href="logout.html" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        Logout <i class="side-icon bi bi-power"></i>
                    </a>
                </div>
            </div>
            <!-- SIDEBAR BRAND END -->

            <!-- SIDEBAR MENU START -->
            <div class="sidebar-menu " id="sideMenuScroll">
                <ul>
                    <!-- NAV ITEM - DASHBOARD COLLAPSE MENU-->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading "
                            title="Dashboard">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                            </svg>
                            <span class="pl-3">Dashboard</span>

                        </a>

                        <div class="accordionItemContent">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="dashboard.html" title="Private Dashboard">Private
                                Dashboard
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="dashboard-advanced.html"
                                title="Advanced Dashboard">Advanced Dashboard
                            </a>
                        </div>
                    </li>

                    <!-- NAV ITEM - MY CALENDAR -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="my-calendar.html"
                            title="My Calendar">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-calendar-range" viewBox="0 0 16 16">
                                <path d="M9 7a1 1 0 0 1 1-1h5v2h-5a1 1 0 0 1-1-1M1 9h4a1 1 0 0 1 0 2H1z" />
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                            </svg>
                            <span class="pl-3">My Calendar</span>
                        </a>


                    </li>

                    <!-- NAV ITEM - HR COLLAPASE MENU -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading " title="Leads">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                <path
                                    d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1z" />
                            </svg>
                            <span class="pl-3">Leads</span>

                        </a>

                        <div class="accordionItemContent ">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="lead-contact.html" title="Lead Contact">Lead Contact
                            </a>
                        </div>
                        <div class="accordionItemContent ">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="deals.html" title="Deals">Deals
                            </a>
                        </div>
                    </li>


                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="clients.html" title="Clients">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-building" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z" />
                                <path
                                    d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z" />
                            </svg>
                            <span class="pl-3">Clients</span>
                        </a>


                    </li>

                    <!-- NAV ITEM - HR COLLAPASE MENU -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading " title="HR">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-people" viewBox="0 0 16 16">
                                <path
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                            </svg>
                            <span class="pl-3">HR</span>

                        </a>

                        <div class="accordionItemContent">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="employees.html" title="Employees">Employees
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="leaves.html" title="Leaves">Leaves
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="shifts.html" title="Shift Roster">Shift Roster
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="attendances.html" title="Attendance">Attendance
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="holidays.html" title="Holiday">Holiday
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="designations.html" title="Designation">Designation
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="departments.html" title="Department">Department
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="appreciations.html" title="Appreciation">Appreciation
                            </a>
                            <!-- NAV ITEM - CUSTOM MODULES  -->
                        </div>
                    </li>

                    <!-- NAV ITEM - WORK COLLAPSE MENU -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading " title="Work">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-briefcase" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                            <span class="pl-3">Work</span>

                        </a>

                        <div class="accordionItemContent">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="contracts.html" title="Contracts">Contracts
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="projects.html" title="Projects">Projects
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="tasks.html" title="Tasks">Tasks
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="timelogs.html" title="Timesheet">Timesheet
                            </a>

                            <!-- NAV ITEM - CUSTOM MODULES  -->
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="projectroadmap.html" title="Project Roadmap">Project
                                Roadmap
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                    class="bi bi-gift ml-1 text-yellow" viewBox="0 0 16 16" data-toggle="tooltip"
                                    data-original-title="Add On (Need to be bought separately)">
                                    <path
                                        d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                                </svg>
                            </a>

                        </div>
                    </li>

                    <!-- NAV ITEM - FINANCE COLLAPASE MENU -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading " title="Finance">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cash-coin" viewBox="0 0 16 16">
                                <path
                                    d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                            </svg>
                            <span class="pl-3">Finance</span>

                        </a>

                        <div class="accordionItemContent">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="proposals.html" title="Proposal">Proposal
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="estimates.html" title="Estimates">Estimates
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="invoices.html" title="Invoices">Invoices
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="payments.html" title="Payments">Payments
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="creditnotes.html" title="Credit Note">Credit Note
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="expenses.html" title="Expenses">Expenses
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="bankaccounts.html" title="Bank Account">Bank Account
                            </a>
                            <!-- NAV ITEM - CUSTOM MODULES  -->
                        </div>
                    </li>

                    <!-- NAV ITEM - PRODUCTS -->

                    <!-- NAV ITEM - PRODUCTS -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="orders.html" title="Orders">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-cart3" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <span class="pl-3">Orders</span>
                        </a>


                    </li>

                    <!-- NAV ITEM - TICKETS -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="tickets.html" title="Tickets">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-headset" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z" />
                            </svg>
                            <span class="pl-3">Tickets</span>
                        </a>


                    </li>

                    <!-- NAV ITEM - EVENTS -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="events.html" title="Events">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-calendar-event" viewBox="0 0 16 16">
                                <path
                                    d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z" />
                                <path
                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                            </svg>
                            <span class="pl-3">Events</span>
                        </a>


                    </li>

                    <!-- NAV ITEM - MESSAGES -->
                    <li class="accordionItem closeIt message-menu">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="messages.html" title="Messages">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <span class="pl-3">Messages</span>
                        </a>


                    </li>

                    <!-- NAV ITEM - GDPR -->

                    <!-- NAV ITEM - NOTICES -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="notices.html"
                            title="Notice Board">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-clipboard" viewBox="0 0 16 16">
                                <path
                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                <path
                                    d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                            </svg>
                            <span class="pl-3">Notice Board</span>
                        </a>


                    </li>

                    <!-- Knowledge base -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="knowledgebase.html"
                            title="Knowledge Base">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-note" viewBox="0 0 16 16">
                                <g xmlns="http://www.w3.org/2000/svg" id="surface1">
                                    <path
                                        d="M 11.824219 0.21875 C 11.722656 0.0820312 11.5625 0 11.390625 0 L 2.277344 0 C 1.394531 0 0.675781 0.714844 0.675781 1.601562 L 0.675781 14.398438 C 0.675781 15.285156 1.394531 16 2.277344 16 L 13.71875 16 C 14.601562 16 15.320312 15.285156 15.320312 14.398438 L 15.320312 5.199219 C 15.320312 5.085938 15.285156 4.976562 15.21875 4.886719 Z M 11.121094 1.066406 L 14.253906 5.375 L 14.253906 14.398438 C 14.253906 14.695312 14.015625 14.933594 13.71875 14.933594 L 2.277344 14.933594 C 1.984375 14.933594 1.742188 14.695312 1.742188 14.398438 L 1.742188 1.601562 C 1.742188 1.304688 1.984375 1.066406 2.277344 1.066406 Z M 11.121094 1.066406 " />
                                    <path
                                        d="M 3.246094 4.460938 L 8 4.460938 C 8.292969 4.460938 8.53125 4.222656 8.53125 3.925781 C 8.53125 3.632812 8.292969 3.394531 8 3.394531 L 3.246094 3.394531 C 2.953125 3.394531 2.714844 3.632812 2.714844 3.925781 C 2.714844 4.222656 2.953125 4.460938 3.246094 4.460938 Z M 3.246094 4.460938 " />
                                    <path
                                        d="M 14.785156 5.429688 L 11.925781 5.429688 L 11.925781 0.535156 C 11.925781 0.238281 11.6875 0 11.390625 0 C 11.097656 0 10.859375 0.238281 10.859375 0.535156 L 10.859375 5.964844 C 10.859375 6.257812 11.097656 6.496094 11.390625 6.496094 L 14.785156 6.496094 C 15.082031 6.496094 15.320312 6.257812 15.320312 5.964844 C 15.320312 5.667969 15.082031 5.429688 14.785156 5.429688 Z M 14.785156 5.429688 " />
                                    <path
                                        d="M 3.246094 7.855469 L 8 7.855469 C 8.292969 7.855469 8.53125 7.617188 8.53125 7.320312 C 8.53125 7.027344 8.292969 6.789062 8 6.789062 L 3.246094 6.789062 C 2.953125 6.789062 2.714844 7.027344 2.714844 7.320312 C 2.714844 7.617188 2.953125 7.855469 3.246094 7.855469 Z M 3.246094 7.855469 " />
                                    <path
                                        d="M 3.246094 10.910156 L 10.035156 10.910156 C 10.328125 10.910156 10.566406 10.671875 10.566406 10.375 C 10.566406 10.082031 10.328125 9.84375 10.035156 9.84375 L 3.246094 9.84375 C 2.953125 9.84375 2.714844 10.082031 2.714844 10.375 C 2.714844 10.671875 2.953125 10.910156 3.246094 10.910156 Z M 3.246094 10.910156 " />
                                </g>
                            </svg>
                            <span class="pl-3">Knowledge Base</span>
                        </a>


                    </li>
                    <!-- Knowledge base -->

                    <!-- NAV ITEM - NOTES -->

                    <!-- NAV ITEM - CUSTOM MODULES  -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="assets.html" title="Assets">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-display" viewBox="0 0 16 16">
                                <path
                                    d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z" />
                            </svg>
                            <span class="pl-3">Assets</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gift ml-2 text-yellow" viewBox="0 0 16 16" data-toggle="tooltip"
                                data-original-title="Add On (Need to be bought separately)">
                                <path
                                    d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                            </svg>
                        </a>


                    </li>
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="biolinks.html" title="Biolinks">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-wallet" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path
                                    d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                            </svg>
                            <span class="pl-3">Biolinks</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gift ml-2 text-yellow" viewBox="0 0 16 16" data-toggle="tooltip"
                                data-original-title="Add On (Need to be bought separately)">
                                <path
                                    d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                            </svg>
                        </a>


                    </li>
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading "
                            title="Biometric">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-fingerprint" viewBox="0 0 16 16">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M48 256C48 141.1 141.1 48 256 48c63.1 0 119.6 28.1 157.8 72.5c8.6 10.1 23.8 11.2 33.8 2.6s11.2-23.8 2.6-33.8C403.3 34.6 333.7 0 256 0C114.6 0 0 114.6 0 256l0 40c0 13.3 10.7 24 24 24s24-10.7 24-24l0-40zm458.5-52.9c-2.7-13-15.5-21.3-28.4-18.5s-21.3 15.5-18.5 28.4c2.9 13.9 4.5 28.3 4.5 43.1l0 40c0 13.3 10.7 24 24 24s24-10.7 24-24l0-40c0-18.1-1.9-35.8-5.5-52.9zM256 80c-19 0-37.4 3-54.5 8.6c-15.2 5-18.7 23.7-8.3 35.9c7.1 8.3 18.8 10.8 29.4 7.9c10.6-2.9 21.8-4.4 33.4-4.4c70.7 0 128 57.3 128 128l0 24.9c0 25.2-1.5 50.3-4.4 75.3c-1.7 14.6 9.4 27.8 24.2 27.8c11.8 0 21.9-8.6 23.3-20.3c3.3-27.4 5-55 5-82.7l0-24.9c0-97.2-78.8-176-176-176zM150.7 148.7c-9.1-10.6-25.3-11.4-33.9-.4C93.7 178 80 215.4 80 256l0 24.9c0 24.2-2.6 48.4-7.8 71.9C68.8 368.4 80.1 384 96.1 384c10.5 0 19.9-7 22.2-17.3c6.4-28.1 9.7-56.8 9.7-85.8l0-24.9c0-27.2 8.5-52.4 22.9-73.1c7.2-10.4 8-24.6-.2-34.2zM256 160c-53 0-96 43-96 96l0 24.9c0 35.9-4.6 71.5-13.8 106.1c-3.8 14.3 6.7 29 21.5 29c9.5 0 17.9-6.2 20.4-15.4c10.5-39 15.9-79.2 15.9-119.7l0-24.9c0-28.7 23.3-52 52-52s52 23.3 52 52l0 24.9c0 36.3-3.5 72.4-10.4 107.9c-2.7 13.9 7.7 27.2 21.8 27.2c10.2 0 19-7 21-17c7.7-38.8 11.6-78.3 11.6-118.1l0-24.9c0-53-43-96-96-96zm24 96c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 24.9c0 59.9-11 119.3-32.5 175.2l-5.9 15.3c-4.8 12.4 1.4 26.3 13.8 31s26.3-1.4 31-13.8l5.9-15.3C267.9 411.9 280 346.7 280 280.9l0-24.9z" />
                                </svg>
                            </svg>
                            <span class="pl-3">Biometric</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gift ml-2 text-yellow" viewBox="0 0 16 16" data-toggle="tooltip"
                                data-original-title="Add On (Need to be bought separately)">
                                <path
                                    d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                            </svg>
                        </a>

                        <div class="accordionItemContent pb-2">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="biometric-devices.html" title="Devices">Devices
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="get-biometric-attendance.html"
                                title="Attendance Logs">Attendance Logs
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="biometric-employees.html"
                                title="Employees Mapping">Employees Mapping
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="biometric-commands.html" title="Commands">Commands
                            </a>
                        </div>
                    </li>
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading " title="Letter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-file" viewBox="0 0 16 16">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path
                                        d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                                </svg>
                            </svg>
                            <span class="pl-3">Letter</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gift ml-2 text-yellow" viewBox="0 0 16 16" data-toggle="tooltip"
                                data-original-title="Add On (Need to be bought separately)">
                                <path
                                    d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                            </svg>
                        </a>

                        <div class="accordionItemContent">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="generate.html" title="Generate">Generate
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="template.html" title="Template">Template
                            </a>
                        </div>
                    </li>
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading " title="Payroll">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-wallet" viewBox="0 0 16 16">
                                <path
                                    d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                            </svg>
                            <span class="pl-3">Payroll</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gift ml-2 text-yellow" viewBox="0 0 16 16" data-toggle="tooltip"
                                data-original-title="Add On (Need to be bought separately)">
                                <path
                                    d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                            </svg>
                        </a>

                        <div class="accordionItemContent pb-2">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="payroll.html" title="Payroll">Payroll
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="employee-salary.html" title="Employee Salary">Employee
                                Salary
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="payroll-expenses.html" title="Payroll Expenses">Payroll
                                Expenses
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="overtime-requests.html"
                                title="Overtime Request">Overtime Request
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="payroll-reports.html" title="Reports">Reports
                            </a>
                        </div>
                    </li>
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading "
                            title="Performance">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-wallet" viewBox="0 0 16 16">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                    <path d="M3 12h2v8H3zm4-4h2v12H7zm4-4h2v16h-2zm4 6h2v10h-2zm4-2h2v12h-2z" />
                                </svg>
                            </svg>
                            <span class="pl-3">Performance</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gift ml-2 text-yellow" viewBox="0 0 16 16" data-toggle="tooltip"
                                data-original-title="Add On (Need to be bought separately)">
                                <path
                                    d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                            </svg>
                        </a>

                        <div class="accordionItemContent pb-2">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="performance-dashboard.html" title="Dashboard">Dashboard
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="objectives.html" title="Objective">Objective
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="okr-scoring.html" title="OKR Score">OKR Score
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="meetings.html" title="1:1 Meetings">1:1 Meetings
                            </a>
                        </div>
                    </li>
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading "
                            title="Purchase">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-wallet" viewBox="0 0 16 16">
                                <path
                                    d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.6.6 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.6.6 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.6.6 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535z" />
                                <path
                                    d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.6.6 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0z" />
                            </svg>
                            <span class="pl-3">Purchase</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gift ml-2 text-yellow" viewBox="0 0 16 16" data-toggle="tooltip"
                                data-original-title="Add On (Need to be bought separately)">
                                <path
                                    d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                            </svg>
                        </a>

                        <div class="accordionItemContent pb-2">

                            <!-- NAV ITEM - VENDORS -->
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="vendors.html" title="Vendor">Vendor
                            </a>

                            <!-- NAV ITEM - PRODUCTS -->
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="purchase-products.html" title="Products">Products
                            </a>

                            <!-- NAV ITEM - ORDERS -->
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="purchase-order.html" title="Purchase Order">Purchase
                                Order
                            </a>

                            <!-- NAV ITEM - BILLS -->
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="bills.html" title="Bills">Bills
                            </a>

                            <!-- NAV ITEM - PAYMENTS -->
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="vendor-payments.html" title="Vendor Payments">Vendor
                                Payments
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="vendor-credits.html" title="Vendor Credits">Vendor
                                Credits
                            </a>

                            <!-- NAV ITEM - INVENTORY -->
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="purchase-inventory.html" title="Inventory">Inventory
                            </a>

                            <!-- NAV ITEM - REPORTS -->
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="reports.html" title="Reports">Reports
                            </a>

                        </div>
                    </li>

                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="qrcode.html" title="QR Code">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-qrcode" viewBox="0 0 16 16">
                                <path d="M2 2h2v2H2V2Z" />
                                <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z" />
                                <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z" />
                                <path
                                    d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z" />
                                <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z" />
                            </svg>
                            <span class="pl-3">QR Code</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gift ml-2 text-yellow" viewBox="0 0 16 16" data-toggle="tooltip"
                                data-original-title="Add On (Need to be bought separately)">
                                <path
                                    d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                            </svg>
                        </a>


                    </li>
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading " title="Recruit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-wallet" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path
                                    d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                            </svg>
                            <span class="pl-3">Recruit</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gift ml-2 text-yellow" viewBox="0 0 16 16" data-toggle="tooltip"
                                data-original-title="Add On (Need to be bought separately)">
                                <path
                                    d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                            </svg>
                        </a>

                        <div class="accordionItemContent">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="recruit-dashboard.html" title="Dashboard">Dashboard
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="jobs.html" title="Jobs">Jobs
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="job-applications.html" title="Job Applications">Job
                                Applications
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="interview-schedule.html"
                                title="Interview Schedule">Interview Schedule
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="job-offer-letter.html" title="Offer Letters">Offer
                                Letters
                            </a>


                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="job-skills.html" title="Skills">Skills
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="candidate-database.html"
                                title="Candidate Database">Candidate Database
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="recruit-job-report.html" title="Reports">Reports
                            </a>

                            <a class="d-block text-lightest f-14" target="_blank"
                                href="ae9ac18bcb437ef0e11dc89a1b0cded5.html">Career Site</a>
                        </div>
                    </li>

                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading "
                            title="Webhooks">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-wallet" viewBox="0 0 16 16">
                                <svg viewBox="-10 -5 1034 1034" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" fill="currentColor"
                                    stroke="currentColor">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill="currentColor"
                                            d="M482 226h-1l-10 2q-33 4 -64.5 18.5t-55.5 38.5q-41 37 -57 91q-9 30 -8 63t12 63q17 45 52 78l13 12l-83 135q-26 -1 -45 7q-30 13 -45 40q-7 15 -9 31t2 32q8 30 33 48q15 10 33 14.5t36 2t34.5 -12.5t27.5 -25q12 -17 14.5 -39t-5.5 -41q-1 -5 -7 -14l-3 -6l118 -192 q6 -9 8 -14l-10 -3q-9 -2 -13 -4q-23 -10 -41.5 -27.5t-28.5 -39.5q-17 -36 -9 -75q4 -23 17 -43t31 -34q37 -27 82 -27q27 -1 52.5 9.5t44.5 30.5q17 16 26.5 38.5t10.5 45.5q0 17 -6 42l70 19l8 1q14 -43 7 -86q-4 -33 -19.5 -63.5t-39.5 -53.5q-42 -42 -103 -56 q-6 -2 -18 -4l-14 -2h-37zM500 350q-17 0 -34 7t-30.5 20.5t-19.5 31.5q-8 20 -4 44q3 18 14 34t28 25q24 15 56 13q3 4 5 8l112 191q3 6 6 9q27 -26 58.5 -35.5t65 -3.5t58.5 26q32 25 43.5 61.5t0.5 73.5q-8 28 -28.5 50t-48.5 33q-31 13 -66.5 8.5t-63.5 -24.5 q-4 -3 -13 -10l-5 -6q-4 3 -11 10l-47 46q23 23 52 38.5t61 21.5l22 4h39l28 -5q64 -13 110 -60q22 -22 36.5 -50.5t19.5 -59.5q5 -36 -2 -71.5t-25 -64.5t-44 -51t-57 -35q-34 -14 -70.5 -16t-71.5 7l-17 5l-81 -137q13 -19 16 -37q5 -32 -13 -60q-16 -25 -44 -35 q-17 -6 -35 -6zM218 614q-58 13 -100 53q-47 44 -61 105l-4 24v37l2 11q2 13 4 20q7 31 24.5 59t42.5 49q50 41 115 49q38 4 76 -4.5t70 -28.5q53 -34 78 -91q7 -17 14 -45q6 -1 18 0l125 2q14 0 20 1q11 20 25 31t31.5 16t35.5 4q28 -3 50 -20q27 -21 32 -54 q2 -17 -1.5 -33t-13.5 -30q-16 -22 -41 -32q-17 -7 -35.5 -6.5t-35.5 7.5q-28 12 -43 37l-3 6q-14 0 -42 -1l-113 -1q-15 -1 -43 -1l-50 -1l3 17q8 43 -13 81q-14 27 -40 45t-57 22q-35 6 -70 -7.5t-57 -42.5q-28 -35 -27 -79q1 -37 23 -69q13 -19 32 -32t41 -19l9 -3z">
                                        </path>
                                    </g>
                                </svg>
                            </svg>
                            <span class="pl-3">Webhooks</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gift ml-2 text-yellow" viewBox="0 0 16 16" data-toggle="tooltip"
                                data-original-title="Add On (Need to be bought separately)">
                                <path
                                    d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 1 14.5V7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zM1 4v2h6V4H1zm8 0v2h6V4H9zm5 3H9v8h4.5a.5.5 0 0 0 .5-.5V7zm-7 8V7H2v7.5a.5.5 0 0 0 .5.5H7z" />
                            </svg>
                        </a>

                        <div class="accordionItemContent pb-2">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="webhooks.html" title="Webhooks">Webhooks
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="webhooks-log.html" title="Log">Log
                            </a>
                        </div>
                    </li>

                    <!-- NAV ITEM - NOTICES -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading " title="Reports">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-graph-up" viewBox="0 0 16 16">
                                <path
                                    d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793V1.018zm1 0V7.5h6.482A7.001 7.001 0 0 0 8.5 1.018zM14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                            </svg>
                            <span class="pl-3">Reports</span>

                        </a>

                        <div class="accordionItemContent">
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="task-report.html" title="Task Report">Task Report
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="time-log-report.html" title="Time Log Report">Time Log
                                Report
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="time-log-weekly-report.html"
                                title="Weekly Timesheet">Weekly Timesheet
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="finance-report.html" title="Finance Report">Finance
                                Report
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="income-expense-report.html"
                                title="Income Vs Expense">Income Vs Expense
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="leave-quota.html" title="Leave Report">Leave Report
                            </a>

                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="attendance-report.html"
                                title="Attendance Report">Attendance Report
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="expense-report.html" title="Expense Report">Expense
                                Report
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="lead-report.html" title="Deal Report">Deal Report
                            </a>
                            <!-- COLLAPSE - INFORMATION -->
                            <a class="f-14 text-lightest" href="sales-report.html" title="Sales Report">Sales Report
                            </a>
                        </div>
                    </li>

                    <!-- NAV ITEM - CUSTOM LINK -->



                    <!-- NAV ITEM - REPORTS COLLAPASE MENU -->
                    <!-- NAV ITEM - SETTINGS -->
                    <li class="accordionItem closeIt">

                        <a class="nav-item text-lightest f-15 sidebar-text-color" href="company-settings.html"
                            title="Settings">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-gear" viewBox="0 0 16 16">
                                <path
                                    d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                <path
                                    d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                            </svg>
                            <span class="pl-3">Settings</span>
                        </a>


                    </li>


                </ul>
            </div>
            <!-- SIDEBAR MENU END -->
        </div>
        <!-- MAIN SIDEBAR END -->
        <!-- Sidebar Toggler -->
        <div class="text-center d-flex justify-content-between align-items-center position-fixed sidebarTogglerBox ">
            <button class="border-0 d-lg-block d-none text-lightest font-weight-bold" id="sidebarToggle"></button>

            <button type="button" class="btn px-2 py-1 btn-primary btn-sm f-10 pull-left" data-toggle="modal"
                data-target="#raiseSupportTicketModal">
                Raise Support Ticket
            </button>
            <p class="mb-0 text-dark-grey px-1 py-0 rounded f-10">v5.5.26
            </p>
        </div>
        <!-- Sidebar Toggler -->

        <!-- Raise Support Ticket Modal -->
        <div id="raiseSupportTicketModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Raise Support Ticket</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- Header -->
                            <div class="text-center mb-4">
                                <h2 class="text-xl font-weight-bold text-dark mb-2">Choose Your Support Option</h2>
                                <p class="text-muted">Select the support service that best fits your needs</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- SIDEBAR END -->



    @yield('content')



    <!-- Global Required Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/main.min.js') }}" defer="defer"></script>
    <script src="{{ asset('assets/js/locales-all.min.js') }}" defer="defer"></script>
    <script src="{{ asset('assets/js/moment-timezone-with-data.min.js') }}"></script>

</body>

</html>