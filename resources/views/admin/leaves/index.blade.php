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
                                <th title="Employee">Employee</th>
                                <th title="Employee">Employee</th>
                                <th title="Leave Date">Leave Date</th>
                                <th title="Duration">Duration</th>
                                <th title="Leave Status">Leave Status</th>
                                <th title="Leave Type">Leave Type</th>
                                <th title="Paid">Paid</th>
                                <th title="Action">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="checkbox" name="select_all_table" id="select-all-table"
                                        onclick="selectAllTable(this)">
                                </td>
                                <td>1</td>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>[EMAIL_ADDRESS]</td>
                                <td>2022-01-01</td>
                                <td>1 day</td>
                                <td>Approved</td>
                                <td>Sick Leave</td>
                                <td>Yes</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
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