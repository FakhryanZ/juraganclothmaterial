<html>
<?php
    include '../fragment/headerUser.php'
?>
<body>

    <div class="container-fluid bg-white mt-5 bglogin" style="padding:70px">
        <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9" style="margin-top:100px;">

            <div class="card o-hidden border-0 shadow-lg my-5 mx-auto"  style="width: 550px;">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-5">Login</h1>
                    </div>
                    <form class="user" action="prosesLogin.php" method="post" onSubmit="return validasi()"> 
                        <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan Username">
                        </div>
                        <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password">
                        </div>
                        <input type="submit" value="login" class="btn btn-primary btn-user btn-block mt-5">
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>

        </div>

        </div>

        </div>
    </div>
    <script type="text/javascript">
      function validasi() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        if (username != "" && password != "") {
          return true;
        }else{
          alert('Username dan Password harus diisi!');
          return false;
        }
      }
  </script>

</body>
<?php
    include '../fragment/footerUser.php'
?>
</html>