<?php

include '../config.php';
$detail_id = ($_GET['did']);
$sql = "DELETE from full where reg_no= '$detail_id'";
$result = $dbconnect->query($sql);
// output data of each row
if($result){ 
  echo "Data Dihapus"; 
  }
  else {
      echo "error";
  }
?>