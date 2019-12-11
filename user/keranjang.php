<?php
session_start();
include '../config.php';

if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])){
    echo "<script>alert('Keranjang losong, mohon pilih barang dahulu');</script>";
    echo "<script>location='produk.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php 
    include '../fragment/headerUser.php';
?>
    <!-- <?php include 'menu.php' ?> -->
    <section class="konten">
        <div class="container">
            <h1 style="margin-top:20px;">Keranjang Saya</h1>
            <hr>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subharga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor=1; ?>
                    <?php foreach($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
                    <?php $ambil = $mysqli->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                    $pecah = $ambil->fetch_assoc();
                    $subharga = $pecah["harga_produk"]*$jumlah;
                    ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah["nama_produk"]; ?></td>
                        <td>Rp. <?php echo number_format($pecah["harga_produk"]); ?></td>
                        <td><?php echo $jumlah; ?></td>
                        <td>Rp. <?php echo number_format($subharga); ?></td>
                        <td>
                            <a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs">Hapus</a>
                        </td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="produk.php" class="btn btn-warning">Belanja Lagi</a>
            <a href="checkout.php" class="btn btn-primary">Checkout</a>
        </div>
    </section>
</body>
</html>