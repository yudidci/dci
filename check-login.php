<?php
session_start();
require 'config.php';

if ( isset($_POST['nik']) && isset($_POST['password']) ) {
    
    $sql_check = "SELECT name,
                         level_user,
                         nik,
                         dob_place,
                         dob,
                         gender,
                         marital,
                         road_name,
                         rt,
                         rw,
                         desa,
                         kec,
                         agama,
                         job,
                         nationality,
                         referral,
                         followers_count,
                         phone,
                         email,
                         password
                  FROM full 
                  WHERE 
                       nik=? 
                       AND 
                       password=? 
                  LIMIT 1";

    $check_log = $dbconnect->prepare($sql_check);
    $check_log->bind_param('ss', $nik, $password);

    $nik = $_POST['nik'];
    $password = $_POST['password'];

    $check_log->execute();

    $check_log->store_result();

    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($name, $level_user, $nik, $dob_place, $dob, $gender, $marital, $road_name, $rt, $rw, 
        $desa, $kec, $agama, $job, $nationality, $referral, $followers_count,$phone,$email, $password );

        while ( $check_log->fetch() ) {
            $_SESSION['user_login'] = $level_user;
            $_SESSION['sess_id']    = $nik;
            $_SESSION['nama']       = $name;
            $_SESSION['tempat_lahir']       = $dob_place;
            $_SESSION['tanggal_lahir']       = $dob;
            $_SESSION['jenis_kelamin']       = $gender;
            $_SESSION['marital']       = $marital;
            $_SESSION['alamat']       = $road_name;
            $_SESSION['rt']       = $rt;
            $_SESSION['rw']       = $rw;
            $_SESSION['kelurahan']       = $desa;
            $_SESSION['kecamatan']       = $kec;
            $_SESSION['agama']       = $agama;
            $_SESSION['marital']       = $marital;
            $_SESSION['job']       = $job;
            $_SESSION['nationality']       = $nationality;
            $_SESSION['ferall']       = $referral;
            $_SESSION['followers']       = $followers_count;
            $_SESSION['phone']       = $phone;
            $_SESSION['email']       = $email;
            $_SESSION['password']       = $password;
            
        }

        $check_log->close();

        header('location:on-'.$level_user);
        exit();

    } else {
        header('location: login.php?error='.base64_encode('Username Atau Password Anda Salah!!!'));
        exit();
    }

   
} else {
    header('location:login.php');
    exit();
}