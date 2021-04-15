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
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="home.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="data.php" class="nav-link">Data</a>
          </li>
          <li class="nav-item">
            <a href="users.php" class="nav-link">Akun</a>
          </li>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-user-circle"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">

            <a href="actions/action_login.php?aksi=logout" class="dropdown-item dropdown-footer"><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a>
          </div>
        </li>

      </ul>
    </div>
  </nav>
  <!-- /.navbar -->