<?php
    include '../config.php';

    session_start();

    if ($_SESSION['status'] != "login") {
        header("location:login.php");
    }

    echo "Sukses". $_SESSION['username'];
?>

<br>
<br>
<a href="logout.php">Logout</a>