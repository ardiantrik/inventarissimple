<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Inventaris</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="resource/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="resource/dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="resource/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="resource/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="resource/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="resource/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="resource/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="resource/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="resource/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="resource/index3.html" class="navbar-brand">
        <img src="resource/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Manajemen Inventaris</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
          <?php
            if (isset($_GET['status'])) {
              if ($_GET['status']=="login_gagal") {
          ?>
                <script>alert("Terjadi kesalahan! Harap periksa username atau password kembali!")</script>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-login">
                  <i class="fas fa-user-circle"></i>&nbsp;Login
                </button>
          <?php
              }
            } else {
          ?>
                <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#modal-login">
                  <i class="fas fa-user-circle"></i>&nbsp;Login
                </button>
          <?php
            }
          ?>
            
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper" style="
  background-image: url('assets/rektorat.png');background-repeat: no-repeat;
  background-attachment: fixed;background-size: cover;background-position: center top;"> -->
  <div class="content-wrapper">

    <div class="container pt-3">
        
    </div>
    <!-- Main content -->
      <div class="container text-light" style="background-color:rgba(0, 0, 0, 0.6);">
        <div class="card bg-dark text-white text-center">
          <div id="carouselGambar" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="10000">
                <img src="assets/dinas.png" class="d-block w-100 card-img" style="max-height:700px;" alt="1">
              </div>
              <div class="carousel-item" data-interval="10000">
                <img src="assets/dinas2.png" class="d-block w-100 card-img" style="max-height:700px;" alt="2">
              </div>
              <div class="carousel-item" data-interval="10000">
                <img src="assets/dinas3.jpg" class="d-block w-100 card-img" style="max-height:700px;" alt="3">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselGambar" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselGambar" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          
          <div class="card-img-overlay pt-5" style="background-color:rgba(0, 0, 0, 0.6);">
            <h3 class="card-text pt-5">PEMERINTAH PROPINSI SULAWESI SELATAN</h3>
            <h1 class="card-text" style="font-size:75px">DINAS PENDIDIKAN</h1>
            <h5 class="card-text">JL. PERINTIS KEMERDEKAAN KM.10 TLP.0411-585257 MAKASSAR</h5>
            <h1 class="card-text pt-5"></h1>
            <h1 class="card-text pt-5"></h1>
            <h3 class="card-text">Bidang : </h3>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <?php include('properties/footer_prop.php'); ?>
</div>
<!-- ./wrapper -->

<div class="modal fade" id="modal-login">
      <div class="modal-dialog modal-dialog-centered modal-lg">
      <!-- <div class="modal-content"> -->
          <div class="login-box modal-content mx-auto">
            <!-- /.login-logo -->
            <div class="card card-outline card-primary">
              <div class="card-header text-center">
                <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="card-body">
                <p class="login-box-msg">
                  <?php
                    if (isset($_GET['status'])) {
                      if ($_GET['status']=="login_gagal") {
                        echo "Terjadi kesalahan! Harap periksa username atau password kembali";
                      }
                    } else {
                      echo "Silakan login untuk mengakses halaman Admin";
                    }
                    
                  ?>
                </p>

                <form action="actions/action_login.php?aksi=login" method="post">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                          Ingat Saya
                        </label>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.login-box -->
          <!-- </div> -->
      </div>
      <!-- /.modal-dialog -->
  </div>

<!-- REQUIRED SCRIPTS -->
<?php include('properties/script_prop.php'); ?>
</body>
</html>
