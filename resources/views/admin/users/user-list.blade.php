@extends('admin.master')

@section('content')

    <div class="bg-light">
        <div class="container mt-4">
            <div class="row row-cols-1">
                <form class="container-fluid" action="" method="GET">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1" name="user">
                    </div>
                </form>
            </div>

            <div class="container mt-2">
                <div class="row row-cols-1">
                    @if ($users->count() <= 0)
                        <p class="alert alert-warning m-auto text-center">
                            Sorry, No User Found!
                        </p>
                    @endif
                </div>
            </div>
            <!-- sesion success message -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <!-- error message -->
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

        </div>

    </div>

    <div class="bg-light"></div>
    <div class="container py-2">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

            @php
                $colors = ['primary', 'warning', 'success', 'danger', 'warning', 'info'];
            @endphp

            @foreach ($users as $user)

                <!-- Card 1 -->
                <div class="col">
                    <!-- p-3 for padding, border-0.5 and shadow-sm for the clean look -->
                    <div class="card h-100 border-0.5 shadow-sm p-3 position-relative overflow-hidden">

                        <!-- Large Background Number using text-multi colors with opacity -->
                        <span
                            class="position-absolute top-0 end-0 pe-3 fw-bolder display-5 opacity-10 text-{{ $colors[$loop->index % count($colors)] }}"
                            style="z-index: 0; line-height: 1;">
                            {{ $user->id }}
                        </span>

                        <div class="text-center position-relative" style="z-index: 1;">
                            <div class="avatars p-3">
                                <!-- Appending Profile Image -->
                                <img class="rounded-circle object-fit-cover" style="width: 200px; height: 200px;"
                                    src="{{ $user->hasMedia('profile_picture') ? $user->getFirstMediaUrl('profile_picture') : asset('images/default-avatar.png') }}"
                                    alt="User Image">
                            </div>

                            <!-- Verified Badge using bg-info -->
                            <div class="bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 24px; height: 24px; font-size: 0.7rem;">
                                <i class="bi bi-check-lg"></i>
                            </div>

                            <h5 class="card-title fw-bold mb-1">{{ $user->name }}</h5>
                            <p class="text-muted small fw-bold mb-3">Designation</p>

                            <!-- Contact Info -->
                            <div class="text-center py-1 justify-content-center align-items-center">
                                <p class="text-muted"><i class="bi bi-envelope-fill opacity-50"></i>
                                    {{ $user->email }}</p>
                            </div>
                        </div>

                        <!-- Action Buttons for Edit and Delete -->

                        <div class=" text-center action-buttons justify-content-center align-items-center">

                            <a href="{{ route('admin.users.edit', $user->id) }}"
                                class="btn btn-primary py-1 px-4 link-light">Edit</a>

                            <a href="javascript:void(0)" class="btn btn-danger py-1 px-4 link-light" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{ $user->id }}">Delete</a>

                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{ $user->id }}" tabindex="-1"
                                    aria-labelledby="deleteModalLabel{{ $user->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteModalLabel{{ $user->id }}">Delete User
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>

                                            <!-- This current user delete -->
                                            <div class="modal-body">
                                                Are you sure you want to delete {{ $user->name }} this user?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary"
                                                    data-bs-dismiss="modal">No</button>
                                                <button type="submit" class="btn btn-danger">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>



                        <!-- Footer Button using multi colors -->
                        <div class="card-footer bg-transparent border-0 p-0 pt-3">
                            <button
                                class="btn btn-{{ $colors[$loop->index % count($colors)] }} bg-opacity-10 text-light-{{ $colors[$loop->index % count($colors)] }}-emphasis fw-bold w-100 py-2 border-0">
                                Write Message
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if($pagination == 1 && $users->hasPages())

            {{ $users->links('vendor.pagination.custom-bootstrap-5') }}

        @endif

    </div>
    </div>
    </div>

@endsection