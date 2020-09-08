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
include './autoload.php';
$nik=$_SESSION['sess_id'];
$poin=$_POST['poin'];
$gift= $_POST['hadiah'];
$reg_no= $_SESSION['reg_no'];
$today = date("yymd");
$id = rand(2,100);
$sql = "SELECT * FROM FULL where nik='$nik'";
$sqlupdate="UPDATE full SET followers_count=(followers_count-'$poin') WHERE nik='$nik'";
$redeemhistory="INSERT INTO redeem SET id='$id', reg_no='$reg_no', nik='$nik', hadiah='$gift', tgl_ditukar='$today', status='Belum Dikirim'";
$resultupdate = $dbconnect->query($sqlupdate);
$result = $dbconnect->query($sql);
$resultredeeem = $dbconnect->query($redeemhistory);
// $row = $result->fetch_assoc();

if(isset($_POST['redeem']))
{
    // $output='<p>Dear, '.$row['name'].'</p>';
    // $output.='<p>Terima kasih sudah menjadi bagian dari website kami.</p>';
    // $output.='<p>-------------------------------------------------------------</p>';
    // $output.='<p>Silakan tunggu email balasan kami untuk penukaran voucher lebih lanjut. Terimakasih karena sudah menukar poin anda. NIK yang terdaftar dalam website kami adalah '.$row['nik'].'. Poin anda akan ditukar dengan hadiah '.$_POST['hadiah'].', dan sisa poin anda adalah '.$row['followers_count'].'</p>';		
    // $output.='<p>-------------------------------------------------------------</p>'; 	
    // $output.='<p>Terima kasih,</p>';
    // $body = $output; 
    // $subject = "Redeem Poin";
    // $email_to = $row['email'];
    // $fromserver = "hello@mail.com"; 
    // require("../PHPMailer/PHPMailerAutoload.php");
    // $mail = new PHPMailer();
    // $mail->IsSMTP();
    // $mail->SMTPDebug = 2;
    // $mail->Debugoutput = 'html';
    // $mail->Host = "smtp.gmail.com"; // Enter your host here
    // $mail->SMTPAuth = true;
    // $mail->Username = env('username'); // Enter your email here
    // $mail->Password = env('password'); //Enter your passwrod here
    
    // $mail->Port = 587;
    // $mail->SMTPSecure = 'tls';
    // $mail->SMTPAuth = true;
    // $mail->IsHTML(true);
    // $mail->From = "hello@admin.com";
    // $mail->FromName = "Redeem Poin";
    // $mail->Sender = $fromserver; // indicates ReturnPath header
    // $mail->Subject = $subject;
    // $mail->Body = $body;
    // $mail->AddAddress($email_to);

// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
    echo "<script>alert('Poin telah berhasil ditukar, Admin Sahabat Osco akan segera mengirimkan Hadiah anda, Silahkan Login Kembali untuk Tukar Poin!')</script>";
    // echo "<meta http-equiv=refresh content=\"0; url=./\">";
    echo "<meta http-equiv=refresh content=\"0; url=./../logout.php\">";
// }

}

?>
