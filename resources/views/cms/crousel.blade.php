@extends('cms.layout')
@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sliding Products </h1>
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li> --}}
            <li class="breadcrumb-item active" aria-current="page">HomeScreen</li>
        </ol>
    </div>

    @foreach ($header as $head)
        <div class="modal fade" id="logoInput" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"> Company Logo </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="/updateLogo" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="id" value="{{ $head->id }}" hidden>
                                        <input type="file" class="form-control" name="logo" id="file"
                                            placeholder="Choose file">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        {{-- <div class="row mb-12">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-12 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Salesmore</div>
                      <i class="fas  fa-2x text-primary"> <img src="{{ URL::asset($head->logo) }}" alt="" style="max-width: 50px"></i>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="#" data-toggle="modal" data-target="#logoInput" id="#modalCenter">Update Logo</a></div>
                    </div>
<!--left phone-->
                    <div class="col-auto">
                        <form action="/updateContacts" method="POST" enctype="multipart/form-data">
                          @csrf
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Phone</span>
                          </div>
                          <input type="text" name="id" value="{{$head->id}}" hidden>
                          <input type="text" class="form-control" name="phoneNo" placeholder="07********" value="{{$head->phone}}">
                        </div>
                        <div class="form-group row" >
                          <div class="col-sm-10" >
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </div>
                      </form></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div> --}}
    @endforeach

    {{-- <div class="row">
            <div class="col-lg-12">
              <!-- Horizontal Form -->
              <div class="card mb-4" style="max-height: 75vh;">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">About Section Image</h6>
                </div>
                <div class="card-body">
                  <form action="/updateAboutSection" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="aboutImg" style="max-height: 40vh;">
                      <img src="{{ URL::asset($head->image) }}" alt="" style="max-width: 30vh;">
                  </div>
                  <br>
                    <div class="form-group row">
                      <label for="pic" class="col-sm-3 col-form-label">Photo</label>
                      <div class="col-sm-9">
                        <input type="text" name="id" value="{{$head->id}}" hidden>
                        <input type="file" class="form-control" name="image" id="pic" placeholder="Choose about image">
                      </div>
                    </div>
                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div> --}}
    <!-- row -->
    <div class="row">
        <!-- pop-up models -->

        <!-- new item -->
        <div class="col-xl-12 col-lg-5">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">New Sliding home image? </h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle btn btn-primary btn-sm" data-toggle="modal" data-target="#crausalAdd"
                            id="#crausalAdd" aria-haspopup="true" aria-expanded="false" style="color: #fff">
                            Add Slider
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!-- new item -->
        {{-- <div class="row">
                <div class="col-lg-12">
                  <!-- Horizontal Form -->
                  <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Edit About Section</h6>
                    </div>
                    <div class="card-body">
                      <form action="/updateAboutSection" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"> About Trucode</span>
                        </div>
                        <input type="text" name="id" value="{{$head->id}}" hidden>
                        <textarea class="form-control" id="customEdit"  name="about" aria-label="With textarea">{{$head->about}}</textarea>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div> --}}

        <!-- new crausal pop-up -->
        <div class="modal fade" id="crausalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Add New Slide</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="/addSlider" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="slider" id="file"
                                            placeholder="Choose file">
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Product Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Title ..."
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Product Price</label>
                                        <input type="number" class="form-control" name="price" placeholder="Amount"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"> Product Description</label>
                                        <textarea class="form-control" name="desc" placeholder="The only product with ....." required></textarea>
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
        <!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
        <!-- Pie Chart -->
        @foreach ($slider as $sld)
            <div class="col-xl-4 col-lg-5">
                <div class="card crl mb-4" style="min-height: 300px">
                    <div class="card-body">
                        <img src="{{ URL::asset($sld->image) }}" alt="" style="width: 100%">
                        <div class="info-body">


                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
                                style="background: none">
                                <h6 class="m-0 font-weight-bold text-primary"></h6>
                                <a href=""></a>
                                <a class=" btn btn-danger btn-sm" href="{{ url('/deleteSlider/' . $sld->id) }}"
                                    role="button">Delete Slider</a>
                            </div>

                            <form action="/updateCrImage" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <div class="small text-gray-500">
                                        <div class="form-group">
                                            <input type="text" name="id" value="{{ $sld->id }}" hidden>
                                            <input type="file" class="form-control" name="img" id="file"
                                                placeholder="Choose file">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="small text-gray-500">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> Title</span>
                                            </div>
                                            <textarea class="form-control" name="title" aria-label="With textarea">{{ $sld->title }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="small text-gray-500">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> Price</span>
                                            </div>
                                            <input type="number" class="form-control" name="price" value="{{ $sld->price }}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="small text-gray-500">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"> Info</span>
                                            </div>
                                            <textarea class="form-control" name="desc" aria-label="With textarea">{{ $sld->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
