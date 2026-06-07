@extends('admin.master')

@section('content')


    <!-- BODY WRAPPER START -->
    <div class="clearfix body-wrapper">

        <!-- MAIN CONTAINER START -->
        <section class="mb-5 main-container bg-additional-grey mb-sm-0" id="fullscreen">

            <!-- CONTENT WRAPPER START -->
            <div class="content-wrapper">

                <!-- Add Task Export Buttons Start -->
                <div class="d-grid d-lg-flex d-md-flex action-bar">
                    <div id="table-actions" class="flex-grow-1 align-items-center">
                        <a href="{{ route('admin.leaves.create') }}"
                            class="btn btn-primary rounded f-14 p-2 mr-3 openRightModal float-left">
                            <i class="fa fa-plus mr-1"></i>
                            New Leave
                        </a>
                        <button type="button" class="btn-secondary rounded f-14 p-2 mr-3 mb-2 mb-lg-0" id="export-all">
                            <i class="fa fa-file-export mr-1"></i>
                            Export
                        </button>
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>

                <!-- leave table Box Start -->
                <div class="d-flex flex-column w-tables rounded mt-3 bg-white">

                    <table class="table table-hover border-0 w-100" id="leaves-table">
                        <thead>
                            <tr>
                                <th
                                    title="&lt;input type=&quot;checkbox&quot; name=&quot;select_all_table&quot; id=&quot;select-all-table&quot; onclick=&quot;selectAllTable(this)&quot;&gt;">
                                    <input type="checkbox" name="select_all_table" id="select-all-table"
                                        onclick="selectAllTable(this)">
                                </th>
                                <th title="#">#</th>
                                <th title="Id">Id</th>
                                <th title="Employee Name">Employee Name</th>
                                <th title="Email">Email</th>
                                <th title="Leave Date">Leave Date</th>
                                <th title="Duration">Duration</th>
                                <th title="Leave Status">Leave Status</th>
                                <th title="Leave Type">Leave Type</th>
                                <th title="Paid">Paid</th>
                                <th title="Action">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($leaves as $leave)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="select_all_table" id="select-all-table"
                                            onclick="selectAllTable(this)">
                                    </td>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $leave->id }}</td>
                                    <td><img class="avatar-img rounded-circle w-10 h-10 mr-2"
                                            src="{{ $leave->employee?->user?->hasMedia('profile_picture') ? $leave->employee?->user?->getFirstMediaUrl('profile_picture') : asset('images/default-avatar.png') }}">{{ $leave->employee?->user?->name }}
                                    </td>
                                    <td>{{ $leave->employee?->user?->email }}</td>
                                    <td>{{ $leave->duration_dates }}</td>
                                    <td>{{ $leave->duration }}</td>
                                    <td>{{ $leave->status }}</td>
                                    <td>
                                        <p class="bg-success text-white rounded text-center my-2">
                                            {{ $leave->leave_type?->type_name }}
                                        </p>
                                    </td>
                                    <td>{{ $leave->paid }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- leave table End -->

            </div>
            <!-- CONTENT WRAPPER END -->

        </section>
        <!-- MAIN CONTAINER END -->
    </div>
    <!-- BODY WRAPPER END -->
@endsection