<?php

include '../config.php';
$detail_id = ($_GET['did']);
$sql = "DELETE from full where reg_no= '$detail_id'";
$result = $dbconnect->query($sql);
// output data of each row
if($result){ 
  echo "<script>alert('Data Dihapus!')</script>";
  echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
  }
  else {
    echo "error";
  }
?>