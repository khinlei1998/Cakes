
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Cake Order System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="{{  secure_asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ secure_asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{ secure_asset('/css/app.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"  >
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

  
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
    <img src="{{auth::user()->image}}" class="img-circle elevation-2" style="width:50px; height:45px; margin-left:30px" alt="User Image">
      <span class="brand-text font-weight-light">{{auth::user()->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="mb-2 nav-item has-treeview">
            <a href="{{route('admin.staff.index')}}" class="nav-link">
            <img src="https://img.icons8.com/officel/30/000000/change-user-male.png"/>
              <p class="target">
                User
                
              </p>
            </a>
           
          </li>
          <li class="mb-2 nav-item has-treeview">
            <a href="{{route('admin.category.index')}}" class="nav-link">
            <img src="https://img.icons8.com/color/30/000000/multiple-choice.png"/>
              <p class="target">
                Category
               
              </p>
            </a>
           
          </li>
          
          <li class="mb-2 nav-item has-treeview">
            <a href="{{route('admin.shop.index')}}" class="nav-link">
            <img src="https://img.icons8.com/dusk/30/000000/shop.png"/>
              <p class="target">
                Shop
              
              </p>
            </a>
           
          </li>
          <li class="mb-2 nav-item has-treeview">
            <a href="{{route('admin.product.index')}}" class="nav-link">
            <img src="https://img.icons8.com/doodle/30/000000/cake--v1.png"/>
              <p class="target">
                Product
               
              </p>
            </a>
           
          </li>
          <li class="mb-2 nav-item has-treeview">
            <a href="{{route('admin.order.index')}}" class="nav-link">
            <img src="https://img.icons8.com/dusk/30/000000/list.png"/>
              <p class="target">
                Order
               
              </p>
            </a>
           
          </li>
          <li class="mb-2nav-item">
            <a href="{{route('logout')}}" class="nav-link">
            <img src="https://img.icons8.com/nolan/30/logout-rounded-up.png"/>
              <p class="target">
                Log out
                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <div class="content-header">
      <div class="container-fluid">
       
      @yield('content_wrapper')
    
          
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ secure_asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ secure_asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ secure_asset('dist/js/adminlte.min.js')}}"></script>
<!-- page script -->
<!-- sweet alert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="{{ secure_asset('js/app.js') }}"></script>



</body>
</html>
