
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="icon" type="image/gif/png" href=" url{ /img/default.png }"/>
  <title>Lost and Found</title>

  <!-- Arjel csrf_token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Arjel link in public -->
  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/style.css">

</head>
<body class="hold-transition sidebar-mini">
<!-- Arjel - add app component -->
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./img/logo.png" alt="LAL Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Lost & Found</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="./img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{ Auth::user()->name }}
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fa fa-home indigo"></i>
              <p>
                Dashboard
              </p>
            </router-link>
          </li>
         
          <li class="nav-item">
            <router-link to="/itemreport" class="nav-link">
              <i class="nav-icon fa fa-envelope teal"></i>
              <p>
                Messages Repprt
                
                <span class="badge badge-success right">55</span>
              </p>
              
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/itemfound" class="nav-link">
              <i class="nav-icon fa fa-th-large green"></i>
              <p>
                Found Items
              </p>
            </router-link>
          </li>

          <li class="nav-header">REPORTING</li>

          <li class="nav-item">
            <router-link to="/reportfound" class="nav-link">
              <i class="nav-icon fa fa-bullhorn orange"></i>
              <p>
                Report Found Item
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/reportlost" class="nav-link">
              <i class="nav-icon fa fa-bullhorn orange"></i>
              <p>
                Report Lost Item
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  <i class="nav-icon fa fa-power-off red"></i>
                  <p>
                    {{ __('Logout') }}
                  </p>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">

        <!-- Arjel - display the vue component -->
        <router-view></router-view>

        <vue-progress-bar></vue-progress-bar>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018-2019 <a href="#">iCODE</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- Arjel link in public -->
<script src="/js/app.js"></script>

</body>
</html>
