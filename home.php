<?php include('properties/header_prop.php'); ?>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <?php include('properties/navbar_prop.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper" style="
  background-image: url('assets/dinas3.jpg');background-repeat: no-repeat;
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
            <h1 class="card-text display-3">DINAS PENDIDIKAN</h1>
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

<!-- REQUIRED SCRIPTS -->
<?php include('properties/script_prop.php'); ?>
</body>
</html>
