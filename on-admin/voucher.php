<?php
// Start the session
session_start();

if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {

	header('location:./../login.php');
	exit();
}
?>
<html>
<div class="row">
<form method="post">
  <div class="col-xl-4 col-lg-7">
    <!-- Area Chart -->

    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bonus 1</h6>
    </div>
     
         <div class="card-body">
         <div class="card3">
            <img src="img/download.jpg" alt="Avatar" style="width:100%; border-radius: 27px 27px 0px 0px;">
            <div class="centered"><span class="currDate"></span></div>
            <div class="container">
                <h5><b>Beras 1 Karung</b></h5>
                <p>10 Follower
                <div class="my-4 text-right"> <input type="submit" name="update" value="Update" <?php if ($_SESSION['followers'] < '10'){ ?> disabled <?php   }  ?> /></div>
                <text value='<?$_SESSION["sess_id"]?>'>
                </p>
            </div>
        </div>
        </div>
</form>

<?php
if(isset($_POST['update']))
{
    include '../config.php';
  $nik=$_SESSION['sess_id'];


  $sql="UPDATE full SET followers_count=(followers_count-10) WHERE nik='$nik'";
  if($dbconnect->query($sql) === false)
  { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $dbconnect->error, E_USER_ERROR);
  }  
  else 
  { // Jika berhasil alihkan ke halaman tampil.php
    echo "<script>alert('Update Success!')</script>";
  	echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
  }
}

?>   

</html>