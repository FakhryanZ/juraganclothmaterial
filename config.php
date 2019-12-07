<?php
    $databaseHost = "localhost";
    $databaseName = "juragancloth";
    $databaseUsername = "root";
    $databasePassword = "";

    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    if ($mysqli == true) {
        # code...
        echo "Koneksi sukses";
    }else {
        # code...
        echo "Koneksi gagal";
    }   
?>