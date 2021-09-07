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
                          <h3 class="card-title">Create Company</h3>
                        </div>
                        <form  action="{{url('store/company')}}" method="post"  enctype="multipart/form-data">
                            @csrf
                          <div class="card-body">
                            <div class="form-group">
                              <label for="Name ">Company Name </label>
                              <input type="name" class="form-control" id="companyname" name="companyname" placeholder="Enter Company Name" required>
                            </div>
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="eamil" class="form-control" id="campanyemail" name="campanyemail" placeholder="Enter Company Email" required>
                            </div>
                            <div class="form-group">
                              <label for="uploadfile">File input</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="companylogo" name="companylogo" required accept="image/png, image/gif, image/jpeg">
                                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                              </div>
                            </div>                     
                          </div>        
                          <div class="card-footer">
                            <button type="submit" class="btn btn-secondary">Create Company</button>
                          </div>
                        </form>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
