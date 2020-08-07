<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
<?php
include('config.php');
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
    $error .="<p>Alamat email anda salah, <br>
    ketikkan alamat email yang valid!</p>";
  }
  else
  {
	$sel_query = "SELECT * FROM `full` WHERE email='".$email."'";
  $results = mysqli_query($dbconnect,$sel_query);
  
	$row = mysqli_num_rows($results);
	if ($row==""){
		$error .= "No user is registered with this email address!";
		}
  }
  
	if($error!=""){
	echo "<div class='error'>".$error."</div>
	<br /><a class='btn btn-primar btn-user' href='javascript:history.go(-1)'>〱Kembali</a>";
		}else{
	$expFormat = mktime(date("H"), date("i"), date("s"), date("m")  , date("d")+1, date("Y"));
	$expDate = date("Y-m-d H:i:s",$expFormat);
	$key = (2418*2);
	$addKey = substr(md5(uniqid(rand(),1)),3,10);
  $key = $key . $addKey;
  
// Insert Temp Table
mysqli_query($dbconnect,
"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`)
VALUES ('".$email."', '".$key."', '".$expDate."');");

$output='<p>Dear user,</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="http://localhost/oscobatam1/reset-password.php?key='.$key.'&email='.$email.'&action=reset" target="_blank">http://localhost/oscobatam1/reset-password.php?key='.$key.'&email='.$email.'&action=reset</a></p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after 1 day for security reason.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks,</p>';
$body = $output; 
$subject = "Password Recovery";

$email_to = $email;
$fromserver = "hello@mail.com"; 
require("PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = "smtp.gmail.com"; // Enter your host here
    $mail->SMTPAuth = true;
    $mail->Username = 'devwebbatam@gmail.com'; // Enter your email here
    $passwordsmtp = '22helloworld';
    $mail->Password = "$passwordsmtp"; //Enter your passwrod here
    
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
$mail->IsHTML(true);
$mail->From = "noreply@yourwebsite.com";
$mail->FromName = "Forgot Password";
$mail->Sender = $fromserver; // indicates ReturnPath header
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($email_to);
if(!$mail->Send()){
echo "Mailer Error: " . $mail->ErrorInfo;
}else{
echo "<div class='error'>
<p>Email telah dikirimkan kepada Anda dengan instruksi<br> tentang cara mengatur ulang kata sandi Anda!</p>
</div><br /><br /><br />";
	}

		}	

}else{
?>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Lupa Password?</h1>
                    <p class="mb-4">Tulis Emailmu agar kami mengirmkan link untuk mengatur ulang pasword anda</p>
                  </div>
                  <form class="user" method="post" action="" name="reset">
                    <div class="form-group">
                      <!-- <input type="email" name="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Masukan emial Anda..."> -->
                      <input type="email" name="email" placeholder="username@email.com" />
                    </div>
                   <input class="btn btn-primary btn-user btn-block" type="submit" value="Reset Password"/>
                   <hr>
                  <div class="text-center">
                    <a class="small" href="index.html">Register Member!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login.php">Sudah Menjadi Member? Silahkan Login!</a>
                  </div>
                  </form>
                  <?php } ?>
               
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>