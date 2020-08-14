<?php

include '../config.php';
$detail_id = ($_GET['did']);
$update = "UPDATE full set verifikasi='Aktif' WHERE nik='$detail_id'";
$result = $dbconnect->query($update);
// output data of each row
if($result){ 
  echo "<script>alert('Berhasil Verifikasi!')</script>";
  echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
  }
  else {
    echo "error";
  }
?>