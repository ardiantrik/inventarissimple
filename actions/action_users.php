<?php

include '../koneksi.php';

$aksi = $_GET['aksi'];

if ($aksi == 'tambah') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = mysqli_query($koneksi,"insert into users values('','$username', '$password')");
    // echo $res;
    if ($res > 0) {
        $status = "input_sukses";
    } else {
        $status = "input_gagal";
    }

    header("location: ../users.php?status=".$status);	

} elseif ($aksi == 'hapus') {
    $id = $_GET['id'];
	
    $res = mysqli_query($koneksi,"delete from users where id_user='$id'");
    // echo $res;
    if ($res > 0) {
        $status = "hapus_sukses";
    } else {
        $status = "hapus_gagal";
    }

	header("location: ../users.php?status=".$status);	
} 


?>