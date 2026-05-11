@extends('admin.master')

@section('content')


    <div class="bg-light">

        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

                @php
                    $colors = ['primary', 'warning', 'success', 'danger', 'warning', 'info'];
                @endphp

                @foreach($users as $user)

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
                                    <!-- Appending a random query parameter to bypass browser cache -->
                                    <img class="rounded-circle" src="{{ $user->profile_picture }}?random={{ rand() }}"
                                        alt="User Image">
                                </div>

                                <!-- Verified Badge using bg-info -->
                                <div class="bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                    style="width: 24px; height: 24px; font-size: 0.7rem;">
                                    <i class="bi bi-check-lg"></i>
                                </div>

                                <h5 class="card-title fw-bold mb-1">{{ $user->name }}</h5>
                                <p class="text-muted small fw-bold mb-3">{{ $user->employee->designation->designation_name }}
                                </p>

                                <!-- Contact Info -->
                                <div class="text-start ps-2">
                                    <p class="small text-muted mb-1"><i class="bi bi-envelope-fill opacity-50 me-2"></i>
                                        {{ $user->email }}</p>
                                </div>
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
            @if($users->hasPages())

                {{ $users->links('vendor.pagination.custom-bootstrap-5') }}

            @endif

        </div>
    </div>
    </div>

@endsection