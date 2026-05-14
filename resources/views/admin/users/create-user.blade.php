@extends('admin.master')

@section('content')

    <div class="bg-light py-4">
        <div class="container">

            <!-- Error Notifications for user creation fields -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- End of Error Notifications -->

            <h4>Create New User</h4>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2">

                <div class="card p-3">
                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf
                        <div class="">
                            <input name="name" type="text" placeholder="Username" class="form-control my-4 py-2" value="">
                            <input name="email" type="email" placeholder="Email Address" class="form-control my-4 py-2"
                                value="">
                            <input name="password" type="password" placeholder="Password" class="form-control my-4 py-2"
                                value="">
                            <input name="password_confirmation" type="password" placeholder="Confirm Password"
                                class="form-control my-4 py-2" value="">
                            <button type="submit" class="btn btn-primary mt-2">Create User</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-light"></div>
    <div class="container py-2">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">



        </div>
    </div>
    </div>

@endsection