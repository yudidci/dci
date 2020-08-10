<?php
?>
<html>
<head>

<link href="css/sb-admin-2.css" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
<div style="width:700px; margin:50 auto;">

<div class="container">
<div class="row justify-content-center">
<div class="col-xl-7 col-lg-12 col-md-9">
<div class="card o-hidden border-0 shadow-lg my-5">
<div class="card-body p-0">
<div class="row">
<div class="col-lg-12">
<div class="p-3">
<div class="text-center">

<h1 class="h4 text-gray-900 mb-2">Lupa Sandi</h1>   
</div>
<?php
include('config.php');
if (isset($_GET["key"]) && isset($_GET["email"])
&& isset($_GET["action"]) && ($_GET["action"]=="reset")
&& !isset($_POST["action"])){
$key = $_GET["key"];
$email = $_GET["email"];
$curDate = date("Y-m-d H:i:s");
$query = mysqli_query($dbconnect,"
SELECT * FROM `password_reset_temp` WHERE `key`='".$key."' and `email`='".$email."';");
$row = mysqli_num_rows($query);
if ($row==""){
$error="<h2>Link tidak valid</h2>";
echo $error;
$error.= '<h2>Tautan Tidak Valid </h2>
<p> Tautan tidak valid / kedaluwarsa. Entah Anda tidak menyalin tautan yang benar dari email,
atau Anda telah menggunakan kunci untuk menonaktifkannya.</p>';
	}else{
	$row = mysqli_fetch_assoc($query);
	$expDate = $row['expDate'];
	if ($expDate >= $curDate){
	?>
	<form method="post" action="" name="update">
	<input type="hidden" name="action" value="update" />
	<br /><br />
	<label><strong>Masukan Sandi Baru:</strong></label><br />
	<input type="password" name="pass1" id="pass1" maxlength="15" required onkeyup='check();'/>
    <br /><br />
	<label><strong>Ulangi Sandi Baru:</strong></label><br />
	<input type="password" name="pass2" id="pass2" maxlength="15" required onkeyup='check();'/>
	<span id='message'></span>
	<br></br>
	<input class="bts" type="checkbox" onclick="myFunction()">
	<p class="show">Lihat Sandi</p>
	<input  type="hidden" name="email" value="<?php echo $email;?>"/>
	<input class="btn btn-primary btn-user btn-block" type="submit" id="reset" value="Ganti Sandi" />
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
<?php
}else{
	$error.= "<h2>Link Expired</h2>
		<p>The link is expired. You are trying to use the expired link which as valid only 24 hours (1 days after request).<br /><br /></p>";
				}
		}
$error = "";
if($error!=""){
	echo "<div hidden class='error'>".$error."</div><br />";
	}			
} // isset email key validate end


if(isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"]=="update")){
$error="";
$pass1 = mysqli_real_escape_string($dbconnect,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($dbconnect,$_POST["pass2"]);
$email = $_POST["email"];
$curDate = date("Y-m-d H:i:s");
if ($pass1!=$pass2){
		$error.= "<p>Password do not match, both password should be same.<br /><br /></p>";
		}
	if($error!=""){
		
		echo "<script>alert('Password Tidak Sama')</script>";
		echo "<meta http-equiv=refresh content=\"0; url=login.php\">";
		
		}else{

$pass1 = md5($pass1);
mysqli_query($dbconnect,
"UPDATE `full` SET `password`='".$pass1."', `trn_date`='".$curDate."' WHERE `email`='".$email."';");	

mysqli_query($dbconnect,"DELETE FROM `password_reset_temp` WHERE `email`='".$email."';");	
	
	echo "<script>alert('Password Berhasi dirubah')</script>";
    echo "<meta http-equiv=refresh content=\"0; url=login.php\">";	
	
		}		
}
?>


<br /><br />
</div>
</body>
<script>
function myFunction() {
  var x = document.getElementById("pass1");
  var y = document.getElementById("pass2");
  if (x.type && y.type === "password") {
    x.type = "text";
	y.type = "text";
  } else {
    x.type = "password";
	y.type = "password";
  }
}
</script>
<script>
      var check = function() {
      if (document.getElementById('pass1').value ==
        document.getElementById('pass2').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Password Cocok';
      } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Password tidak sama';
      }
    }
    </script>
</html>
