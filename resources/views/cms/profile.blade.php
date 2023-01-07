@extends('cms.layout')
@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">My Profile </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">myprofile</li>
        </ol>
    </div>



    <div class="row">
        {{-- #edit modal --}}
        @foreach ($user as $qt)
            <div style="width: 100%;">
                {{-- <div class="modal-dialog modal-dialog-centered" role="document"> --}}
                {{-- <div class="modal-content"> --}}
                    {{-- <div class="modal-body"> --}}
                        <div class="card " style="width: 100%;">
                            <div class="card-body">
                                <form action="/updateProfile" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name"> Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="User name"
                                            value="{{ $qt->name }}" required>
                                        <input type="hidden" name="id" value="{{ $qt->id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="User email"
                                            value="{{ $qt->email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Password</label>
                                        <input type="text" class="form-control" name="password"
                                            placeholder="Leave blank if not changing password">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    {{-- </div> --}}
                {{-- </div> --}}
                {{-- </div> --}}
            </div>
        @endforeach
        <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
    @endsection
    @section('scripts')
        <script>
            ClassicEditor
                .create(document.querySelector('#customEdit'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endsection
