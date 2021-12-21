<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('pageTitle')</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('backend/admin')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{asset('backend/admin')}}/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('backend/admin')}}/css/sb-admin.css" rel="stylesheet">
@if(Session::has('adminSession'))
  
@else 
  <script>window.location.href = '{{url("admin/login")}}';</script>
@endif
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="{{ url('/admin') }}">Blog</a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="{{ url('/') }}">Frontend</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('admin/logout') }}">Logout</a>
        </div>
      </li>
    </ul>
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('admin') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-edit"></i>
          <span>Posts</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Posts:</h6>
          <a class="dropdown-item" href="{{ url('admin/posts') }}">All Data</a>
          <a class="dropdown-item" href="{{ url('admin/post/add') }}">Add Data</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/categories') }}">
          <i class="fas fa-list"></i>
          <span>Categories</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/comments') }}">
          <i class="fas fa-comments"></i>
          <span>Comments</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/subscribers') }}">
          <i class="fas fa-envelope"></i>
          <span>Subscribers</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('admin/settings') }}">
          <i class="fas fa-cog"></i>
          <span>Settings</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('admin') }}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
        @yield('content')
      </div>
    </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('backend/admin')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('backend/admin')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('backend/admin')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{asset('backend/admin')}}/vendor/chart.js/Chart.min.js"></script>
  <script src="{{asset('backend/admin')}}/vendor/datatables/jquery.dataTables.js"></script>
  <script src="{{asset('backend/admin')}}/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('backend/admin')}}/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="{{asset('backend/admin')}}/js/demo/datatables-demo.js"></script>
  <script src="{{asset('backend/admin')}}/js/demo/chart-area-demo.js"></script>

</body>
</html>