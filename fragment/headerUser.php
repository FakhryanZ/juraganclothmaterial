<?php
    include '../config.php';
    session_start();
    @$username = $_SESSION["username"];
    @$id_user = $_SESSION["id_user"];
?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Juragan Cloth Material</title>
    <link rel="stylesheet" href="./../assets/css/user-css.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
</head>
<style>
    .quicksand{
        font-family: 'Quicksand', sans-serif;
    }
    .bglogin{
        background-image: url("../assets/images/shutterstock_650498251.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
    .imgcenter{
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <ul class="navbar-nav">
            <li>
                <a href="../user/index.php" style="margin-right: 150px;font-size: 25px;text-decoration:none;" class="quicksand font-weight-bold">
                    Juragan Cloth
                </a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link" href="../user/produk.php" style="margin-right: 150px;color: white;">Produk </a>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link" href="" style="margin-right: 150px;color: white">Help </a>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link" href="createEvent.php" style="margin-right: 150px;color: white">Chart </a>
                </div>
            </li>
            <li class="nav-item">
                <?php if (isset($username)) {?>
                    <a class="nav-link" href="organize.php" style="margin-right: 150px; color: white">About </a>
                <?php } else { ?>
                    <a class="nav-link" href="signin.php" style="margin-right: 150px; color: white">About </a>
                <?php } ?>
            </li>
            <li class="nav-item">
            <?php if (isset($username)) { ?>
                <div class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" style="margin-right:50px;color:white" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome <span><?php echo @$username ?></span> </a>
                    <div class="dropdown-menu transparana ini-quicksand">
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                </div>
            <?php } else { ?>
                <a class="nav-link" href="login.php" style="margin-right: 100px;color: white">Log In </a>
            <?php } ?>
            </li>
        </ul>
    </nav>
</body>