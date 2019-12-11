<?php
    include '../config.php';

    session_start();

    if ($_SESSION['status'] != "login") {
        header("location:login.php");
    }
    $admin = $_SESSION['idAdmin'];
    $idTransaksi = $_GET['idTransaksi'];
    $query = mysqli_query($mysqli,"UPDATE `transaksi` SET `idAdmin` = '$admin', `konfirmasi` = '1' WHERE `idTransaksi` = '$idTransaksi';");
    
    if ($query = true) {
        # code...
        header('location:terkonfirmasi.php');
    }else {
        # code...
        echo "Gagal";
    }
?>