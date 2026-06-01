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
                            Employees
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
                                            <th title="Name" class="sorting" tabindex="0" aria-controls="employees-table"
                                                rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 268px;">Email</th>
                                            <th title="Email" class="sorting" tabindex="0" aria-controls="employees-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Email: activate to sort column ascending" style="width: 156px;">
                                                Designation</th>
                                            <th width="20%" title="User Role" class="sorting_disabled" rowspan="1"
                                                colspan="1" aria-label="User Role" style="width: 253px;">Status</th>
                                            <th title="Status" class="sorting" tabindex="0" aria-controls="employees-table"
                                                rowspan="1" colspan="1"
                                                aria-label="Status: activate to sort column ascending" style="width: 69px;">
                                                Action</th>
                                            <th title="Action" class="text-right pr-20 sorting_disabled" rowspan="1"
                                                colspan="1" aria-label="Action" style="width: 65px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($employees as $employee)
                                            <tr id="row-1" role="row" class="odd">
                                                <td>--</td>
                                                <td><a href="#" class="text-darkest-grey">EMP-{{ $employee->id }}</a></td>
                                                <td>
                                                    <div class="media align-items-center mw-250">

                                                        <a href="#" class="position-relative ">
                                                            @php
                                                                $avatar = $employee->user?->getFirstMediaUrl()
                                                                    ?: asset('assets/png/avatar.png');
                                                            @endphp
                                                            <img src="{{ $avatar }}" class="mr-2 taskEmployeeImg rounded-circle"
                                                                alt="{{ $employee->user->name ?? 'Employee' }}"
                                                                title="{{ $employee->user->name ?? 'Employee' }}">
                                                        </a>
                                                        <div class="media-body active text-truncate">
                                                            <p class="mb-0 f-12 text-dark-grey">
                                                                {{ $employee->user->name ?? 'N/A' }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $employee->user->email ?? 'N/A' }}</td>
                                                <td>
                                                    <p>{{ $employee->designation->designation_name ?? 'N/A' }}
                                                    </p>
                                                </td>
                                                <td><svg class="svg-inline--fa fa-circle fa-w-16 mr-1 text-light-green f-10"
                                                        aria-hidden="true" focusable="false" data-prefix="fa" data-icon="circle"
                                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                        data-fa-i2svg="">
                                                        <path fill="currentColor"
                                                            d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z">
                                                        </path>
                                                    </svg>
                                                    {{-- Employee Status --}}
                                                    @if ($employee->status == 1)
                                                        <span class="text-light-green">Active</span>
                                                    @else
                                                        <span class="text-light-red">Inactive</span>
                                                    @endif
                                                </td>
                                                <td class=" text-right pr-20">
                                                    <div class="task_view">

                                                        <div class="dropdown show">
                                                            <a class="task_view_more d-flex align-items-center justify-content-center dropdown-toggle"
                                                                type="link" id="dropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="icon-options-vertical icons"></i>
                                                            </a>

                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('admin.employee.show', $employee->id) }}"><i
                                                                        class="bx bx-eye"></i>View</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('admin.employee.edit', $employee->id) }}"><i
                                                                        class="bx bx-edit"></i>Edit</a>
                                                                <a href="javascript:void(0)"
                                                                    class="btn btn-danger py-1 px-4 link-light"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#deleteModal{{ $employee->id }}"><i
                                                                        class="bx bx-trash"></i>Delete</a>
                                                            </div>
                                                            <form action="{{ route('admin.employee.destroy', $employee->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="deleteModal{{ $employee->id }}"
                                                                    tabindex="-1"
                                                                    aria-labelledby="deleteModalLabel{{ $employee->id }}"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5"
                                                                                    id="deleteModalLabel{{ $employee->id }}">
                                                                                    Delete
                                                                                    User
                                                                                </h1>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>

                                                                            <!-- This current user delete -->
                                                                            <div class="modal-body">
                                                                                <p class="text-start">Are you sure you want to
                                                                                    delete
                                                                                    <span
                                                                                        class="fw-bold">{{ $employee->user->name ?? 'N/A' }}</span>
                                                                                    this employee?
                                                                                </p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-primary"
                                                                                    data-bs-dismiss="modal">No</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-danger">Yes</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div id="employees-table_processing" class="dataTables_processing card"
                                    style="display: none;">Processing...</div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between px-3 py-2">
                            <div>
                                <div class="dataTables_info" id="employees-table_info" role="status" aria-live="polite">
                                    Showing {{ $employees->firstItem() ?? 0 }} to {{ $employees->lastItem() ?? 0 }}
                                    of {{ $employees->total() }} entries
                                </div>
                            </div>
                            <div>
                                {{ $employees->links() }}
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