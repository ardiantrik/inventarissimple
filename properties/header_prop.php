<?php
session_start();
error_reporting(0);
if(empty($_SESSION['username'])) {
  header('location:index.php');
}
include 'koneksi.php';
?>
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
    <!-- Toastr -->
    <link rel="stylesheet" href="resource/plugins/toastr/toastr.min.css">
</head>