@extends('cms.layout')
@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product Categories</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">categories</li>
        </ol>
    </div>

    <!-- Row -->
    {{-- < class="row"> --}}
        <!-- new item -->
        <div class="col-xl-12 col-lg-5">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">New Category? </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle btn btn-primary btn-sm" data-toggle="modal" data-target="#crausalAdd"
                            id="#crausalAdd" aria-haspopup="true" aria-expanded="false" style="color: #fff">
                            Add Category
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
                    {{-- <a class="m-0 float-right btn btn-danger btn-sm" href="#">Viewed categories <i
                            class="fas fa-chevron-right"></i></a> --}}
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($categories as $qt)
                                <tr>
                                    <td>{{ $qt->name }}</td>
                                    <td><img src="{{ URL::asset($qt->image) }}" alt="icon" style="max-height: 30px">
                                    </td>
                                    <td>{{ $qt->description }}</td>
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
        <!-- /.container-fluid -->

        <!-- new crausal pop-up -->
        <div class="modal fade" id="crausalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="/newcategory" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name"> Categoty Image</label>
                                        <input type="file" class="form-control" name="image" id="file"
                                            placeholder="Choose file">
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Categoty Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Title ..."
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Category Description</label>
                                        <textarea class="form-control" name="description" id="description" placeholder="Description ..." required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- new crausal pop-up -->
                {{-- edit modal --}}
    {{-- <div> --}}
        @foreach ($categories as $qt)
            <div class="modal fade" id="edit{{ $qt->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/updateCategory" method="POST">
                                @csrf

                                <div class="form-group">
                                    {{-- img src assets from events --}}
                                    <img src="{{ URL::asset($qt->image) }}" alt="icon" style="max-width: 90px" />
                                </div>
                                  <div class="form-group">
                                    <label for="name">New Image</label>
                                    <input type="file" class="form-control" name="image" />
                                    <input type="hidden" name="id" value="{{ $qt->id }}" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $qt->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description"
                                        rows="3">{{ $qt->description }}</textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{-- delete modal --}}
    <div>
        @foreach ($categories as $qt)
            <div class="modal fade" id="delete{{ $qt->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('categories.destroy', $qt->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $qt->name }}" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description"
                                        rows="3" disabled>{{ $qt->description }}</textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
{{-- delete --}}
    </div>
    <!--Row-->
@endsection
