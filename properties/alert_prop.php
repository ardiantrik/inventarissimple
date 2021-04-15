<?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'input_sukses') {
?>
<div class="alert alert-success text-center">Data berhasil ditambahkan!</div>
<?php
        }
        if ($_GET['status'] == 'input_gagal') {
?>
<div class="alert alert-danger text-center">Data gagal ditambahkan!</div>
<?php
        }
        if ($_GET['status'] == 'edit_sukses') {
?>
<div class="alert alert-success text-center">Data berhasil diubah!</div>
<?php
        }
        if ($_GET['status'] == 'edit_gagal') {
?>
<div class="alert alert-danger text-center">Data gagal diubah!</div>
<?php
        }
        if ($_GET['status'] == 'hapus_sukses') {
?>
<div class="alert alert-success text-center">Data berhasil dihapus!</div>
<?php
        }
        if ($_GET['status'] == 'hapus_gagal') {
?>
<div class="alert alert-danger text-center">Data gagal dihapus!</div>
<?php
        }
    }
    
?>