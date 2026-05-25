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
                    <h1 class="mb-0 f-16 f-w-500 text-white-shade mt-0" data-placement="bottom" data-toggle="tooltip"
                        data-original-title="DreamWebdev">DreamWebdev
                        <i class="icon-arrow-down icons pl-2"></i>
                    </h1>
                    <div class="mb-0 position-relative pro-name">
                        <span class="bg-light-green rounded-circle"></span>
                        <p class="f-13 text-lightest mb-0" data-placement="bottom" data-toggle="tooltip"
                            data-original-title="{{ auth()->user()->name }}">{{ auth()->user()->name }}</p>
                    </div>
                </div>
                <!-- SIDEBAR BRAND NAME END -->
                <!-- SIDEBAR BRAND LOGO START -->
                <div class="sidebar-brand-logo">
                    <img src="{{ asset('/assets/png/dreamwebdev-logo.png') }}">
                </div>
                <!-- SIDEBAR BRAND LOGO END -->
            </div>
            <!-- DROPDOWN - INFORMATION -->
            <div class="dropdown-menu dropdown-menu-right sidebar-brand-dropdown ml-3"
                aria-labelledby="dropdownMenuLink" tabindex="0">
                <div class="d-flex justify-content-between align-items-center profile-box">
                    <span>
                        <div class="profileInfo d-flex align-items-center mr-1 flex-wrap">
                            <div class="profileImg mr-2">
                                <img class="rounded-circle"
                                    src="{{ auth()->user()->hasMedia('profile_picture') ? auth()->user()->getFirstMediaUrl('profile_picture') : asset('images/default-avatar.png') }}"
                                    alt="User Image">
                            </div>
                            <div class="ProfileData">
                                <h3 class="f-15 f-w-500 text-dark" data-placement="bottom" data-toggle="tooltip"
                                    data-original-title="{{ auth()->user()->name }}">{{ auth()->user()->name }}</h3>
                                <p class="mb-0 f-12 text-dark-grey">{{ auth()->user()->role }}</p> 
                            </div>
                        </div>
                    </span>
                    <span>
                        <i class="side-icon bi bi-person-circle"></i>
                    </span>
                </div>

                <a class="dropdown-item d-flex justify-content-between align-items-center f-15 text-dark invite-member"
                    href="{{ route('admin.myProfile') }}" data-toggle="tooltip" data-original-title="Profile Settings">
                    <span>My Profile Edit</span>
                    <i class="side-icon bi bi-pencil-square"></i>
                </a>

                <a class="dropdown-item d-flex justify-content-between align-items-center f-15 text-dark mt-2">
                    <form action="{{ route('employee.logout') }}" method="POST">
                        @csrf
                        <button type="button" class=" f-16 btn btn-danger border-0 d-block" data-bs-toggle="modal"
                            data-bs-target="#logoutModal">
                            <i class="side-icon bi bi-power"></i> Log Out
                        </button>

                    </form>
                </a>
            </div>
        </div>
        <!-- SIDEBAR BRAND END -->

        <!-- SIDEBAR MENU START -->
        <div class="sidebar-menu " id="sideMenuScroll">
            <ul>
                <!-- NAV ITEM - DASHBOARD -->
                <li class="accordionItem">

                    <a href="{{ route('employee.dashboard') }}" class="nav-item text-white f-15 sidebar-text-color"
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


                </li>

                <!-- NAV ITEM - User COLLAPASE MENU -->
                <li class="accordionItem">

                    <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading" title="HR">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"></path>
                </svg>
                        <span class="pl-3">HR</span>
                    </a>

                    <div class="accordionItemContent">
                        <!-- Employee LEAVES INFORMATION -->
                        <a href="{{ route('employee.leaves') }}" class="f-14 text-lightest" title="Leaves">
                            <span class="pl-1">Leaves</span>
                        </a>
                    </div>

                    <div class="accordionItemContent">
                        <!-- Employee ATTENDANCE INFORMATION -->
                         <a href="{{ route('employee.attendance') }}" class="f-14 text-lightest" title="Attendance">                       
                            <span class="pl-1">Attendance</span>
                        </a>

                    </div>

                    <div class="accordionItemContent">
                        <!-- Employee HOLIDAYS INFORMATION -->
                        <a href="{{ route('employee.holidays') }}" class="f-14 text-lightest" title="Holidays">
                            <span class="pl-1">Holidays</span>
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

         
</aside>