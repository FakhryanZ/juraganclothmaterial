<?php
include '../config.php';
session_start();

if(isset($_POST['submit'])){
    $namaProduk = $_POST['namaProduk'];
    $deskripsiProduk = $_POST['deskripsiProduk'];
    $gambarProduk = $_POST['gambarProduk']['error'];
    $stokProduk = $_POST['stok'];
    $harga = $_POST['harga'];

    if($code == 0){
        $pesan = "";
        $nama_folder = "tempat_upload";
        $tmp = $_FILES["gambarProduk"]["tmp_name"];
        $nama_file = $_FILES["gambar"]["name"];
        $path = "$nama_folder/$nama_file";

        $tipe_file = array("image/jpeg", "image/gif","image/png");
        if(!in_array($_FILES["gambar"]["type"],$tipe_file)){
            $pesan = urldecode("File dengan nama tersebut sudah tersimpan");
            header("Location: tambahProduk.php?pesan=$pesan");
            die();
        }

        if(file_exists($path)){
            $pesan = ("File dengan nama tersebut sudah tersimpan, cobalagi");
            header("Location: tambahProduk.php?pesan=$pesan");
            die();
        }

        // Insert query comman
        $query = "INSERT INTO produk (nama, nama_kamar, kelas, gambar, tarif, status) VALUES ('$kode', '$nama', '$kelas', '$nama_file','$tarif','$status')";
        // move_uploaded_file($_FILES["gambar"]["tmp_name"],"tempat_upload/" . $newFilename);

        if (mysqli_query($con, $query)) {
            ?>
            <script language="javascript">
                alert("Data berhasil dimasukkan");
                document.location="../formInsertKamar.php";
            </script>
            <?php
        } else {
            echo "gagal";
            // header("location:../login.php");
        }

        
        // move_uploaded_file($_FILES["gambar"]["tmp_name"],"tempat_upload/" . $newFilename);
        if(move_uploaded_file($tmp,$path)){
            $pesan = "Upload Sukses";
        }
    }else if($code === 4){
        $pesan = urldecode("Upload gagal, tidak terupload");
        headaer("Location: index.php?pesan=$pesan");
    }else{
        $pesan = "Upload gagal";
        header("Location: index.php?pesan=$pesan");
    }
}


        

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
