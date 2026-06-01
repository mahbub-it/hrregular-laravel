@extends('admin.master')

@section('content')


    <!-- BODY WRAPPER START -->
    <div class="clearfix body-wrapper mt-0 p-5">


        <!-- MAIN CONTAINER START -->
        <section class="mb-0 mt-0 p-5 pb-0 main-container bg-additional-grey" id="fullscreen">

            <h4 class="mb-3 text-darkest-grey py-3">Profile Details of <span
                    class="text-darkest-grey fst-italic fw-bold">{{ $employee->user->name }}</span></h4>

            <div class="d-lg-flex">

                <div class="w-100 py-0 py-lg-3 py-md-0">
                    <!-- ROW START -->
                    <div class="row">
                        <!--  USER CARDS START -->
                        <div class="col-lg-12 col-md-12 mb-4 mb-xl-0 mb-lg-4 mb-md-0">
                            <div class="row">
                                <div class="col-xl-7 col-md-6 mb-4 mb-lg-0">

                                    <div class="card border-0 b-shadow-4">
                                        <div class="card-horizontal align-items-center">
                                            <div class="card-img w-33 h-33">
                                                <img class="w-33 h-33 rounded-circle"
                                                    src="{{ $employee->user->hasMedia('profile_picture') ? $employee->user->getFirstMediaUrl('profile_picture') : asset('images/default-avatar.png') }}"
                                                    alt="{{ $employee->user->name }}">
                                            </div>
                                            <div class="card-body border-0 pl-0">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <h4 class="card-title f-15 f-w-500 text-darkest-grey mb-0">
                                                            {{ $employee->user->name }}
                                                        </h4>
                                                    </div>
                                                    <div class="col-2 text-right">
                                                        <div class="dropdown">
                                                            <button
                                                                class="btn f-14 px-0 py-0 text-dark-grey dropdown-toggle"
                                                                type="button" data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa fa-ellipsis-h"></i>
                                                            </button>

                                                            <div class="dropdown-menu dropdown-menu-right border-grey rounded b-shadow-4 p-0"
                                                                aria-labelledby="dropdownMenuLink" tabindex="0">
                                                                <a class="dropdown-item openRightModal"
                                                                    href="{{ route('admin.users.edit', $employee->user->id) }}">Edit</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <p class="f-12 font-weight-normal text-dark-grey mb-0">
                                                    {{ $employee->designation->designation_name }}
                                                    &bull;

                                                    <span class="card-text f-12 text-dark-grey m-lg-2">| User Role:
                                                        {{ $employee->user->role }}
                                                    </span>
                                                </p>

                                                <div class="card-footer bg-white border-top-grey pl-0">
                                                    <div class="d-flex flex-wrap justify-content-between">
                                                        <span>
                                                            <label class="f-11 text-dark-grey mb-12 " for="usr">Open
                                                                Tasks</label>
                                                            <p class="mb-0 f-18 f-w-500">3</p>
                                                        </span>
                                                        <span>
                                                            <label class="f-11 text-dark-grey mb-12 "
                                                                for="usr">Projects</label>
                                                            <p class="mb-0 f-18 f-w-500">6</p>
                                                        </span>
                                                        <span>
                                                            <label class="f-11 text-dark-grey mb-12 " for="usr">Hours
                                                                Logged</label>
                                                            <p class="mb-0 f-18 f-w-500">0</p>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="card bg-white border-0 b-shadow-4 mt-4">
                                        <div class="card-header bg-white border-0  d-flex justify-content-between pt-4">
                                            <h4 class="f-18 f-w-500 mb-0">About</h4>
                                        </div>

                                        <div class="card-body pt-2 ">
                                            <div>{{ $employee->about }}</div>
                                        </div>
                                    </div>


                                    <div class="card bg-white border-0 b-shadow-4  mt-4">
                                        <div class="card-header bg-white border-0  d-flex justify-content-between pt-4">
                                            <h4 class="f-18 f-w-500 mb-0">Profile Info</h4>



                                        </div>

                                        <div class="card-body pt-2 ">
                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Employee ID</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    EMP-{{ $employee->id }}</p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Full Name</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    {{ $employee->user->name }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Designation</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    {{ $employee->designation->designation_name }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Department</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    {{ $employee->department->department_name }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-block d-lg-flex d-md-flex">
                                                <p class="mb-0 text-lightest f-14 w-30 d-inline-block ">
                                                    Gender</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70">
                                                    <i class="bi bi-gender-male"></i>{{ $employee->gender }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Date of Birth</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    {{ $employee->birth_date }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Email</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    {{ $employee->user->email }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Mobile</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">{{ $employee->mobile }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Slack User Name</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    {{ $employee->slack_username }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Hourly Rate</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    ${{ floor($employee->hourly_rate) }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Address</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">{{ $employee->address }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Skills</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    {{ $employee->skills }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Language</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    {{ $employee->language->language_name }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Country</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    {{ $employee->country->country_name }}
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Employee Status</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    @if ($employee->status == 1)
                                                        <span class="text-success">Active</span>
                                                    @else
                                                        <span class="text-danger">Inactive</span>
                                                    @endif
                                                </p>
                                            </div>

                                            <div class="col-12 px-0 pb-3 d-lg-flex d-md-flex d-block">
                                                <p class="mb-0 text-lightest f-14 w-30  ">Joining Date</p>
                                                <p class="mb-0 text-dark-grey f-14 w-70 text-wrap ">
                                                    {{ $employee->joining_date }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xl-5 col-lg-6 col-md-6">

                                    <div class="card bg-white border-0 b-shadow-4 mb-4">
                                        <div class="card-header bg-white border-0  d-flex justify-content-between pt-4">
                                            <h4 class="f-18 f-w-500 mb-0">Appreciation</h4>

                                        </div>

                                        <div class="card-body pt-2 ">
                                            <div class="align-items-center d-flex flex-column text-lightest p-20 w-100">
                                                <i class="fa fa-medal f-21 w-100"></i>

                                                <div class="f-15 mt-4">
                                                    - No record found. -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card bg-white border-0 b-shadow-4 mb-4">

                                        <div class="card-body ">
                                            <div class="d-flex justify-content-between">


                                                <div class="col-12">
                                                    <p class="f-14 text-dark-grey">Reporting Team</p>
                                                    --
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-6 col-sm-12 mb-4">
                                            <div
                                                class="bg-white p-20 rounded b-shadow-4 d-flex justify-content-between align-items-center">
                                                <div class="d-block ">
                                                    <h5 class="f-15 f-w-500 mb-20 text-darkest-grey">Late Attendance
                                                        <i class="fa fa-question-circle" data-toggle="popover"
                                                            data-placement="top" data-content="This Month" data-html="true"
                                                            data-trigger="hover"></i>
                                                    </h5>
                                                    <div class="d-flex">
                                                        <p class="mb-0 f-15 font-weight-bold text-blue text-primary d-grid">
                                                            <span id="">0</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="d-block">
                                                    <i class="fa fa-map-marker-alt text-lightest f-18"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-12 mb-4">
                                            <div
                                                class="bg-white p-20 rounded b-shadow-4 d-flex justify-content-between align-items-center">
                                                <div class="d-block ">
                                                    <h5 class="f-15 f-w-500 mb-20 text-darkest-grey">Leaves Taken
                                                        <i class="fa fa-question-circle" data-toggle="popover"
                                                            data-placement="top" data-content="This Month" data-html="true"
                                                            data-trigger="hover"></i>
                                                    </h5>
                                                    <div class="d-flex">
                                                        <p class="mb-0 f-15 font-weight-bold text-blue text-primary d-grid">
                                                            <span id="">0</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="d-block">
                                                    <i class="fa fa-sign-out-alt text-lightest f-18"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="card bg-white border-0 b-shadow-4 pb-3">
                                                <div
                                                    class="card-header bg-white border-0  d-flex justify-content-between pt-4">
                                                    <h4 class="f-18 f-w-500 mb-0">Tasks</h4>



                                                </div>

                                                <div class="card-body p-0 ">

                                                    <div class="m-auto" style="height: 250px; width: 250px">
                                                        <canvas id="task-chart" height="250" width="250"></canvas>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--  USER CARDS END -->

                        </div>
                        <!-- ROW END -->
                    </div>
                </div>
            </div>


        </section>
        <!-- MAIN CONTAINER END -->
    </div>


@endsection