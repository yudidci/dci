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
              <th>NIK</th>
              <th>Tempat Lahir</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>

              </tr>
              </thead>

                <tbody>

<?php

include '../config.php';
$detail_id = ($_GET['did']);
$sql = "SELECT * from full where reg_no= '$detail_id'";
$result = $dbconnect->query($sql);
// output data of each row
while($row = $result->fetch_assoc()){ 
  echo "<tr>
  <td>" . $row['reg_no'] . "</td>
  <td>" . $row['name'] . "</td>
  <td>" . $row['followers_count'] . "</td>
  <td>" . $row['nik'] . "</td>
  <td>" . $row['dob_place'] . "</td>
  <td>" . $row['dob'] . "</td>
  <td>" . $row['road_name'] . "</td>
  </tr>"; 
  }
?>
</tbody>
              </table>
              </html>