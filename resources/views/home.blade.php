
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
                          <h3 class="card-title">Companies and Employees</h3>
                        </div>
                        <table class="table table-bordered ">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Company Email</th>
                            <th scope="col">Employee First Name</th>
                            <th scope="col">Employee Second Name</th>
                            <th scope="col">Employee Email</th>
                            <th scope="col">Employee No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <th scope="row"><span class="badge badge-primary">{{$loop->iteration}}</span></th>
                                <td>{{@$employee->company->name}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->firstname}}</td>
                                <td>{{$employee->lastname}}</td>
                                <td>{{$employee->email}}</td>
                                <td>{{$employee->phone}}</td>
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







