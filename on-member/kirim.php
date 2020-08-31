<?php

include '../config.php';
$detail_id = ($_GET['did']);
$update = "UPDATE redeem set status='Dikirim' WHERE id='$detail_id'";
$resultupdate = $dbconnect->query($update);
// output data of each row
if($resultupdate){ 
  echo "<script>alert('Dikirim!')</script>";
  echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
  }
  else {
    echo "error";
  }
?>