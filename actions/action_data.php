<?php

include '../koneksi.php';

$aksi = $_GET['aksi'];

if ($aksi == 'tambah') {

    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $golongan = $_POST['golongan'];
    $kabupaten = $_POST['kabupaten'];
    $tempat_tugas = $_POST['tempat_tugas'];
    $kode_label1 = $_POST['kode_label1'];
    $kode_label2 = $_POST['kode_label2'];
    $lemari1 = $_POST['lemari1'];
    $lemari2 = $_POST['lemari2'];

    $kode_label = $kode_label1."-".$kode_label2;
    $lemari = $lemari1."-".$lemari2;

    $res = mysqli_query($koneksi,"insert into data_inventaris values('','$nip', '$nama', '$golongan' , '$kabupaten', '$tempat_tugas', '$kode_label', '$lemari' )");
    // echo $res;
    if ($res > 0) {
        $status = "input_sukses";
    } else {
        $status = "input_gagal";
    }

    header("location: ../data.php?status=".$status);	

} elseif ($aksi == 'hapus') {
    $id = $_GET['id'];
	
    $res = mysqli_query($koneksi,"delete from data_inventaris where id_inventaris='$id'");
    // echo $res;
    if ($res > 0) {
        $status = "hapus_sukses";
    } else {
        $status = "hapus_gagal";
    }

	header("location: ../data.php?status=".$status);	
} elseif ($aksi == 'edit') {
    var_dump($_POST);
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $golongan = $_POST['golongan'];
    $kabupaten = $_POST['kabupaten'];
    $tempat_tugas = $_POST['tempat_tugas'];
    $kode_label1 = $_POST['kode_label1'];
    $kode_label2 = $_POST['kode_label2'];
    $lemari1 = $_POST['lemari1'];
    $lemari2 = $_POST['lemari2'];

    $kode_label = $kode_label1."-".$kode_label2;
    $lemari = $lemari1."-".$lemari2;

    $res = mysqli_query($koneksi,"update data_inventaris set nip='$nip', nama='$nama', golongan='$golongan', kabupaten='$kabupaten', tempat_tugas='$tempat_tugas', kode_label='$kode_label', lemari='$lemari' where id_inventaris='$id' ");
    echo $res;
    if ($res > 0) {
        $status = "edit_sukses";
    } else {
        $status = "edit_gagal";
    }

    header("location: ../data.php?status=".$status);	
}


?>