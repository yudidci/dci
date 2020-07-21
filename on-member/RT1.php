<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Selamat datang, <?php echo $_SESSION['nama'] ?></title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<div class="card-body">
          <div style="overflow-x:auto;">
            <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
              <th>Nomor Referral</th>
              <th>Nama</th>
              <th>Jumlah Followers</th>
              <th>Detail</th>
              <th>Hapus</th>
              </tr>
              </thead>

                <tbody>

<?php

include '../config.php';
$table="status";
// kota
$querysql= "SELECT * from $table where id='1'";
// camat
$quesrycamat= "SELECT * from $table where id='2'";
$quesrylurah= "SELECT * from $table where id='3'";
$quesryrw= "SELECT * from $table where id='4'";
$quesryrt= "SELECT * from $table where id='5'";
$quesrywarga= "SELECT * from $table where id='6'";
// kota 
$result = $dbconnect->query($querysql);
// camat
$resultcamat = $dbconnect ->query($quesrycamat);
$resultlurah = $dbconnect ->query($quesrylurah);
$resultrt = $dbconnect ->query($quesryrt);
$resultrw = $dbconnect ->query($quesryrw);
$resultwarga = $dbconnect ->query($quesrywarga);
// kota
$b=$result->fetch_assoc();
// camat
$c=$resultcamat->fetch_assoc();
$d=$resultlurah->fetch_assoc();
$e=$resultrw->fetch_assoc();
$f=$resultrt->fetch_assoc();
$g=$resultwarga->fetch_assoc();
// kota 
$fdown=$f['batasbawah'];
$fup=$f['batasatas'];
$fetchnow = "SELECT * FROM full where followers_count>='$fdown' OR followers_count>='$fup'";
$fetchresult = $dbconnect ->query($fetchnow);
$h=$fetchresult->fetch_assoc();
// output data of each row
while($row = $fetchresult->fetch_assoc()){ 

  echo "<tr>
  <td>" . $row['reg_no'] . "</td>
  <td>" . $row['name'] . "</td>
  <td>" . $row['followers_count'] . "</td>
  <td>" ."<a href='../on-admin/detail.php?did=".$row['reg_no']."'>Detail</a>"."</td>
  <td>" ."<a href='../on-admin/delete.php?did=".$row['reg_no']."'>Hapus</a>"."</td>
  </tr>"; 
  }
  
?>
</tbody>
              </table>
              </html>

               <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>