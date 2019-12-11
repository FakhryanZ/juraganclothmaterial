<html>
    <?php include '../fragment/headerUser.php'?>
    <body>
    <div class="container-fluid bg-white mt-5" style="padding:60px">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <p class="ini-quicksand">Best Quality makes Your Choice</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Thing's to best deals</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat quidem, quos corrupti aut nihil neque fuga adipisci natus ea eligendi minus, doloremque recusandae voluptatem iusto rerum suscipit voluptate. Deserunt, excepturi?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="quicksand" style="font-size:100px">Juragan Cloth</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

<!-- Bootstrap CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <div class="container bg-white mt-5" style="padding-top:0px;padding-bottom:70px">
        <div class="row">
            <?php
                        $produk = mysqli_query($mysqli, "SELECT * FROM produk");
                        if (mysqli_num_rows($produk)>0) {
                            // $index = 1;
                            while ($itemProduk = mysqli_fetch_array($produk)) { ?>
                                    <div class="col-4 d-flex align-items-stretch mb-3">
                                        <div class="card">
                                            <img class="card-img-top" src="../fileUpload/<?php echo $itemProduk['gambar_produk']; ?>" width="260" height="260" alt="Card image cap">
                                            <div class="card-body d-flex justify-content-end flex-column">
                                                <h5 class="card-title" align="left"><?php echo $itemProduk['nama_produk']; ?></h5>
                                                <p class="card-text text-truncate" align="left"><?php echo $itemProduk['deskripsi_produk']; ?></p>
                                                <p class="card-text" align="left">Stok : <?php echo $itemProduk['stok_produk']; ?></p>
                                                <p class="card-text" align="left">Harga : <?php echo $itemProduk['harga_produk']; ?></p>
                                                <div class="d-flex justify-content-between">
                                                    <a href="detailProduk.php?id=<?php echo $itemProduk['id_produk']; ?>" class="btn btn-primary">Go Here</a>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                <a href="beli.php?id=<?php echo $itemProduk['id_produk']; ?>"><button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                <?php
                            }
                        }
                    ?>
            
        </div>
    </div>
    <?php include '../fragment/footerUser.php'?>
    </body>
</html>