@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @include('includes.flash-message')
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Companies</h3>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Company Name</th>
                                        <th scope="col">Company Email</th>
                                        <th scope="col">Logo</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($companies as $company)
                                        <tr>
                                            <th scope="row"><span class="badge badge-primary">{{ $loop->iteration }}</span>
                                            </th>
                                            <td>{{ $company->name }}</td>
                                            <td>{{ $company->email }}</td>
                                            <td><img src="{{ asset($company->logo)  }}" alt="{{ $company->name }}" width="100" height="50"></td>
                                            <td>
                                                <a href="{{ url('edit/company/'.$company->id)}}"class="btn btn-block btn-info">Edit</a>
                                            </td>
                                             <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-company">
                                            Delete
                                            </button>


                                                    {{-- Modal Delete --}}

                                            <div class="modal fade" id="modal-delete-company" style="display: none;" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content bg-danger ">
                                                    <div class="modal-header">
                                                    <h4 class="modal-title">Delete </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                    </div>
                                                    <div class="modal-body ">
                                                    <p>Are you sure you want to Delete ?</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">No</button>
                                                    <a href="{{ url('delete/company/'.$company->id)}}" type="button" class="btn btn-outline-dark">Yes</a>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>                                       
    
                                                {{-- <a href="{{ url('delete/company/'.$company->id)}}" class="btn btn-block btn-danger">Delete</a> --}}
                                            </td>                                           
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
    @endsection
