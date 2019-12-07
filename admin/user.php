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
                <h1 class="h3 mb-0 text-gray-800">User</h1>
                
                <!-- Tablenya bos -->
                </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h6 class="m-0 font-weight-bold text-primary">Table Data User</h6>
                            </div>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>No Tlp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $user = mysqli_query($mysqli,"select * from user");
                                while ($itemUser = mysqli_fetch_array($user)) {
                                    # code...
                                    echo "<td>".$itemUser['firstName']."</td>";
                                    echo "<td>".$itemUser['lastName']."</td>";
                                    echo "<td>".$itemUser['email']."</td>";
                                    echo "<td>".$itemUser['alamat']."</td>";
                                    echo "<td>".$itemUser['noTlp']."</td>";
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