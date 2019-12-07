<?php
    include '../config.php';

    session_start();

    if ($_SESSION['status'] != "login") {
        header("location:login.php");
    }
?>
<?php
include('../fragment/headerAdmin.php');
?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <?php
        include('../fragment/sidebarAdmin.php');
    ?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

    <?php
        include('../fragment/navbarAdmin.php');
    ?>
    <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Produk</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="prosesTambahProduk.php" method="post" enctype="multipart/form-data" onSubmit="return validasi()">
                <div class="form-group">
                    <label>Nama Produk</label>
                        <input type="text" class="form-control" name="namaProduk" id="namaProduk">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                        <textarea class="form-control" rows="3" name="deskripsiProduk" id="deskripsiProduk"></textarea>
                </div>
                <div class="form-group">
                    <label>Gambar Produk</label>
                        <input type="file" class="form-control-file" name="gambarProduk" id="gambarProduk">
                </div>
                <div class="form-group">
                    <label>Stok</label>
                        <input type="number" class="form-control" name="stok" id="stok">
                </div>
                <div class="form-group">
                    <label>Harga</label>
                        <input type="number" class="form-control" name="harga" id="harga">
                </div>
                <button type="submit" class="btn btn-success">Tambah</button>
                </form>
        </div>
    </div>
    </div>

    </div>
    <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    
<script type="text/javascript">
    function validasi() {
        var nama = document.getElementById('namaProduk').value;
        var deskripsi = document.getElementById('deskripsiProduk').value;
        var gambar = document.getElementById('gambarProduk').value;
        var stok = document.getElementById('stok').value;
        var harga = document.getElementById('harga').value;
        if (nama != "" && deskripsi != "" && gambar != "" && stok != "" && harga != "") {
            return true;
        }else{
            alert('Semua form harus diisi!');
        return false;
        }
    }
</script>
<?php
include('../fragment/footerAdmin.php');
?>