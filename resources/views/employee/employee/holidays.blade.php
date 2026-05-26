@extends('employee.master')

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
                <form action="" id="filter-form">
                    <div class="d-lg-flex d-md-flex d-block flex-wrap filter-box bg-white client-list-filter">
                        <!-- CLIENT START -->
                        <div class="select-box py-2 d-flex pr-2 border-right-grey border-right-grey-sm-0">
                            <p class="mb-0 pr-2 f-14 text-dark-grey d-flex align-items-center">Employees All Informations</p>

                        </div>

                        <!-- CLIENT END -->

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


            <!-- CONTENT WRAPPER START -->
            <div class="content-wrapper">

<h1>Holidays Informations</h1>
            
            </div>
            <!-- CONTENT WRAPPER END -->



        </section>
        <!-- MAIN CONTAINER END -->
    </div>
    <!-- BODY WRAPPER END -->
@endsection