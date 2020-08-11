
<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>{{ config('app.name', 'Laravel 6 User Roles and Permissions Tutorial') }}</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <!-- Favicons -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" crossorigin="anonymous">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('stylesheet')
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="{{ url('/home') }}">
          <img src="{{ asset('images/logo.png') }}" alt="Public Works Department">
          Public Works Department
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav px-3">
            @guest
                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                <!-- <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> -->
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.index') }}">
                         <span data-feather="bell"></span>
                         {{ Auth::user()->name }} <span class="caret"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </li>
            @endguest
        </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        @guest
        @else
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    @if (Auth::user()->roles[0]->name=='User')
                    <li class="nav-item">
                    
                        <a class="nav-link" href="{{ route('applications.index') }}">
                        <span data-feather="file"></span>
                        Application Management
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/home') }}">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    
                    <!-- <li class="nav-item">
                    
                        <a class="nav-link" href="{{ route('applications.create') }}">
                        <span data-feather="file"></span>
                        Application for PWD
                        </a>
                    </li> -->
                    <li class="nav-item">
                    
                        <a class="nav-link" href="{{ route('applications.index') }}">
                        <span data-feather="file"></span>
                        Application Management
                        </a>
                    </li>

                    @if (Auth::user()->roles[0]->name=='Admin')
                    <!-- Auth::user()->roles[0]->name=='User' -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('allottee') }}">
                        <span data-feather="users"></span>
                        Allottee Management
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        Building Inventory
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        Notification
                        </a>
                    </li>

                    <li class="nav-item">
                        <div class="accordion" id="accordionExample">
                            <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span data-feather="users"></span>
                                 User Management
                            </a>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">

                                    <a class="nav-link" href="{{ route('users.index') }}">
                                       <span data-feather="users"></span>
                                        Users
                                    </a>
                                    <a class="nav-link" href="{{ route('roles.index') }}">
                                       <span data-feather="users"></span>
                                        Roles
                                    </a>

                            </div>
                        </div>
                    </li>
                    @endif 
                    @endif  
                </ul>
            </div>
        </nav>
        @endguest

        @guest

            @yield('content')

        @else
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 parent-margin">
            @yield('content')
            </main>
        @endguest

      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#example').dataTable();
            $('#example1').dataTable();
            $('#example2').dataTable();
            $('#example3').dataTable();
            $('#example4').dataTable();
            $('#example5').dataTable();
            $('#example6').dataTable();
            $('#example7').dataTable();
        });
    </script>

    @yield('javascript')

</body>
</html>
