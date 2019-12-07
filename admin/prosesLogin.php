<?php
    include '../config.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    
    $login = mysqli_query($mysqli,"select * from admin where username='$username' and password='$password'");
    $cek = mysqli_num_rows($login);

    if ($cek > 0) {
        # code...
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location: produk.php");
    }else {
        # code...
        header("location: login.php");
    }
?>