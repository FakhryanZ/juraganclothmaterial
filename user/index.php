<html>
<?php 
    include '../fragment/headerUser.php';
?>
<body>
    <div id="" class="mt-5" style="">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/89/Los_Angeles%2C_Winter_2016.jpg" alt="Los Angeles" width="100%" height="600">
                    <div class="carousel-caption" style="margin-bottom:100px;">
                        <h1 class="ini-quicksand" style="font-size:100px;">Do More What You Love</h1>
                        <p>We had such a great time in LA!</p>
                    </div>   
                </div>
                <div class="carousel-item">
                    <img src="https://www.fshsociety.org/wp-content/uploads/2018/06/cityscape-of-the-los-angeles-skyline-at-dusk-los-angeles-california-united-states-of-america-north-america-530065311-57924bb33df78c17348ace09.jpg" alt="Chicago" width="100%" height="600">
                    <div class="carousel-caption" style="margin-bottom:100px;">
                        <h1 class="ini-quicksand" style="font-size:100px;">Never Do Nothing Again</h1>
                        <p>Thank you, Chicago!</p>
                    </div>   
                </div>
                <div class="carousel-item">
                    <img src="https://web.tplgis.org/wp-content/uploads/2018/01/Echo_Park_Lake_with_Downtown_Los_Angeles_Skyline.jpg" alt="New York" width="100%" height="600">
                    <div class="carousel-caption" style="margin-bottom:100px;">
                        <h1 class="ini-quicksand" style="font-size:100px;">Make You Day OSEM</h1>
                        <p>We love the Big Apple!</p>
                    </div>   
                </div>
            </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
        </div>
    </div>
    <div id="about" class="container-fluid bg-white" style="padding-top:60px;padding-bottom:70px">
        <div class="">
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <div class="text-align-left">
                        <h2 class="ini-gillsandstd">Let's Get Started Today <br>  In Mood For....</h2>
                        <h3></h3>
                        <br>
                    </div>
                </div>
            </div>
            <br>
            <div class="mb-3 mt-4 ini-quicksand text-center">
                <b>
                    <h1>Most Recently... </h1>
                    <div class="row">
                        <?php
                                    $produk = mysqli_query($mysqli, "SELECT * FROM produk LIMIT 3");
                                    if (mysqli_num_rows($produk)>0) {
                                        // $index = 1;
                                        while ($itemProduk = mysqli_fetch_array($produk)) { ?>
                                                <div class="col-4 d-flex align-items-stretch mb-3">
                                                    <div class="card">
                                                        <img class="card-img-top" src="../fileUpload/<?php echo $itemProduk['gambarProduk']; ?>" width="260" height="260" alt="Card image cap">
                                                        <div class="card-body d-flex justify-content-end flex-column">
                                                            <h5 class="card-title" align="left"><?php echo $itemProduk['namaProduk']; ?></h5>
                                                            <p class="card-text text-truncate" align="left"><?php echo $itemProduk['deskripsiProduk']; ?></p>
                                                            <p class="card-text" align="left">Stok : <?php echo $itemProduk['stokProduk']; ?></p>
                                                            <p class="card-text" align="left">Harga : <?php echo $itemProduk['hargaProduk']; ?></p>
                                                            <div class="d-flex justify-content-between">
                                                                <a href="detailProduk.php?id=<?php echo $itemProduk['idProduk']; ?>" class="btn btn-primary">Go Here</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                            <?php
                                        }
                                    }
                                ?>
                        
                    </div>
                </b>
            </div>
        </div>
    </div>
    <?php include '../fragment/footerUser.php'?>
</body>

</html>