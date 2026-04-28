@extends('admin.master')

@section('content')


    <body class="bg-light">

        <div class="container py-5">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">

                @foreach($users as $user)

                    <!-- Card 1 -->
                    <div class="col">
                        <!-- p-3 for padding, border-0 and shadow-sm for the clean look -->
                        <div class="card h-100 border-0 shadow-sm p-3 position-relative overflow-hidden">

                            <!-- Large Background Number using text-warning with opacity -->
                            <span class="position-absolute top-0 end-0 pe-3 fw-bolder display-2 opacity-10 text-warning"
                                style="z-index: 0; line-height: 1;">
                                {{ $user->id }}
                            </span>

                            <div class="card-body text-center position-relative" style="z-index: 1;">
                                <!-- Logo text -->
                                <div class="text-start mb-4">
                                    <span class="fw-bold small text-uppercase">max</span>
                                </div>
                                <div class="avatars">
                                    <img src="https://picsum.photos/100/100?random={{ $user->id }}" alt="User Image">

                                </div>
                                <!-- Verified Badge using bg-info -->
                                <div class="bg-info text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                    style="width: 24px; height: 24px; font-size: 0.7rem;">
                                    <i class="bi bi-check-lg"></i>
                                </div>

                                <h5 class="card-title fw-bold mb-1">{{ $user->name }}</h5>
                                <p class="text-muted small fw-bold mb-3">Product Manager</p>
                                <p class="card-text text-muted small mb-4">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit adipisicing.</p>

                                <!-- Contact Info -->
                                <div class="text-start ps-2 mb-4">
                                    <p class="small text-muted mb-1"><i class="bi bi-envelope-fill opacity-50 me-2"></i>
                                        {{ $user->email }}</p>
                                    <p class="small text-muted mb-0"><i class="bi bi-geo-alt-fill opacity-50 me-2"></i> South
                                        Road, Miami</p>
                                </div>
                            </div>

                            <!-- Footer Button using warning-subtle for that light orange look -->
                            <div class="card-footer bg-transparent border-0 p-0">
                                <button class="btn btn-warning bg-opacity-10 text-warning-emphasis fw-bold w-100 py-2 border-0">
                                    Write Message
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- You can copy the 'col' block above to add more cards -->

            </div>
        </div>

@endsection