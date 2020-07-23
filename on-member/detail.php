<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <style>

.next {
  background-color: #4CAF50;
  color: white;
}

.next:hover {
  background-color: #ddd;
  color: black;
}

</style>

</head>



 


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
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
                  <td>" ."<a href='../on-member/followers.php?did=".$row['reg_no']."'>".$row['followers_count']."</a>". "</td>
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