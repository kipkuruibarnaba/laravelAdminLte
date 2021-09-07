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
                                <h3 class="card-title">Edit Todo</h3>
                            </div>
                        <form action="{{ url('update/todo/' . $todo->id) }}" method="post">
                            @csrf
                          <div class="card-body">

                            <div class="form-group">
                              <label for="Employee">Select Employee</label>
                              <select class="form-control" id="employeename" name="employeename" required>
                                <option></option>
                                @foreach($employees as $employee)
                                 <option {{$employee->id==$todo->employee_id?"selected":"" }} value="{{$employee->id}}">{{$employee->firstname .'-'.$employee->lastname .''}}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="Todo ">Todo Name </label>
                              <input type="name" class="form-control" id="todoname" name="todoname" value="{{$todo->todoname}}" required>
                            </div>
                            <div class="form-group">
                              <label for="status">Completed</label>
                              <select class="form-control" id="completed" name="completed" required>
                                <option value="1">True</option>
                                <option value="0">False</option>
                              </select>
                            </div>
                          </div>        
                          <div class="card-footer">
                            <button type="submit" class="btn btn-secondary">Update Todo</button>
                          </div>
                        </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
