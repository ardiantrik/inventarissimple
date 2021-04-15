<?php 
  include('properties/header_prop.php');
  $aksi = "actions/action_data.php";
?>

<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <?php include('properties/navbar_prop.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Inventaris</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="data.php">Manajemen Inventaris</a></li>
              <li class="breadcrumb-item active">Edit Data Inventaris</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md">
            <div class="card card-info">
                <div class="card-header">
                <h3 class="card-title">Form Edit Data</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $id = $_GET['id'];
                
                $query =mysqli_query($koneksi, "SELECT * FROM data_inventaris WHERE id_inventaris='$id' ");
                $d = mysqli_fetch_array($query);
                $kode_label = explode("-",$d["kode_label"]);
                $lemari = explode("-",$d["lemari"]);
                ?>
                <form class="form-horizontal" method="post" action="<?= $aksi ?>?aksi=edit" >
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nip" name="nip" pattern="[0-9]{18}" placeholder="Masukkan NIP" required value="<?= $d['nip'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required value="<?= $d['nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
                            <div class="col-sm-10">
                                <select name="golongan" id="golongan" class="form-control select2bs4" style="width: 100%;" required>
                                    <!-- <option value="">Pilih Golongan</option> -->
                                <?php
                                $datas = mysqli_query($koneksi,"select * from golongan");
                                while($ds = mysqli_fetch_array($datas)){
                                  if ($ds['predikat']==$d['golongan']) {
                                ?>
                                    <option value="<?= $ds['predikat'] ?>" selected><?= $ds['predikat'] ?>-<?= $ds['nama_pangkat'] ?></option>
                                <?php
                                  } else {
                                ?>
                                    <option value="<?= $ds['predikat'] ?>"><?= $ds['predikat'] ?>-<?= $ds['nama_pangkat'] ?></option>
                                <?php
                                  }
                                ?>
                                <?php } ?>
                                </select>   
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kabupaten" class="col-sm-2 col-form-label">Kabupaten</label>
                            <div class="col-sm-10">
                            <select name="kabupaten" id="kabupaten" class="form-control select2bs4" style="width: 100%;">
                                <option value="">Pilih Kabupaten</option>
                            <?php
                            $data = mysqli_query($koneksi,"select * from kabupaten");
                            while($ds = mysqli_fetch_array($data)){
                              if ($ds['nama_kabupaten']==$d['kabupaten']) {
                              ?>
                                  <option value="<?= $ds['nama_kabupaten'] ?>" selected><?= $ds['nama_kabupaten'] ?></option>
                              <?php
                                } else {
                              ?>
                                  <option value="<?= $ds['nama_kabupaten'] ?>"><?= $ds['nama_kabupaten'] ?></option>
                              <?php
                                }
                              ?>
                            <?php } ?>
                            </select>  
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat_tugas" class="col-sm-2 col-form-label">Tempat Tugas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_tugas" name="tempat_tugas" placeholder="Masukkan Tempat Tugas" value="<?= $d['tempat_tugas'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kode_label1" class="col-sm-2 col-form-label">Kode Label</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control col-sm-2 d-inline" id="kode_label1" name="kode_label1" value="<?= $kode_label[0] ?>">&mdash;<input type="text" class="form-control col-sm-2 d-inline" id="kode_label2" name="kode_label2" value="<?= $kode_label[1] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lemari1" class="col-sm-2 col-form-label">Lemari</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control col-sm-2 d-inline" id="lemari1" name="lemari1" value="<?= $lemari[0] ?>">&mdash;<input type="text" class="form-control col-sm-2 d-inline" id="lemari2" name="lemari2" value="<?= $lemari[1] ?>">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <a href="data.php" class="btn btn-default">Kembali</a>
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>

                
            </div>
            <!-- /.card -->

   
          </div>
          <!-- /.col-md -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
