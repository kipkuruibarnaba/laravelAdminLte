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
                                <h3 class="card-title">Edit Employee</h3>
                            </div>
                            <form action="{{ url('update/employee/'. $employee->id) }}" method="post">
                              @csrf
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="First Name">First Name </label>
                                  <input type="name" class="form-control" id="firstname" name="firstname" value="{{$employee->firstname}}" required>
                                </div>

                                <div class="form-group">
                                  <label for="Last Name">Last Name </label>
                                  <input type="name" class="form-control" id="lastname" name="lastname" value="{{$employee->lastname}}" required>
                                </div>

                                <div class="form-group">
                                  <label for="Company">Company</label>
                                  <select class="form-control" id="companyname" name="companyname" required>
                                    <option value="0">Select Company</option>
                                    @foreach($companies as $company)
                                    <option {{$company->id==$employee->company_id?"selected":"" }} value="{{$company->id}}">{{$company->name.''}}</option>
                                    @endforeach
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="eamil" class="form-control" id="employeemail" name="employeemail" value="{{$employee->email}}" required>
                                </div>

                                <div class="form-group">
                                  <label for="Phone">Phone</label>
                                  <input type="number" class="form-control" id="employeephone" name="employeephone" value="{{$employee->phone}}" required>
                                </div>
                              </div>        
                              <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">Update Employee</button>
                              </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
