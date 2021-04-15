<?php

include "../koneksi.php";
if ($_GET['aksi'] == "login") {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $login = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$pass'");
    $ketemu = mysqli_num_rows($login);
    $r = mysqli_fetch_array($login);

    if ($ketemu > 0) {

        session_start();
        $_SESSION[username] = $r[username];

        header('location: ../home.php');
    } else {

        echo "login gagal";
        header('location: ../index.php?status=login_gagal');
    }
    
} elseif ($_GET['aksi'] == "logout") {
    session_start();
    session_destroy();
    header("location: ../index.php");
}

?>