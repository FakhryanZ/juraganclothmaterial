<?php
    include '../config.php';
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:login.php");
    }

    $idProduk = $_GET['idProduk'];

    $result = mysqli_query($mysqli, "SELECT * FROM produk WHERE idProduk ='$idProduk'");

    $data = mysqli_fetch_array($result); 
    if(is_file("../fileUpload/".$data['gambarProduk']))
        unlink("../fileUpload/".$data['gambarProduk']); 
        $query = "DELETE FROM produk WHERE idProduk='".$idProduk."'";
        $sql = mysqli_query($mysqli, $query);
    if($sql){
        header("location: produk.php");
    }else{
        echo "Data gagal dihapus. <a href='produk.php'>Kembali</a>";
    }

?>