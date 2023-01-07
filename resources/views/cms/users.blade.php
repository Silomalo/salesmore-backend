@extends('cms.layout')
@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
    </div>



    <div class="row">
        <!-- new item -->
        <div class="col-xl-12 col-lg-5">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">New User? </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle btn btn-primary btn-sm" data-toggle="modal" data-target="#crausalAdd"
                            id="#crausalAdd" aria-haspopup="true" aria-expanded="false" style="color: #fff">
                            Add Users
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- new item -->
        {{-- Users table --}}
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Users</h6>
                    {{-- <a class="m-0 float-right btn btn-danger btn-sm" href="#">Viewed Quotations <i
                      class="fas fa-chevron-right"></i></a> --}}
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>Date</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Edit</th>
                                {{-- <th>Created By</th> --}}
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Date</th>
                                <th>Role</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Edit</th>
                                {{-- <th>Created By</th> --}}
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($user as $qt)
                                <tr>
                                    <td>{{ $qt->created_at }}</td>
                                    <td>
                                        @if ($qt->role == '0')
                                            Admin
                                        @elseif($qt->role == '1')
                                            User
                                        @endif
                                    </td>
                                    {{-- <td>
                                        <img src="{{ URL::asset($qt->image) }}" alt="" style="width: 30px">
                                    </td> --}}
                                    <td>{{ $qt->name }}</td>
                                    <td>{{ $qt->email }}</td>
                                    {{-- <td>{{ $qt->authoredby }}</td> --}}
                                    <td>
                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#edit{{ $qt->id }}">Edit</a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delete{{ $qt->id }}"> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- Users table --}}

        <!-- new crausal pop-up -->
        <div class="modal fade" id="crausalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="/newuser" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name"> Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="User name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="User email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Role</label>
                                        <select class="form-control" name="role" id="role" required>
                                            <option value="1">User</option>
                                            <option value="0">Admin</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Password</label>
                                        <input type="text" class="form-control" name="password"
                                            placeholder="User password" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">Add User</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        {{-- #edit modal --}}
        @foreach ($user as $qt)
            <div class="modal fade" id="edit{{ $qt->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form action="/editUser" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name"> Name</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="User name" value="{{ $qt->name }}" required>
                                                <input type="hidden" name="id" value="{{ $qt->id }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name"> Email</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="User email" value="{{ $qt->email }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"> Password</label>
                                            <input type="text" class="form-control" name="password"
                                                placeholder="Leave blank if not changing password" >
                                        </div>
                                        <div class="form-group">
                                            <label for="name"> Role</label>
                                            <select class="form-control" name="role" required>
                                                @if ($qt->role == '0')
                                                    <option value="0" selected>Admin</option>
                                                    <option value="1">User</option>
                                                @else
                                                    <option value="0">Admin</option>
                                                    <option value="1" selected>User</option>
                                                @endif
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <!-- delete modal -->
        @foreach ($user as $qt)
            <div class="modal fade" id="delete{{ $qt->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Delete User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form action="/deleteUser/{{ $qt->id }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name"> Name</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="User name" value="{{ $qt->name }}" disabled>
                                                <input type="hidden" name="id" value="{{ $qt->id }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name"> Email</label>
                                            <input type="email" class="form-control" name="email"
                                                placeholder="User email" value="{{ $qt->email }}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"> Role</label>
                                            <select class="form-control" name="role" disabled>
                                                @if ($qt->role == '0')
                                                    <option value="0" selected>Admin</option>
                                                    <option value="1">User</option>
                                                @else
                                                    <option value="0">Admin</option>
                                                    <option value="1" selected>User</option>
                                                @endif
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
