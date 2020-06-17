<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
  <meta name="author" content="">
    <title>Halaman Login</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
  <div class="row">
  <div class="col-md-4 col-md-offset-1 form-login">
        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <h3 class="text-center title-login">Registrasi Member</h3>
                
            <p class="register">Jika anda belum bergabung menjadi member sahabat Osco silakan klik
              tombol Registarsi di bawah :</p>
                <div class="text-center member">
                <a href="index.html" class="btn btn-block btn-custom-green">MEMBER BARU</a>
                </div>
        </div>
    </div>

    <div class="col-md-4 col-md-offset-2 form-login">
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="check-login.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Login Member</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="nik" placeholder="Masukan NIK Anda">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password Anda">
              
                </div>
                <input type="checkbox" onclick="myFunction()">Show Password
                 <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                
                <div class="text-center forget">
                <a href="forgot-password.php"><p>Lupa Password ?</p></a>
                </div>
            </form>
        </div>
    </div>
    <div>
    </div>


 

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}</script>
  </body>
</html>