
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>lbh malang | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist')}}/css/adminlte.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin')}}/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('admin/dist')}}/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">dashboard</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Lbh Pos Malang</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="/berita" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                berita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/donasi" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                donasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/kegiatan" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                kegiatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/layanan" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                layanan hukum
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pengacara" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                pengacara
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="/pengumuman" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>pengumuman</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/profil" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>profil</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/publikasi" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>publikasi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/siaranpers" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>siaran pers</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/tentang" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>tentang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dokumen" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>dokumen</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pengajuanlayanan" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>pengajuan layanan</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
  <hr>
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="/">Lbh Malang</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 0.0.1
    </div>
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('admin')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('admin')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('admin')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('admin')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('admin')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('admin')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('admin')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist')}}/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('admin/dist')}}/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin/dist')}}/js/pages/dashboard.js"></script>
<script src="{{asset('admin')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('admin')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('admin')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('admin')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>
</html>
