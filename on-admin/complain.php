<?php
// Start the session
session_start();

if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {

	header('location:./../login.php');
	exit();
}
          include'../configtbl.php';
          $date = date("yymd");
          $name = $_SESSION['nama'];
          $nik = $_SESSION['sess_id'];
          $no_hp = $_SESSION['phone'];
          $comment = $_POST['comment'];      
          $sql="INSERT INTO complain SET name = '$name', nik= '$nik', date='$date', no_hp = '$no_hp', message= '$comment'";
          if($dbconnect->query($sql) === false)
          { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
            trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $dbconnect->error, E_USER_ERROR);
          }  
          else 
          { // Jika berhasil alihkan ke halaman tampil.php
            echo "<script>alert('Terimakasih Admin kami akan segra menghubungi Anda!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=./index.php\">";
          }

        
        ?> 