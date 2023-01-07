@extends('cms.layout')
@section('main')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Client Quatations</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Quotes</li>
        </ol>
    </div>

    <!-- Row -->
    <div class="row">
        <!-- DataTable with Hover -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Quatations</h6>
                    {{-- <a class="m-0 float-right btn btn-danger btn-sm" href="#">Viewed Quotations <i
                      class="fas fa-chevron-right"></i></a> --}}
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>Date</th>
                                <th>Contacts</th>
                                <th>Products</th>
                                <th>Description</th>
                                <th>Total</th>
                                <th>Toggle</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Date</th>
                                <th>Contacts</th>
                                <th>Products</th>
                                <th>Description</th>
                                <th>Total</th>
                                <th>Toggle</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($quotation as $qt)
                                <tr>
                                    <td>{{ $qt->created_at }}</td>
                                    <td>{{ $qt->name }}<br> {{ $qt->phone1 }}<br> {{ $qt->phone2 }} </td>
                                    <td>{{ $qt->products }} </td>
                                    <td>Location:-{{ $qt->city }} <br>{{ $qt->description }}</td>
                                    <td>{{ $qt->total }}</td>
                                    <td>
                                        <form action="{{ route('quotation.toggle', $qt->id) }}" method="POST">
                                            @csrf
                                            {{-- @method('PUT') --}}
                                            <input type="hidden" name="id" value="{{ $qt->id }}">
                                            <input type="hidden" name="served" value="{{ $qt->served }}">
                                            @if ($qt->served == "pending")
                                            <button type="submit" class="btn btn-sm btn-danger">
                                               Pending
                                                {{-- {{ $qt->served == "pending" ? 'Pending' : 'Served' }} --}}
                                            </button>
                                            @else
                                            <button type="submit" class="btn btn-sm btn-primary">
                                                Served
                                            </button>
                                            @endif
                                        </form>
                                    </td>
                                    <td>
                                        {{-- onclick open delete model --}}
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                            data-target="#deleteModal{{ $qt->id }}">
                                            Delete
                                        </button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- delete model --}}
        {{-- delete model --}}
        {{-- <div class="modal fade" id="deleteModal{{ $qt->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Quotation</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure you want to delete this
                        Quotation?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form action="{{ route('quotation.destroy', $qt->id) }}" method="POST">
                            @csrf

                            <input type="hidden" name="id" value="{{ $qt->id }}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- delete model --}}
    </div>
    <!--Row-->
@endsection
