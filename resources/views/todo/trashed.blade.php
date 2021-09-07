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
                                <h3 class="card-title">Trashed Todos</h3>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Todo Name</th>
                                        <th scope="col">Employee</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Restore</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($todos as $todo)
                                        <tr>
                                            <th scope="row">
                                                <span class="badge badge-primary">{{ $loop->iteration }}
                                                </span>
                                            </th>
                                            <td>{{ $todo->todoname }}</td>
                                            <td>{{ $todo->employee->firstname . '-' . $todo->employee->lastname }}</td>
                                            <td>
                                                @if ($todo->completed == 0)
                                                    <span class="badge badge-danger">Pending</span>
                                                @else
                                                    <span class="badge badge-info">Completed</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="btn btn-block btn-danger">Restore</a>
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
