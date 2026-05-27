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
                        <!-- Employee filter Start -->
                        <div class="select-box py-2 d-flex pr-2 border-right-grey border-right-grey-sm-0">
                            <p class="mb-0 pr-2 f-14 text-dark-grey d-flex align-items-center">Employee</p>

                        </div>



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
                                        </svg>
                                    </span>
                                </div>
                                <input type="text" class="form-control f-14 p-1 border-additional-grey"
                                    id="search-text-field" placeholder="Start typing to search" autocomplete="off">
                            </div>

                        </div>
                        <!-- SEARCH BY TASK END -->
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
                            Employees Informations
                        </span>
                    </h2>
                </div>
            </div>
            <!-- PAGE TITLE END -->

            <!-- CONTENT WRAPPER START -->
            <div class="content-wrapper">

                <!-- Task Box Start -->
                <div class="d-flex flex-column w-tables rounded mt-3 bg-white table-responsive">

                    <div id="employees-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="table-responsive">
                                    <!-- Single Employee Information -->
                                    <h1>{{ $employee->first_name }} {{ $employee->last_name }}</h1>
                                    <p>Email: {{ $employee->email }}</p>
                                    <p>Phone: {{ $employee->phone }}</p>
                                    <p>Address: {{ $employee->address }}</p>
                                    <p>City: {{ $employee->city }}</p>
                                    <p>State: {{ $employee->state }}</p>
                                    <p>Zip: {{ $employee->zip }}</p>
                                    <p>Country: {{ $employee->country }}</p>
                                    <p>Status: {{ $employee->status }}</p>
                                    <p>Created At: {{ $employee->created_at }}</p>
                                    <p>Updated At: {{ $employee->updated_at }}</p>
                                </div>
                                <div id="employees-table_processing" class="dataTables_processing card"
                                    style="display: none;">Processing...</div>
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