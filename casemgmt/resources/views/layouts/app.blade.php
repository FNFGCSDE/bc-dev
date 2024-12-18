<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flyte Case Management</title>

    <!-- Custom fonts for this template-->
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/dataTables.bootstrap4.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/buttons.bootstrap4.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/responsive.bootstrap4.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/searchBuilder.bootstrap4.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/searchPanes.bootstrap4.css') }}" rel="stylesheet"/>

    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('js/Chart.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.js') }}"></script>

    <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/dataTables.buttons.js') }}"></script>
    <script src="{{ asset('js/buttons.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('js/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/dataTables.searchBuilder.js') }}"></script>
    <script src="{{ asset('js/searchBuilder.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/dataTables.searchPanes.js') }}"></script>
    <script src="{{ asset('js/searchPanes.bootstrap4.js') }}"></script>


</head>

<body id="page-top">

  <nav class="navbar navbar-toggleable-md navbar-expand navbar-dark bg-dark topbar static-top shadow pt-3 pb-3 pl-1 pr-1">
    <ul class="navbar-nav mr-auto">
      <a class="navbar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard')}}">
          <div class="mx-3 text-uppercase">Flyte</div>
      </a>
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('cases.viewCasesList')}}">
          Cases
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('alerts.viewAlertsList')}}">
          Alerts
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('teams.viewTeamList')}}" id="navbarDropdown" role="button">
          Teams
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Reports Dashboard</a>
          <a class="dropdown-item" href="#">All Reports</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Custom Reports</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Logs
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Recent Activity</a>
          <a class="dropdown-item" href="#">Core Logs</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">All Logs</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item">
            <a class="nav-link" href="#" role="button">
                <span class="mr-2 d-none d-lg-inline text-light small">{{ auth()->user()->name}}</span>
                <img class="img-profile rounded-circle"
                    src="img/undraw_profile.svg">
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}" role="button">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Logout</span>
            </a>
        </li>
    </ul>

  </nav>

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Sidebar -->
        @yield('sidebar')


  <div id="content-wrapper" class="d-flex flex-column m-2">
    @yield('content')
  </div>

  <!-- End of Content Wrapper -->
</div>

    <!-- End of Page Wrapper -->

    <!-- Bootstrap core JavaScript-->


</body>

</html>
