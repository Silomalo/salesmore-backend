@extends('cms.layout')
@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
    </div>



    <div class="row">
        <!-- new item -->
        <div class="col-xl-12 col-lg-5">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">New Product? </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle btn btn-primary btn-sm" data-toggle="modal" data-target="#crausalAdd"
                            id="#crausalAdd" aria-haspopup="true" aria-expanded="false" style="color: #fff">
                            Add Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- new item -->
        {{-- products table --}}
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                    {{-- <a class="m-0 float-right btn btn-danger btn-sm" href="#">Viewed Quotations <i
                      class="fas fa-chevron-right"></i></a> --}}
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>Date</th>
                                <th>PID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>EditedBy</th>
                                <th>Manage</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Date</th>
                                <th>PID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>EditedBy</th>
                                <th>Manage</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($project as $qt)
                                <tr>
                                    <td>{{ $qt->created_at }}</td>
                                    <td>{{ $qt->pid }}</td>
                                    <td>
                                        <img src="{{ URL::asset($qt->image) }}" alt="" style="width: 30px">
                                    </td>
                                    <td>{{ $qt->name }}</td>
                                    <td>{{ $qt->category }}</td>
                                    <td>{{ $qt->price }}</td>
                                    <td>{{ $qt->authoredby }}</td>
                                    <td>
                                        <a href="/productimages/{{ $qt->pid }}" class="btn btn-primary btn-sm">Manage
                                            images</a>
                                    </td>
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
        {{-- products table --}}

        <!-- new crausal pop-up -->
        <div class="modal fade" id="crausalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="/addProjects" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="image" id="file"
                                            placeholder="Choose file">
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="product name"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Category</label>
                                        {{-- <input type="number" class="form-control" name="price" placeholder="Higher price" required> --}}
                                        <select class="form-control" name="category" required>
                                            <option value="">Select Category</option>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->name }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Price (Original)</label>
                                        <input type="number" class="form-control" name="price"
                                            placeholder="Original price" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Cost (Discounted)</label>
                                        <input type="number" class="form-control" name="cost"
                                            placeholder="Discounted price" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Description</label>
                                        <textarea class="form-control" name="desc" placeholder="Description" id="btext" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        {{-- #edit modal --}}
        @foreach ($project as $qt)
            <div class="modal fade" id="edit{{ $qt->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Edit Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card mb-4">
                                <div class="card-body">

                                    <form action="{{ route('products.update', $qt->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <img src="{{ URL::asset($qt->image) }}" alt="" style="width: 60px">
                                            <input type="text" class="form-control" name="id"
                                                value="{{ $qt->id }}" hidden>

                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control" name="image" id="file"
                                                placeholder="Choose file">
                                        </div>
                                        <div class="form-group">
                                            <label for="name"> Name</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ $qt->name }}" placeholder="product name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"> Category</label>
                                            {{-- <input type="number" class="form-control" name="price" placeholder="Higher price" required> --}}
                                            <select class="form-control" name="category" required>
                                                <option value="">Select Category</option>
                                                @foreach ($category as $cat)
                                                    <option value="{{ $cat->name }}"
                                                        {{ $cat->name == $qt->category ? 'selected' : '' }}>
                                                        {{ $cat->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"> Price</label>
                                            <input type="number" class="form-control" name="price"
                                                value="{{ $qt->price }}" placeholder="Original price" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"> Cost</label>
                                            <input type="number" class="form-control" name="cost"
                                                value="{{ $qt->cost }}" placeholder="Discounted price" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Description</label>
                                            <textarea class="form-control" name="desc" placeholder="Description" required>{{ $qt->description }}</textarea>
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
        @foreach ($project as $qt)
            <div class="modal fade" id="delete{{ $qt->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Delete Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <form action="{{ route('products.destroy', $qt->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name"> Are you sure you want to delete this product?</label>
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
