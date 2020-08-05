<?php

include '../config.php';
$detail_id = ($_GET['did']);
$referral = $_GET['ref'];
$sql = "DELETE from full where reg_no= '$detail_id'";
$update = "UPDATE full set followers_count=followers_count-1 WHERE reg_no='$referral'";
$result = $dbconnect->query($sql);
$resultupdate = $dbconnect->query($update);
// output data of each row
if($result && $resultupdate){ 
  echo "<script>alert('Data Dihapus!')</script>";
  echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
  }
  else {
    echo "error";
  }
?>