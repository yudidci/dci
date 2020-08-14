<?php

include 'config.php';

$today = date("yymd");
$random=(rand(1, 1000));
$join=$today . $random;
$join;

                            $dob_place=$_POST['dob_place'];
                             $dob=$_POST['dob'];
                             $road_name=$_POST['road_name'];
                             $rt=$_POST['rt'];
                             $rw=$_POST['rw'];
                             $desa=$_POST['desa'];
                             $kec=$_POST['kec'];
                             $agama=$_POST['agama'];
                             $marital=$_POST['marital'];
                             $job=$_POST['job'];
                             $nationality=$_POST['nationality'];
                             $nik=($_POST['nik']);
                             $name=$_POST['name'];
                             $password=md5($_POST['password']);
                             $gender=$_POST['gender'];
                             $email=$_POST['email'];
                             $phone=$_POST['phone'];
                             
$referral=$_POST['referral'];

$checkquery ="SELECT * FROM full WHERE nik='".$nik."'";
$fetchquery = $dbconnect->query($checkquery);

    if (!$fetchquery)
    {
      trigger_error('Wrong SQL Command: ' . $fetchquery . ' Error: ' . $dbconnect->error, E_USER_ERROR);
    }

if(mysqli_num_rows($fetchquery) > 0){

   echo "<script>alert('Nik Sudah Pernah Terdaftar!')</script>";
   echo "<meta http-equiv=refresh content=\"0; url=index.html\">";

}else{

   $sql="INSERT INTO full SET dob_place = '$dob_place', dob = '$dob', gender = '$gender', road_name = '$road_name', rt = '$rt', rw = '$rw' ,desa ='$desa', kec ='$kec', agama ='$agama', marital ='$marital', job ='$job', nationality ='$nationality', followers_count = 0, nik = '$nik', name = '$name', password = '$password', reg_no = '$join', referral='$referral', level_user='admin', phone='$phone', email='$email'";
   $updatefollowers = "UPDATE full set followers_count=followers_count+1 where reg_no='$referral', verifikasi=''";
       
   $sqlq = $dbconnect->query($sql);
   $updateq = $dbconnect->query($updatefollowers);
   if($sqlq && $updateq === false)
   { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
      trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $dbconnect->error, E_USER_ERROR);
   // echo "<script>alert('Add Success!')</script>";
   }  
   else 
   { // Jika berhasil alihkan ke halaman tampil.php
    echo "<script>alert('Registrasi Berhasil!')</script>";
   echo "<meta http-equiv=refresh content=\"0; url=login.php\">";
   }

}
     

     
?> 