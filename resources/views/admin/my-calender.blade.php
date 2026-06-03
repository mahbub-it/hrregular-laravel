@extends('admin.master')

@section('content')

    <div>
        <h1>My Calender</h1>
    </div>
    <!-- also the modal itself -->
    <div id="myModalDefault" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center align-items-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelHeading">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    Loading...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-cancel rounded mr-3" data-dismiss="modal">Close</button>
                    <button type="button" class="btn-primary rounded">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- also the modal itself -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center align-items-center modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelHeading">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    Loading...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-cancel rounded mr-3" data-dismiss="modal">Close</button>
                    <button type="button" class="btn-primary rounded">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- also the modal itself -->
    <div id="myModalXl" class="modal fade overflow-auto" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center align-items-center modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelHeading">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body bg-grey">
                    Loading...
                </div>

            </div>
        </div>
    </div>

    <!-- Task Detail Start -->
    <div class="task-overlay w-100 h-100" id="close-task-detail-overlay"></div>
    <div class="task-detail-panel bg-additional-grey" id="task-detail-1">
        <a class="close-task-detail" id="close-task-detail" style="display: none;">
            <span><i class="fa fa-times"></i></span>
        </a>
        <div class="p-4 t-d-inner-panel">
            <h3 class="heading-h1 mb-0" id="right-modal-title"></h3>

            <div id="right-modal-content" class="mt-4 mb-5">

            </div>
        </div>
    </div>

@endsection