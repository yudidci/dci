<?php
// Start the session
session_start();

if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {

	header('location:./../login.php');
	exit();
}
?>
<?php
include '../config.php';
$nik=$_SESSION['sess_id'];
$poin=$_POST['poin'];
$sql = "SELECT * FROM FULL where nik='$nik'";
$sqlupdate="UPDATE full SET followers_count=(followers_count-'$poin') WHERE nik='$nik'";
$resultupdate = $dbconnect->query($sqlupdate);
$result = $dbconnect->query($sql);
$row = $result->fetch_assoc();

if(isset($_POST['redeem']))
{
    $output='<p>Dear, '.$row['name'].'</p>';
    $output.='<p>Terima kasih sudah menjadi bagian dari website kami.</p>';
    $output.='<p>-------------------------------------------------------------</p>';
    $output.='<p>Silakan tunggu email balasan kami untuk penukaran voucher lebih lanjut. Terimakasih karena sudah menukan poin anda. NIK yang terdaftar dalam website kami adalah '.$row['nik'].'. Poin anda akan ditukar dengan hadiah '.$_POST['hadiah'].', dan sisa poin anda adalah '.$row['followers_count'].'</p>';		
    $output.='<p>-------------------------------------------------------------</p>'; 	
    $output.='<p>Terima kasih,</p>';
    $body = $output; 
    $subject = "Redeem Poin";
    $email_to = $row['email'];
    $fromserver = "hello@mail.com"; 
    require("../PHPMailer/PHPMailerAutoload.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = "smtp.mailtrap.io"; // Enter your host here
    $mail->SMTPAuth = true;
    $mail->Username = "c5a0d6ea74b770"; // Enter your email here
    $mail->Password = "7f5c27bd1e55fd"; //Enter your passwrod here
    
    $mail->Port = 2525;
    $mail->IsHTML(true);
    $mail->From = "noreply@yourwebsite.com";
    $mail->FromName = "Redeem Poin";
    $mail->Sender = $fromserver; // indicates ReturnPath header
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($email_to);

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script>alert('Poin telah berhasil ditukar! Silakan cek email anda')</script>";
    echo "<meta http-equiv=refresh content=\"0; url=./\">";
}

}

?>
