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
            <h1 class="m-0"> Halaman Manajemen Inventaris</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Manajemen Inventaris</li>
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
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#modal-formtambah">
                <i class="fas fa-plus"></i>&nbsp;Tambah Data
            </button>
            <?php include('properties/alert_prop.php'); ?>
            <hr>
            <table id="alltable" class="table table-bordered table-striped text-center table-responsive" style="width:100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>No.</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Golongan</th>
                            <th>Kabupaten</th>
                            <th>Tempat Tugas</th>
                            <th>Kode Label</th>
                            <th>Lemari</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no = 1;
                        $data = mysqli_query($koneksi,"SELECT * from data_inventaris");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                        <tr>
                            <td scope="row"><?= $no++ ?></td>
                            <td><?= $d['nip'] ?></td>
                            <td><?= $d['nama'] ?></td>
                            <td><?= $d['golongan'] ?></td>
                            <td><?= $d['kabupaten'] ?></td>
                            <td><?= $d['tempat_tugas'] ?></td>
                            <td><?= $d['kode_label'] ?></td>
                            <td><?= $d['lemari'] ?></td>
                            <td style="width:150px;">
                                <a href="editdata.php?id=<?= $d['id_inventaris'] ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i>&nbsp;Edit</a>
                                <a href="<?= $aksi ?>?aksi=hapus&&id=<?= $d['id_inventaris'] ?>" class="btn btn-danger btn-sm d-inline"><i class="fas fa-trash-alt"></i>&nbsp;Hapus</a>
                            </td>
                        </tr>

                    <?php } ?>
                        
                    

                    </tbody>
                </table>



                <div class="modal fade" id="modal-formtambah">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Form Tambah Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <form method="post" action="<?= $aksi ?>?aksi=tambah" >
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nip" name="nip" pattern="[0-9]{18}" placeholder="Masukkan NIP" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
                                    <div class="col-sm-10">
                                        <select name="golongan" id="golongan" class="form-control select2bs4" style="width: 100%;" required>
                                            <option value="">Pilih Golongan</option>
                                        <?php
                                        $no = 1;
                                        $data = mysqli_query($koneksi,"select * from golongan");
                                        while($d = mysqli_fetch_array($data)){
                                        ?>
                                            <option value="<?= $d['predikat'] ?>"><?= $d['predikat'] ?>-<?= $d['nama_pangkat'] ?></option>
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
                                    $no = 1;
                                    $data = mysqli_query($koneksi,"select * from kabupaten");
                                    while($d = mysqli_fetch_array($data)){
                                    ?>
                                        <option value="<?= $d['nama_kabupaten'] ?>"><?= $d['nama_kabupaten'] ?></option>
                                    <?php } ?>
                                    </select>  
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tempat_tugas" class="col-sm-2 col-form-label">Tempat Tugas</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="tempat_tugas" name="tempat_tugas" placeholder="Masukkan Tempat Tugas">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kode_label1" class="col-sm-2 col-form-label">Kode Label</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control col-sm-2 d-inline" id="kode_label1" name="kode_label1">&mdash;<input type="text" class="form-control col-sm-2 d-inline" id="kode_label2" name="kode_label2">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lemari1" class="col-sm-2 col-form-label">No. Lemari</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control col-sm-2 d-inline" id="lemari1" name="lemari1">&mdash;<input type="text" class="form-control col-sm-2 d-inline" id="lemari2" name="lemari2">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                <input type="submit" class="btn btn-primary" value="Simpan">
                            </div>
                        </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
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
