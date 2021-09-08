<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AdminLTE 3 | Blank Page</title>

    <!-- Scripts -->

    <!-- Fonts -->
  <!-- Font Awesome -->
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
  
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{url('/')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{url('show/companies')}}" class="nav-link">View Companies</a>
            </li>
             <li class="nav-item d-none d-sm-inline-block">
              <a href="{{url('show/employees')}}" class="nav-link">View Employees</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{url('show/todos')}}" class="nav-link">View Todos</a>
            </li>                                   
            {{-- <li class="nav-item d-none d-sm-inline-block">
              <a href="#" class="nav-link">Contact</a>
            </li> --}}
          </ul>
      



          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
              </a>
              <div class="navbar-search-block">
                <form class="form-inline">
                  <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                      <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
      
            <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
              </a>
            </li>
            <li class="nav-item">

              {{-- logoutform --}}
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{-- <strong> {{ Auth::user()->name }}</strong> --}}
                  </a>

                  <div class="dropdown-menu dropdown-menu-right bg-info" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          class="d-none">
                          @csrf
                      </form>
                  </div>
              </li> 
              
              
            </li>
          </ul>

        </nav>

        
        <!-- /.navbar -->
      <!-- Example single danger button -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="../../index3.html" class="brand-link">
            <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
          </a>
      
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
              </div>
            </div>
      
            <!-- SidebarSearch Form -->
            <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                  </button>
                </div>
              </div>
            </div>
      
            <!-- Sidebar Menu -->
           <br>
          <ul class="list-group">
              <li class="list-group-item">
                <a href="{{url('create/Company')}}" class="text-white h6">Create Company</a>  
              </li>
              <li class="list-group-item">
                <a href="{{url('create/Employee')}}" class="text-white h6">Add Employee</a>  
              </li>
              <li class="list-group-item">
              <a href="{{url('create/todo')}}" class="text-white h6">Create Todo</a>  
            </li>
            {{-- <li class="list-group-item">
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Logout
                </button>
                <div class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                </div>
              </div>
            </li> --}}
                      
          </ul>
          

            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
      
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
              <main class="py-4">
                  @yield('content')
              </main>
        </div>
        <!-- /.content-wrapper -->
      
        <footer class="main-footer">
          <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.1.0
          </div>
          <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
      
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      
      <!-- jQuery -->
  <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script> 
<!-- AdminLTE for demo purposes --> 
  <script src="{{asset('js/app.js')}}"></script>

  <script>
        $(function () {
            $("#example").DataTable();
        });

   </script>
    @livewireScripts
</body>
</html>
