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











{{-- <!-- Main content -->
<table id="example" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>Rendering engine</th>
      <th>Browser</th>
      <th>Platform(s)</th>
      <th>Engine version</th>
      <th>CSS grade</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td>Trident</td>
      <td>Internet
        Explorer 4.0
      </td>
      <td>Win 95+</td>
      <td> 4</td>
      <td>X</td>
    </tr>
    <tr>
      <td>Trident</td>
      <td>Internet
        Explorer 5.0
      </td>
      <td>Win 95+</td>
      <td>5</td>
      <td>C</td>
    </tr>
    <tr>
      <td>Trident</td>
      <td>Internet
        Explorer 5.5
      </td>
      <td>Win 95+</td>
      <td>5.5</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Trident</td>
      <td>Internet
        Explorer 6
      </td>
      <td>Win 98+</td>
      <td>6</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Trident</td>
      <td>Internet Explorer 7</td>
      <td>Win XP SP2+</td>
      <td>7</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Trident</td>
      <td>AOL browser (AOL desktop)</td>
      <td>Win XP</td>
      <td>6</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Firefox 1.0</td>
      <td>Win 98+ / OSX.2+</td>
      <td>1.7</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Firefox 1.5</td>
      <td>Win 98+ / OSX.2+</td>
      <td>1.8</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Firefox 2.0</td>
      <td>Win 98+ / OSX.2+</td>
      <td>1.8</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Firefox 3.0</td>
      <td>Win 2k+ / OSX.3+</td>
      <td>1.9</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Camino 1.0</td>
      <td>OSX.2+</td>
      <td>1.8</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Camino 1.5</td>
      <td>OSX.3+</td>
      <td>1.8</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Netscape 7.2</td>
      <td>Win 95+ / Mac OS 8.6-9.2</td>
      <td>1.7</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Netscape Browser 8</td>
      <td>Win 98SE+</td>
      <td>1.7</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Netscape Navigator 9</td>
      <td>Win 98+ / OSX.2+</td>
      <td>1.8</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Mozilla 1.0</td>
      <td>Win 95+ / OSX.1+</td>
      <td>1</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Mozilla 1.1</td>
      <td>Win 95+ / OSX.1+</td>
      <td>1.1</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Mozilla 1.2</td>
      <td>Win 95+ / OSX.1+</td>
      <td>1.2</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Mozilla 1.3</td>
      <td>Win 95+ / OSX.1+</td>
      <td>1.3</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Gecko</td>
      <td>Mozilla 1.4</td>
      <td>Win 95+ / OSX.1+</td>
      <td>1.4</td>
      <td>A</td>
    </tr>

    </tbody>
  </table> --}}