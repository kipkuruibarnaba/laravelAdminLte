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
                                <h3 class="card-title">Employees</h3>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Fisrt Name</th>
                                        <th scope="col">last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">phone No</th>
                                        <th scope="col">Company</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <th scope="row">
                                                <span
                                                    class="badge badge-primary">{{ $loop->iteration }}
                                                </span>
                                            </th>
                                            <td>{{ $employee->firstname }}</td>
                                            <td>{{ $employee->lastname }}</td>
                                            <td>{{ $employee->email }}</td>
                                            <td>{{ $employee->phone }}</td>
                                            <td>{{ @$employee->company->name }}</td>
                                            <td>
                                                <a href="{{ url('edit/employee/' . $employee->id) }}"
                                                    class="btn btn-block btn-info">Edit</a>
                                            </td>
                                            <td>
                                                <a href="{{ url('delete/employee/' . $employee->id) }}"
                                                    class="btn btn-block btn-danger">Delete</a>
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
