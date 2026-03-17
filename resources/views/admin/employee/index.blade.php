@extends('admin.master')
@section('content')
    <!-- BODY WRAPPER START -->
    <div class="clearfix body-wrapper">


        <!-- MAIN CONTAINER START -->
        <section class="mb-5 main-container bg-additional-grey mb-sm-0" id="fullscreen">

            <div class="preloader-container justify-content-center align-items-center" style="display: none;">
                <div class="spinner-border" role="status" aria-hidden="true"></div>
            </div>



            <div class="filter-box">
                <!-- FILTER START -->
                <form action="#" id="filter-form">
                    <div class="d-lg-flex d-md-flex d-block flex-wrap filter-box bg-white client-list-filter">
                        <!-- CLIENT START -->
                        <div class="select-box py-2 d-flex pr-2 border-right-grey border-right-grey-sm-0">
                            <p class="mb-0 pr-2 f-14 text-dark-grey d-flex align-items-center">Employee</p>
                            <div class="select-status">
                                <div class="dropdown bootstrap-select form-control select-picker"><select
                                        class="form-control select-picker" name="employee" id="employee"
                                        data-live-search="true" data-size="8">
                                        <option value="all">All</option>
                                        <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=maud74@example.com4'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Alda Hauck&lt;/div&gt;" value="14">
                                            Alda Hauck
                                        </option>
                                        <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=torphy.darren@example.com1'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Alford Erdman II&lt;/div&gt;" value="13">
                                            Alford Erdman II
                                        </option>
                                        <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=zfriesen@example.net5'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Alfreda Sipes&lt;/div&gt;" value="18">
                                            Alfreda Sipes
                                        </option>
                                        <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=dare.clair@example.net9'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Bobby Koelpin&lt;/div&gt;" value="16">
                                            Bobby Koelpin
                                        </option>
                                        <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=employee@example.com'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Dr. Bennie Mitchell I&lt;/div&gt;" value="2">
                                            Dr. Bennie Mitchell I
                                        </option>
                                        <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=garrett.runte@example.net0'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Laurence Davis&lt;/div&gt;" value="19">
                                            Laurence Davis
                                        </option>
                                        <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=lkub@example.net4'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Major Purdy&lt;/div&gt;" value="12">
                                            Major Purdy
                                        </option>
                                        <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=becker.delia@example.org7'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Prof. Flo Rippin&lt;/div&gt;" value="15">
                                            Prof. Flo Rippin
                                        </option>
                                        <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=scotty13@example.com7'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Raleigh Ratke&lt;/div&gt;" value="17">
                                            Raleigh Ratke
                                        </option>
                                        <option
                                            data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=admin@example.com'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Rhoda Beatty &lt;span class=&quot;ml-1 badge badge-secondary pr-1&quot;&gt;It's you&lt;/span&gt;&lt;/div&gt;"
                                            value="1">
                                            Rhoda Beatty
                                        </option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-toggle="dropdown" role="combobox" aria-owns="bs-select-1"
                                        aria-haspopup="listbox" aria-expanded="false" data-id="employee" title="All">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">All</div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu ">
                                        <div class="bs-searchbox"><input type="search" class="form-control"
                                                autocomplete="off" role="combobox" aria-label="Search"
                                                aria-controls="bs-select-1" aria-autocomplete="list"></div>
                                        <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CLIENT END -->

                        <!-- DESIGNATION START -->
                        <div class="select-box d-flex py-2 px-lg-2 px-md-2 px-0 border-right-grey border-right-grey-sm-0">
                            <p class="mb-0 pr-2 f-14 text-dark-grey d-flex align-items-center">Designation</p>
                            <div class="select-status">
                                <div class="dropdown bootstrap-select form-control select-picker"><select
                                        class="form-control select-picker" name="designation" id="designation">
                                        <option value="all">All</option>
                                        <option value="1">Trainee</option>
                                        <option value="2">Senior</option>
                                        <option value="3">Junior</option>
                                        <option value="4">Team Lead</option>
                                        <option value="5">Project Manager</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-toggle="dropdown" role="combobox" aria-owns="bs-select-2"
                                        aria-haspopup="listbox" aria-expanded="false" data-id="designation" title="All">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">All</div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-2" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- DESIGNATION END -->


                        <!-- SEARCH BY TASK START -->
                        <div class="task-search d-flex  py-1 px-lg-3 px-0 border-right-grey align-items-center">

                            <div class="input-group bg-grey rounded">
                                <div class="input-group-prepend">
                                    <span class="input-group-text border-0 bg-additional-grey">
                                        <svg class="svg-inline--fa fa-search fa-w-16 f-13 text-dark-grey" aria-hidden="true"
                                            focusable="false" data-prefix="fa" data-icon="search" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                            </path>
                                        </svg><!-- <i class="fa fa-search f-13 text-dark-grey"></i> Font Awesome fontawesome.com -->
                                    </span>
                                </div>
                                <input type="text" class="form-control f-14 p-1 border-additional-grey"
                                    id="search-text-field" placeholder="Start typing to search" autocomplete="off">
                            </div>

                        </div>
                        <!-- SEARCH BY TASK END -->

                        <!-- RESET START -->
                        <div class="select-box d-flex py-1 px-lg-2 px-md-2 px-0">
                            <button type="button" class="btn-secondary rounded f-14 p-2 btn-xs d-none" id="reset-filters">
                                <svg class="svg-inline--fa fa-times-circle fa-w-16 mr-1" aria-hidden="true"
                                    focusable="false" data-prefix="fa" data-icon="times-circle" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z">
                                    </path>
                                </svg><!-- <i class="fa fa-times-circle mr-1"></i> Font Awesome fontawesome.com -->
                                Clear
                            </button>
                        </div>
                        <!-- RESET END -->

                        <!-- MORE FILTERS START -->
                        <div class="ml-auto d-flex align-items-center">


                            <div class="more-filters py-2 pl-0 pl-lg-2 pl-md-2 position-relative">

                                <a onclick="openMoreFilter()" class="mb-0 d-none d-lg-block  f-14 text-dark-grey"><svg
                                        class="svg-inline--fa fa-filter fa-w-16 f-13 text-dark-grey mt-1 mr-1"
                                        aria-hidden="true" focusable="false" data-prefix="fa" data-icon="filter" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z">
                                        </path>
                                    </svg><!-- <i class="fa fa-filter f-13 text-dark-grey mt-1 mr-1"></i> Font Awesome fontawesome.com -->Filters</a>

                                <a onclick="openMoreFilter()" class="mb-0 d-block d-lg-none  text-dark-grey"><svg
                                        class="svg-inline--fa fa-filter fa-w-16 filter_icon mr-2" aria-hidden="true"
                                        focusable="false" data-prefix="fa" data-icon="filter" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M487.976 0H24.028C2.71 0-8.047 25.866 7.058 40.971L192 225.941V432c0 7.831 3.821 15.17 10.237 19.662l80 55.98C298.02 518.69 320 507.493 320 487.98V225.941l184.947-184.97C520.021 25.896 509.338 0 487.976 0z">
                                        </path>
                                    </svg><!-- <i class="fa fa-filter filter_icon mr-2"></i> Font Awesome fontawesome.com -->Filters</a>

                                <div class="more-filter-tab" id="more_filter">
                                    <div class="filter-inner">
                                        <div class="sticky-top bg-white">
                                            <h3 class="pb-3 mb-2 f-18 f-w-500  text-dark">Filters</h3>
                                            <!-- <i onclick="closeMoreFilter()" class="close-more-filter fa fa-times f-16 cursor-pointer text-lightest"></i> -->
                                            <button type="button" class="close " onclick="closeMoreFilter()"
                                                aria-label="Close">
                                                <span aria-hidden="true" class="f-22 close-more-filter">×</span>
                                            </button>
                                        </div>
                                        <div class="filter-detail">
                                            <div class="more-filter-items">
                                                <label class="f-14 text-dark-grey mb-12 " for="usr">Department</label>
                                                <div class="select-filter mb-4">
                                                    <div class="select-others">
                                                        <div class="dropdown bootstrap-select form-control select-picker">
                                                            <select class="form-control select-picker" name="department"
                                                                data-container="body" id="department">
                                                                <option value="all">All</option>
                                                                <option value="1">Marketing</option>
                                                                <option value="2">Sales</option>
                                                                <option value="3">Human Resources</option>
                                                                <option value="4">Public Relations</option>
                                                                <option value="5">Research</option>
                                                                <option value="6">Finance</option>
                                                            </select><button type="button" tabindex="-1"
                                                                class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                                                role="combobox" aria-owns="bs-select-3"
                                                                aria-haspopup="listbox" aria-expanded="false"
                                                                data-id="department" title="All">
                                                                <div class="filter-option">
                                                                    <div class="filter-option-inner">
                                                                        <div class="filter-option-inner-inner">All</div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                            <div class="dropdown-menu ">
                                                                <div class="inner show" role="listbox" id="bs-select-3"
                                                                    tabindex="-1">
                                                                    <ul class="dropdown-menu inner show"
                                                                        role="presentation"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="more-filter-items">
                                                <label class="f-14 text-dark-grey mb-12 " for="usr">Reporting To</label>
                                                <div class="select-filter mb-4">
                                                    <div class="select-others">
                                                        <div class="dropdown bootstrap-select form-control select-picker">
                                                            <select class="form-control select-picker"
                                                                name="reporting_employee" id="reporting_employee"
                                                                data-live-search="true" data-size="8">
                                                                <option value="all">All</option>
                                                                <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=maud74@example.com4'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Alda Hauck&lt;/div&gt;" value="14">
                                                                    Alda Hauck
                                                                </option>
                                                                <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=torphy.darren@example.com1'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Alford Erdman II&lt;/div&gt;" value="13">
                                                                    Alford Erdman II
                                                                </option>
                                                                <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=zfriesen@example.net5'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Alfreda Sipes&lt;/div&gt;" value="18">
                                                                    Alfreda Sipes
                                                                </option>
                                                                <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=dare.clair@example.net9'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Bobby Koelpin&lt;/div&gt;" value="16">
                                                                    Bobby Koelpin
                                                                </option>
                                                                <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=employee@example.com'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Dr. Bennie Mitchell I&lt;/div&gt;" value="2">
                                                                    Dr. Bennie Mitchell I
                                                                </option>
                                                                <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=garrett.runte@example.net0'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Laurence Davis&lt;/div&gt;" value="19">
                                                                    Laurence Davis
                                                                </option>
                                                                <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=lkub@example.net4'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Major Purdy&lt;/div&gt;" value="12">
                                                                    Major Purdy
                                                                </option>
                                                                <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=becker.delia@example.org7'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Prof. Flo Rippin&lt;/div&gt;" value="15">
                                                                    Prof. Flo Rippin
                                                                </option>
                                                                <option data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=scotty13@example.com7'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Raleigh Ratke&lt;/div&gt;" value="17">
                                                                    Raleigh Ratke
                                                                </option>
                                                                <option
                                                                    data-content="&lt;div class='d-flex align-items-center text-left'&gt;
                            &lt;div class='taskEmployeeImg border-0 d-inline-block mr-1'&gt;
                                &lt;img class='rounded-circle' src='https://i.pravatar.cc/300?u=admin@example.com'&gt;
                            &lt;/div&gt;
                            &lt;div&gt;Rhoda Beatty &lt;span class=&quot;ml-1 badge badge-secondary pr-1&quot;&gt;It's you&lt;/span&gt;&lt;/div&gt;"
                                                                    value="1">
                                                                    Rhoda Beatty
                                                                </option>
                                                            </select><button type="button" tabindex="-1"
                                                                class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                                                role="combobox" aria-owns="bs-select-4"
                                                                aria-haspopup="listbox" aria-expanded="false"
                                                                data-id="reporting_employee" title="All">
                                                                <div class="filter-option">
                                                                    <div class="filter-option-inner">
                                                                        <div class="filter-option-inner-inner">All</div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                            <div class="dropdown-menu ">
                                                                <div class="bs-searchbox"><input type="search"
                                                                        class="form-control" autocomplete="off"
                                                                        role="combobox" aria-label="Search"
                                                                        aria-controls="bs-select-4"
                                                                        aria-autocomplete="list"></div>
                                                                <div class="inner show" role="listbox" id="bs-select-4"
                                                                    tabindex="-1">
                                                                    <ul class="dropdown-menu inner show"
                                                                        role="presentation"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="more-filter-items">
                                                <label class="f-14 text-dark-grey mb-12 " for="usr">Role</label>
                                                <div class="select-filter mb-4">
                                                    <div class="select-others">
                                                        <div class="dropdown bootstrap-select form-control select-picker">
                                                            <select class="form-control select-picker" name="role" id="role"
                                                                data-container="body">
                                                                <option value="all">All</option>
                                                                <option value="1">App Administrator</option>
                                                                <option value="2">Employee</option>
                                                                <option value="4">Manager</option>
                                                            </select><button type="button" tabindex="-1"
                                                                class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                                                role="combobox" aria-owns="bs-select-5"
                                                                aria-haspopup="listbox" aria-expanded="false" data-id="role"
                                                                title="All">
                                                                <div class="filter-option">
                                                                    <div class="filter-option-inner">
                                                                        <div class="filter-option-inner-inner">All</div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                            <div class="dropdown-menu ">
                                                                <div class="inner show" role="listbox" id="bs-select-5"
                                                                    tabindex="-1">
                                                                    <ul class="dropdown-menu inner show"
                                                                        role="presentation"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="more-filter-items">
                                                <label class="f-14 text-dark-grey mb-12 " for="usr">Status</label>
                                                <div class="select-filter mb-4">
                                                    <div class="select-others">
                                                        <div class="dropdown bootstrap-select form-control select-picker">
                                                            <select class="form-control select-picker" name="status"
                                                                id="status" data-container="body">
                                                                <option value="all">All</option>
                                                                <option selected="" value="active">Active</option>
                                                                <option value="deactive">Inactive</option>
                                                            </select><button type="button" tabindex="-1"
                                                                class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                                                role="combobox" aria-owns="bs-select-6"
                                                                aria-haspopup="listbox" aria-expanded="false"
                                                                data-id="status" title="Active">
                                                                <div class="filter-option">
                                                                    <div class="filter-option-inner">
                                                                        <div class="filter-option-inner-inner">Active</div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                            <div class="dropdown-menu ">
                                                                <div class="inner show" role="listbox" id="bs-select-6"
                                                                    tabindex="-1">
                                                                    <ul class="dropdown-menu inner show"
                                                                        role="presentation"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="more-filter-items">
                                                <label class="f-14 text-dark-grey mb-12 " for="usr">Gender</label>
                                                <div class="select-filter mb-4">
                                                    <div class="select-others">
                                                        <div class="dropdown bootstrap-select form-control select-picker">
                                                            <select class="form-control select-picker" name="gender"
                                                                id="gender" data-container="body">
                                                                <option value="all">All</option>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="others">Others</option>
                                                            </select><button type="button" tabindex="-1"
                                                                class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                                                role="combobox" aria-owns="bs-select-7"
                                                                aria-haspopup="listbox" aria-expanded="false"
                                                                data-id="gender" title="All">
                                                                <div class="filter-option">
                                                                    <div class="filter-option-inner">
                                                                        <div class="filter-option-inner-inner">All</div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                            <div class="dropdown-menu ">
                                                                <div class="inner show" role="listbox" id="bs-select-7"
                                                                    tabindex="-1">
                                                                    <ul class="dropdown-menu inner show"
                                                                        role="presentation"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="more-filter-items">
                                                <label class="f-14 text-dark-grey mb-12 " for="usr">Employment Type</label>
                                                <div class="select-filter mb-4">
                                                    <div class="select-others">
                                                        <div class="dropdown bootstrap-select form-control select-picker">
                                                            <select class="form-control select-picker" name="employmentType"
                                                                id="employmentType" data-container="body">
                                                                <option value="all">All</option>
                                                                <option value="probation">On Probation</option>
                                                                <option value="internship">On Internship</option>
                                                                <option value="notice_period">On Notice Period</option>
                                                                <option value="new_hires">New Hire</option>
                                                                <option value="long_standing">Long Standing</option>

                                                            </select><button type="button" tabindex="-1"
                                                                class="btn dropdown-toggle btn-light" data-toggle="dropdown"
                                                                role="combobox" aria-owns="bs-select-8"
                                                                aria-haspopup="listbox" aria-expanded="false"
                                                                data-id="employmentType" title="All">
                                                                <div class="filter-option">
                                                                    <div class="filter-option-inner">
                                                                        <div class="filter-option-inner-inner">All</div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                            <div class="dropdown-menu ">
                                                                <div class="inner show" role="listbox" id="bs-select-8"
                                                                    tabindex="-1">
                                                                    <ul class="dropdown-menu inner show"
                                                                        role="presentation"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear-all bg-white">
                                        <button type="button" class="btn-secondary rounded f-14 p-2 float-right my-3 mr-0"
                                            id="reset-filters-2">
                                            Clear
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- MORE FILTERS END -->
                    </div>
                </form>


            </div>


            <!-- PAGE TITLE START -->
            <div class="page-title d-block d-lg-none">
                <div class="page-heading">
                    <h2 class="mb-0 pr-3 text-dark f-18 font-weight-bold d-flex align-items-center">
                        <span class="d-inline-block text-truncate mw-300">Employees</span>

                        <span class="text-lightest f-12 f-w-500 mx-2 mw-250 text-truncate">
                            <a href="dashboard.html" class="text-lightest">Home</a> •


                            Employees
                        </span>
                    </h2>
                </div>
            </div>
            <!-- PAGE TITLE END -->

            <!-- CONTENT WRAPPER START -->
            <div class="content-wrapper">
                <!-- Add Task Export Buttons Start -->
                <div class="d-flex justify-content-between action-bar">

                    <div id="table-actions" class="d-block d-lg-flex align-items-center">
                        <a href="create-4.html" class="btn btn-primary rounded f-14 p-2 mr-3 openRightModal">
                            <svg class="svg-inline--fa fa-plus fa-w-14 mr-1" aria-hidden="true" focusable="false"
                                data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                </path>
                            </svg><!-- <i class="fa fa-plus mr-1"></i> Font Awesome fontawesome.com -->
                            Add Employee
                        </a>

                        <button type="button" class="btn-secondary rounded f-14 p-2 mr-3 invite-member mb-2 mb-lg-0">
                            <svg class="svg-inline--fa fa-plus fa-w-14 mr-1" aria-hidden="true" focusable="false"
                                data-prefix="fa" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                </path>
                            </svg><!-- <i class="fa fa-plus mr-1"></i> Font Awesome fontawesome.com -->
                            Invite Employee
                        </button>

                        <a href="import-4.html"
                            class="btn btn-secondary rounded f-14 p-2 mr-3 openRightModal mb-2 mb-lg-0 d-none d-lg-block">
                            <svg class="svg-inline--fa fa-file-upload fa-w-12 mr-1" aria-hidden="true" focusable="false"
                                data-prefix="fa" data-icon="file-upload" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm65.18 216.01H224v80c0 8.84-7.16 16-16 16h-32c-8.84 0-16-7.16-16-16v-80H94.82c-14.28 0-21.41-17.29-11.27-27.36l96.42-95.7c6.65-6.61 17.39-6.61 24.04 0l96.42 95.7c10.15 10.07 3.03 27.36-11.25 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z">
                                </path>
                            </svg><!-- <i class="fa fa-file-upload mr-1"></i> Font Awesome fontawesome.com -->
                            Import
                        </a>
                    </div>

                    <form action="#" class="align-self-center" id="quick-action-form" style="display: none">
                        <input type="hidden" name="_token" value="8tzOEL4nT9Bva1qlJPL4LXVNFcMhCFO0mGtqX3fh"
                            autocomplete="off">
                        <div class="d-flex align-items-center justify-content-end" id="quick-actions">
                            <div class="select-status mr-3 pl-3">
                                <div class="dropdown bootstrap-select disabled form-control select-picker"><select
                                        name="action_type" class="form-control select-picker" id="quick-action-type"
                                        disabled="">
                                        <option value="">No Action</option>
                                        <option value="change-status">Change Status</option>
                                        <option value="delete">Delete</option>
                                    </select><button type="button" tabindex="-1"
                                        class="btn dropdown-toggle disabled btn-light bs-placeholder" data-toggle="dropdown"
                                        role="combobox" aria-owns="bs-select-9" aria-haspopup="listbox"
                                        aria-expanded="false" data-id="quick-action-type" aria-disabled="true"
                                        title="No Action">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">No Action</div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-9" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="select-status mr-3 d-none quick-action-field" id="change-status-action">
                                <div class="dropdown bootstrap-select form-control select-picker"><select name="status"
                                        class="form-control select-picker">
                                        <option value="deactive">Inactive</option>
                                        <option value="active">Active</option>
                                    </select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light"
                                        data-toggle="dropdown" role="combobox" aria-owns="bs-select-10"
                                        aria-haspopup="listbox" aria-expanded="false" title="Inactive">
                                        <div class="filter-option">
                                            <div class="filter-option-inner">
                                                <div class="filter-option-inner-inner">Inactive</div>
                                            </div>
                                        </div>
                                    </button>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-10" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="select-status">
                                <button type="button" disabled="" class="btn-primary rounded f-14 p-2"
                                    id="quick-action-apply">
                                    Apply
                                </button>

                                <input type="search" class="autocomplete-password" style="opacity: 0;position: absolute;"
                                    autocomplete="off">
                                <input type="password" class="autocomplete-password" style="opacity: 0;position: absolute;"
                                    autocomplete="off">
                                <input type="email" name="f_email" class="autocomplete-password" readonly=""
                                    style="opacity: 0;position: absolute;" autocomplete="off">
                                <input type="text" name="f_slack_username" class="autocomplete-password" readonly=""
                                    style="opacity: 0;position: absolute;" autocomplete="off">


                            </div>
                        </div>

                    </form>

                </div>
                <!-- Add Task Export Buttons End -->
                <!-- Task Box Start -->
                <div class="d-flex flex-column w-tables rounded mt-3 bg-white table-responsive">




                    <div id="employees-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-hover border-0 w-100 dataTable no-footer" id="employees-table"
                                    role="grid" aria-describedby="employees-table_info" style="width: 1327px;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label=""
                                                style="width: 29px;"><input type="checkbox" name="select_all_table"
                                                    id="select-all-table" onclick="selectAllTable(this)" autocomplete="off">
                                            </th>
                                            <th title="Employee ID" class="sorting" tabindex="0"
                                                aria-controls="employees-table" rowspan="1" colspan="1"
                                                aria-label="Employee ID: activate to sort column ascending"
                                                style="width: 121px;">Employee ID</th>
                                            <th title="Name" class="sorting" tabindex="0" aria-controls="employees-table"
                                                rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 268px;">Name</th>
                                            <th title="Email" class="sorting" tabindex="0" aria-controls="employees-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Email: activate to sort column ascending" style="width: 156px;">
                                                Email</th>
                                            <th width="20%" title="User Role" class="sorting_disabled" rowspan="1"
                                                colspan="1" aria-label="User Role" style="width: 253px;">User Role</th>
                                            <th title="Reporting To" class="sorting" tabindex="0"
                                                aria-controls="employees-table" rowspan="1" colspan="1"
                                                aria-label="Reporting To: activate to sort column ascending"
                                                style="width: 122px;">Reporting To</th>
                                            <th title="Status" class="sorting" tabindex="0" aria-controls="employees-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending" style="width: 69px;">
                                                Status</th>
                                            <th title="Action" class="text-right pr-20 sorting_disabled" rowspan="1"
                                                colspan="1" aria-label="Action" style="width: 65px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr id="row-1" role="row" class="odd">
                                            <td>--</td>
                                            <td><a href="https://demo.worksuite.biz/account/employees/1"
                                                    class="text-darkest-grey">EMP-1</a></td>
                                            <td>
                                                <div class="media align-items-center mw-250">

                                                    <a href="https://demo.worksuite.biz/account/employees/1"
                                                        class="position-relative ">
                                                        <img src="https://i.pravatar.cc/300?u=admin@example.com"
                                                            class="mr-2 taskEmployeeImg rounded-circle"
                                                            alt="Mrs. Liana Vandervort" title="Mrs. Liana Vandervort">
                                                    </a>
                                                    <div class="media-body active text-truncate">

                                                        <h5 class="mb-0 f-12">
                                                            <a href="https://demo.worksuite.biz/account/employees/1"
                                                                class="text-darkest-grey ">Mrs. Liana Vandervort <span
                                                                    class="ml-1 badge badge-secondary pr-1">It's
                                                                    you</span></a>
                                                        </h5>
                                                        <p class="mb-0 f-12 text-dark-grey">
                                                            Project Manager
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>admin@example.com</td>
                                            <td>App Administrator <svg data-toggle="tooltip"
                                                    data-original-title="To change the role of this user, You need to assign the same role to some other user and then login as that user to change it"
                                                    class="svg-inline--fa fa-info-circle fa-w-16" aria-hidden="true"
                                                    focusable="false" data-prefix="fa" data-icon="info-circle" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z">
                                                    </path>
                                                </svg><!-- <i data-toggle="tooltip" data-original-title="To change the role of this user, You need to assign the same role to some other user and then login as that user to change it" class="fa fa-info-circle"></i> Font Awesome fontawesome.com -->
                                            </td>
                                            <td>--</td>
                                            <td><svg class="svg-inline--fa fa-circle fa-w-16 mr-1 text-light-green f-10"
                                                    aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle"
                                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                    data-fa-i2svg="">
                                                    <path fill="currentColor"
                                                        d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                    </path>
                                                </svg><!-- <i class="fa fa-circle mr-1 text-light-green f-10"></i> Font Awesome fontawesome.com -->Active
                                            </td>
                                            <td class=" text-right pr-20">
                                                <div class="task_view">

                                                    <div class="dropdown">
                                                        <a class="task_view_more d-flex align-items-center justify-content-center dropdown-toggle"
                                                            type="link" id="dropdownMenuLink-1" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <i class="icon-options-vertical icons"></i>
                                                        </a>

                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuLink-1" tabindex="0"
                                                            x-placement="top-end"
                                                            style="display: none; position: absolute; top: 0px; left: 0px; transform: translate3d(1411px, 187px, 0px); will-change: transform;">
                                                            <a href="https://demo.worksuite.biz/account/employees/1"
                                                                class="dropdown-item"><svg
                                                                    class="svg-inline--fa fa-eye fa-w-18 mr-2"
                                                                    aria-hidden="true" focusable="false" data-prefix="fa"
                                                                    data-icon="eye" role="img"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                                    data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                                                    </path>
                                                                </svg><!-- <i class="fa fa-eye mr-2"></i> Font Awesome fontawesome.com -->View</a><a
                                                                class="dropdown-item openRightModal"
                                                                href="https://demo.worksuite.biz/account/employees/1/edit">
                                                                <svg class="svg-inline--fa fa-edit fa-w-18 mr-2"
                                                                    aria-hidden="true" focusable="false" data-prefix="fa"
                                                                    data-icon="edit" role="img"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                                                    data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z">
                                                                    </path>
                                                                </svg><!-- <i class="fa fa-edit mr-2"></i> Font Awesome fontawesome.com -->
                                                                Edit
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div id="employees-table_processing" class="dataTables_processing card"
                                    style="display: none;">Processing...</div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <div class="dataTables_length" id="employees-table_length"><label>Show <select
                                            name="employees-table_length" aria-controls="employees-table"
                                            class="custom-select custom-select-sm form-control form-control-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div>
                                <div class="dataTables_info" id="employees-table_info" role="status" aria-live="polite">
                                    Showing 1 to 1 of 1 entries</div>
                            </div>
                            <div>
                                <div class="dataTables_paginate paging_simple_numbers" id="employees-table_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="employees-table_previous"><a href="#" aria-controls="employees-table"
                                                data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="employees-table" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item next disabled" id="employees-table_next"><a
                                                href="#" aria-controls="employees-table" data-dt-idx="2" tabindex="0"
                                                class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
                <!-- Task Box End -->
            </div>
            <!-- CONTENT WRAPPER END -->



        </section>
        <!-- MAIN CONTAINER END -->
    </div>
    <!-- BODY WRAPPER END -->
@endsection