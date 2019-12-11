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
                <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
                
                <!-- Tablenya bos -->
                </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="m-0 font-weight-bold text-primary">Table Data Transaksi</h6>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>Tanggal</th>
                                <th>Total Harga</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $produk = mysqli_query($mysqli,"select * from transaksi where konfirmasi = 0");
                                while ($itemProduk = mysqli_fetch_array($produk)) {
                                    # code...
                                    echo "<tr>";
                                    $origDate = $itemProduk['tglTransaksi'];
                                    $convertedDate = date("d-m-Y", strtotime($origDate));
                                    echo "<td>".$convertedDate."</td>";
                                    echo "<td>".$itemProduk['totalHarga']."</td>";
                                    echo "<td><a href='konfirmasiTransaksi.php?idTransaksi=".$itemProduk['idTransaksi']."' role='button' class='btn btn-success btn-icon-split'>
                                    <span class='icon text-white-50'>
                                    <i class='fas fa-check'></i>
                                    </span>
                                    <span class='text'>Confirmation</span>
                                    </a>
                                    <span class='text'>|</span>
                                    <a href='deleteTransaksi.php?idTransaksi=".$itemProduk['idTransaksi']."' role='button' class='btn btn-danger btn-icon-split'>
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