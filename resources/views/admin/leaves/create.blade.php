@extends('admin.master')

@section('content')

    <!-- BODY WRAPPER START -->
    <div class="clearfix body-wrapper">


        <!-- MAIN CONTAINER START -->
        <section class="mb-5 main-container bg-additional-grey mb-sm-0" id="fullscreen">


            <div class="content-wrapper">

                <div class="row">
                    <div class="col-sm-12">

                        <div class="add-client bg-white rounded">
                            <div class="row p-20">

                                <div class="col-lg-6 col-md-6">
                                    <h4 class="mb-0 p-20 f-21 font-weight-normal  border-bottom-grey">
                                        Assign Leave</h4>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <a href="{{ route('admin.leaves') }}"
                                        class="btn btn-primary rounded f-14 p-2 mr-3 openRightModal float-right">
                                        <i class="fa fa-arrow-left mr-1"></i>
                                        Back to Leaves
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-client bg-white rounded">
                    <form method="POST" action="{{ route('admin.leaves.store') }}" id="save-lead-data-form"
                        autocomplete="off">
                        @csrf
                        <div class="row p-20">

                            <!-- Select Employee -->
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="true" for="employee_id">Choose
                                    Member
                                    <sup class="f-14 mr-1">*</sup>

                                </label>
                                <div class="form-group mb-0">

                                    <select name="employee_id" id="employee_id" data-live-search="true"
                                        class="form-control select-picker" data-size="8">
                                        <option value=""> -- Select Employee -- </option>
                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">
                                                {{ $employee->user->name }}
                                            </option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>

                            <!-- Leave Types -->
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="true" for="leave_type">Leave
                                    Type
                                    <sup class="f-14 mr-1">*</sup>

                                </label>
                                <div class="input-group">

                                    <select class="form-control select-picker" name="leave_type" id="leave_type">

                                        <!-- Leave Type Dropdown -->
                                        <option selected="selected" disabled> -- Leave Type -- </option>

                                        @foreach ($leave_types as $leave_type)
                                            <option value="{{ $leave_type->id }}">{{ $leave_type->type_name }}</option>
                                        @endforeach

                                    </select>

                                </div>
                            </div>

                            <!-- Status -->
                            <div class="col-lg-4 col-md-6">
                                <label class="f-14 text-dark-grey mb-12 mt-3" data-label="" for="status">Status

                                </label>
                                <div class="form-group mb-0">

                                    <select name="status" id="status" data-live-search="true"
                                        class="form-control select-picker" data-size="8">
                                        <option value="pending">Pending</option>
                                        <option value="approved">Approved</option>
                                        <option value="rejected">Rejected</option>
                                    </select>

                                </div>
                            </div>

                            <!-- Duration -->
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group my-3">
                                    <label class="f-14 text-dark-grey mb-12 w-100" for="usr">Select
                                        Duration</label>
                                    <div class="d-block d-lg-flex d-md-flex">
                                        <div class="form-check-inline custom-control custom-radio mt-2 mr-3">
                                            <input type="radio" value="single" class="custom-control-input"
                                                id="duration_single" name="duration" checked />
                                            <label class="custom-control-label pt-1 cursor-pointer"
                                                for="duration_single">Full Day</label>
                                        </div>
                                        <div class="form-check-inline custom-control custom-radio mt-2 mr-3">
                                            <input type="radio" value="multiple" class="custom-control-input"
                                                id="duration_multiple" name="duration" />
                                            <label class="custom-control-label pt-1 cursor-pointer"
                                                for="duration_multiple">Multiple</label>
                                        </div>

                                        <div class="form-check-inline custom-control custom-radio mt-2 mr-3">
                                            <input type="radio" value="first_half" class="custom-control-input"
                                                id="half_day_first" name="duration" />
                                            <label class="custom-control-label pt-1 cursor-pointer"
                                                for="half_day_first">First Half</label>
                                        </div>
                                        <div class="form-check-inline custom-control custom-radio mt-2 mr-3">
                                            <input type="radio" value="second_half" class="custom-control-input"
                                                id="half_day_second" name="duration" />
                                            <label class="custom-control-label pt-1 cursor-pointer"
                                                for="half_day_second">Second Half</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Duration Dates -->
                            <div class="col-lg-4 col-md-6 multi_date_div">
                                <div class="my-3">
                                    <label class="f-14 text-dark-grey mb-2" data-label="" for="duration_dates">Duration Date
                                        <input type="date" class="form-control height-35 f-14" placeholder="Date"
                                            value="{{ date('Y-m-d') }}" name="duration_dates" id="duration_dates">
                                    </label>

                                </div>
                            </div>



                            <div class="col-lg-4 col-md-6 date-range-days mt-5">
                                <p id="users" class="mt-2 badge badge-secondary"></p>

                            </div>
                            <div class="col-md-12">
                                <div class="form-group my-3">
                                    <div class="form-group my-3 mr-0 mr-lg-2 mr-md-2">
                                        <label class="f-14 text-dark-grey mb-12" data-label="true" for="reason">Reason
                                            for absence
                                            <sup class="f-14 mr-1">*</sup>

                                        </label>

                                        <textarea class="form-control f-14 pt-2" rows="3"
                                            placeholder="e.g. Feeling not well" name="reason" id="reason"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group my-3 mr-0 mr-lg-2 mr-md-2">
                                    <label class="f-14 text-dark-grey mb-12" data-label=""
                                        for="leave-file-upload-dropzone">Add File

                                        <i class="fa fa-question-circle" data-toggle="popover" data-placement="top"
                                            data-content="You can attach the receipt of the prescription, doctor visit or travel document etc"
                                            data-html="true" data-trigger="hover"></i>
                                    </label>

                                    <div id="file-upload-box">
                                        <div class="row" id="file-dropzone">
                                            <div class="col-md-12">
                                                <div class="dropzone rounded border" id="leave-file-upload-dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <input type="hidden" name="leaveIds[]" id="leaveID">
                            </div>



                            <div class="w-100 border-top-grey d-block d-lg-flex d-md-flex justify-content-start px-4 py-3">
                                <button type="submit" class="btn-primary rounded f-14 p-2 mr-3" id="save-leave-form">
                                    <i class="fa fa-check mr-1"></i>
                                    Submit
                                </button>

                                <a href="{{ route('admin.leaves') }}" class="btn-cancel rounded f-14 p-2 border-0">
                                    Cancel to Back
                                </a>
                            </div>


                        </div>
                    </form>

                </div>
            </div>



@endsection