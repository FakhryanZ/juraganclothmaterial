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
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Produk</h1>
                
                <!-- Tablenya bos -->
                </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="m-0 font-weight-bold text-primary">Table Data Produk</h6>
                                    <a href="tambahproduk.php" class="btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Tambah Produk</span>
                                    </a>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>Nama Produk</th>
                                <th>Gambar Produk</th>
                                <th>Deskripsi Produk</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $produk = mysqli_query($mysqli,"select * from produk");
                                while ($itemProduk = mysqli_fetch_array($produk)) {
                                    # code...
                                    echo "<tr>";
                                    echo "<td>".$itemProduk['namaProduk']."</td>";
                                    echo "<td><img src='../fileUpload/".$itemProduk['gambarProduk']."' width='100'></td>";
                                    echo "<td>".$itemProduk['stokProduk']."</td>";
                                    echo "<td>".$itemProduk['deskripsiProduk']."</td>";
                                    echo "<td>".$itemProduk['hargaProduk']."</td>";
                                    echo "<td><a href='ubahProduk.php?idProduk=".$itemProduk['idProduk']."' role='button' class='btn btn-warning btn-icon-split'>
                                            <span class='icon text-white-50'>
                                            <i class='fas fa-edit'></i>
                                            </span>
                                            <span class='text'>Edit</span>
                                            </a>
                                            <span class='text'>|</span>
                                            <a href='prosesDeleteProduk.php?idProduk=".$itemProduk['idProduk']."' role='button' class='btn btn-danger btn-icon-split'>
                                                <span class='icon text-white-50'>
                                                    <i class='fas fa-trash'></i>
                                                </span>
                                                <span class='text'>Delete</span>
                                            </a>
                                            </td>";
                                    echo "</tr>";
                                } ?>
                            </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                
                    </div>
                </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            </div>
            <!-- End of Content Wrapper -->
            </div>
            <!-- End of Page Wrapper -->

<?php
include('../fragment/footerAdmin.php');
?>