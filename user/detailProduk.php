<?php include '../fragment/headerUser.php'?>
<?php
    $id = $_GET["id"];
    $produk = mysqli_query($mysqli,"SELECT * FROM produk WHERE idProduk = $id");
    $itemProduk = mysqli_fetch_array($produk);
?>
<html>
    <body>
    </body>
        <div class="container-fluid bg-white mt-5" style="padding:60px">
            <div class="row">
                <div class="col-md-6 border border-secondary rounded">
                    <img src="../fileUpload/<?php echo $itemProduk['gambarProduk'] ?>" class="imgcenter" alt="">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="ml-5 mb-5" style="font-size:40px;"><?php echo $itemProduk['namaProduk'] ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="ml-5 display-4 mb-5" style="font-size:40px;">Harga Rp.<?php echo $itemProduk['hargaProduk'] ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <h3 class="ml-5 display-4 mb-5" style="font-size:40px;">Warna <?php echo $itemProduk['warnaProduk'] ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="ml-5 mb-5" style="font-size:30px;">Stok : <?php echo $itemProduk['stokProduk'] ?></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary btn-lg ml-5 mt-4">Add To Chart</button>
                        </div>
                    </div>
                </div>
        <div class="container-fluid bg-white mt-5" style="padding:15px">
            <div class="row">
                <div class="col-md-12 border border-secondary rounded">
                    <h2 class="mt-3" style="font-size:20px;">Deskripsi Produk</h2>
                    <br>
                    <p class="display-4" style="font-size:20px;" ><?php echo $itemProduk['deskripsiProduk'] ?></p>
                </div>
            </div>    
        </div>
    </body>
    <?php include '../fragment/footerUser.php'?>
</html>