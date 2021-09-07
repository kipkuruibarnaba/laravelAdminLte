@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            @include('includes.flash-message')
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Company</h3>
                            </div>
                            <form action="{{ url('update/company/'.$company->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="Name ">Company Name </label>
                                        <input type="name" class="form-control" id="companyname" name="companyname"
                                            value="{{$company->name}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="eamil" class="form-control" id="campanyemail" name="campanyemail"
                                            value="{{$company->email}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="uploadfile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="companylogo"
                                                    name="companylogo">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-secondary">Update Company</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
