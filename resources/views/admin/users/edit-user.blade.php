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

            <h4>Update User</h4>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2">

                <!-- Image upload + form (combined so file input is inside the form) -->
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data"
                    class="d-contents w-100">
                    @csrf



                    <div class="card p-3">
                        <div class="">
                            <input name="name" type="text" placeholder="Username" class="form-control my-4 py-2"
                                value="{{ $user->name }}">
                            <input name="email" type="email" placeholder="Email Address" class="form-control my-4 py-2"
                                value="{{ $user->email }}">
                            <input name="password" type="password" placeholder="Password" class="form-control my-4 py-2"
                                value="">
                            <input name="password_confirmation" type="password" placeholder="Confirm Password"
                                class="form-control my-4 py-2" value="">

                            <p class="my-3">
                                <label for="upload-image" class="form-label fw-semibold">Profile Picture</label>
                                @php $mediaUrl = $user->getFirstMediaUrl('profile_picture'); @endphp
                                <img id="image-preview"
                                    src="{{ $mediaUrl ?: asset('images/default-avatar.png') }}"
                                    alt="Profile Picture"
                                    class="d-block img-fluid mb-2"
                                    style="width: 300px; height: 300px; object-fit: cover; border-radius: 8px;">
                                <input class="form-control" type="file" name="profile_picture"
                                    id="upload-image" accept="image/*">
                            </p>

                            <script>
                                document.getElementById('upload-image').addEventListener('change', function () {
                                    const file = this.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function (e) {
                                            document.getElementById('image-preview').src = e.target.result;
                                        };
                                        reader.readAsDataURL(file);
                                    }
                                });
                            </script>
                            <button type="submit" class="btn btn-primary mt-2">Update User</button>

                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

@endsection