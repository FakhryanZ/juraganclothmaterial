<?php
include '../config.php';
session_start();

        $namaProduk = $_POST['namaProduk'];
        $deskripsiProduk = $_POST['deskripsiProduk'];
        $stokProduk = $_POST['stok'];
        $harga = $_POST['harga'];

        #Ambil File
        $ekstensi = array('png','jpg');
        $namaFile = $_FILES['gambarProduk']['name'];
        $x = explode('.', $namaFile);
        $ekstensiVerif = strtolower(end($x));
        $ukuranFile = $_FILES['gambarProduk']['size'];
        $file_tmp = $_FILES['gambarProduk']['tmp_name'];

        if (in_array($ekstensiVerif, $ekstensi) === true ) {
            # code...
            if ($ukuranFile < 8044070) {
                # code...
                move_uploaded_file($file_tmp, '../fileUpload/'.$namaFile);
                $query = mysqli_query($mysqli,"INSERT INTO produk VALUES(
                    NULL, 
                    '$namaProduk',
                    '$namaFile',
                    '$stokProduk',
                    '$deskripsiProduk',
                    '$harga' 
                    )");
                    if($query){
                        header('location:produk.php');
                    }else{
                        echo 'GAGAL MENGUPLOAD GAMBAR';
                    }
            }else{
                echo "Ukuran File terlalu besar";
            }
        }else {
            # code...
            echo "Ekstensi tidak diperbolehkan";
        }
?>
