<!DOCTYPE html>
<html>

  <?php
  session_start();
  
  if ( !isset($_SESSION['user_login']) || 
      ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'member' ) ) {
  
    header('location:./../login.php');
    exit();
  }
  ?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin Area</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="./favicon.ico" type="image/x-icon">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
  
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./../index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="img/OscoOk64.png" alt="Girl in a jacket" width="60" height="60">
        </div>
        <div class="sidebar-brand-text mx-3">Admin Area</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="./../index.php">
        <i class="fa fa-filter"></i>
          <span>Filter Member</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" id="klikblank" href="#klikblank">
          
        <i class="fa fa-table"></i>
          <span>Table Semua Member</span></a>
      </li>

                  <!-- Nav Item - Tables -->
            <li class="nav-item">
              <a class="nav-link" id="klikfollower" href="#klikfollower">
                <i class="fas fa-sort-numeric-up"></i>
                <span>Batas Follower</span></a>
            </li>

            <li class="nav-item">
        <a class="nav-link" id="klikpoint-" href="#klikpoint-">
          <i class="fa fa-cog fa-spin"></i>
          <span>Edit Poin</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
   

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hai, <?=$_SESSION['nama'];?></span>
                <img class="img-profile rounded-circle" src="./img/hiclipart.com.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid" id="dashboard">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-2 text-gray-800">Data Member</h1>
          </div>
            <div class="row">
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primar shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                       <img src="./img/hand.png" alt="img" style="width: 20%; ">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">BANGKIT </div>
                        <div class="h6 mb-0 font-weight-bold text-gray-700">Mampu bangkit kembali setiap <br>kali terjatuh</div>
                      </div>
                      <div class="col-auto">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
  
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-succes shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <img src="./img/pencil.png" alt="img" style="width: 20%; ">
                        <div class="h5 mb-0 font-weight-bold text-white-800">BEKERJA</div>
                        <div class="h6 mb-0 font-weight-bold text-white-700">Bekerja dengan ketekunan dan <br>kerja keras</div>
                      </div>
                      <div class="col-auto">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-inf shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <img src="./img/organic-food.png" alt="img" style="width: 20%; ">
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-white-800">BERKARYA</div>
                            <div class="h6 mb-0 mr-3 font-weight-bold text-white-700">Berkarya untuk berkontribusi dalam kehidupan</div>
                          </div>
                          <div class="col">
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              

            </div>




<div class="s008">

 

<form>

<!-- <a class="navbar-brand">CARI NIK BERDASARKAN TINGKATAN</a> -->
<div class="inner-form">

<div class="advance">
<div class="advance-search">
<p hidden>
          <form action="referral.php" method="post">  
          <input type="text" id="referral" name="referral" class="form-control" onkeypress="return hanyaAngka(event)"placeholder="Masukan Referral Number">
          <input type="submit" class="btn-follower" id="btn-referral" name="btn-referral" value="Search"/>
         </form>
  </p>  
         <form action="referral.php" method="post">  
         <input type="text" id="referral" name="referral" class="form-control" onkeypress="return hanyaAngka(event)"placeholder="Masukan Referral Number">
            <input type="submit" Value="Search" class="btn-follower">
          </form> 


 <!-- index -->
 
 <form action="filter.php" method="post">  
 <div class="row">
    <div class="input-field">
      <div class="tengah2">
        <h5 class="bawah"> Batas Bawah <i class="fas fa-sort-numeric-down"> </i></h5>
      </div>
    </div>
    <div class="input-field">
      <div class="input-select">
      <input type="text" name="batasbawah" id="batasbawah" placeholder="Batas Bawah" >
      </div>
    </div>
    <div class="input-field">
      <div class="tengah">
       <h5 class="atas"> Batas Atas <i class="fas fa-sort-numeric-up"> </i></h5>
      </div>
    </div>
    <div class="input-field">
      <div class="kiri">
      <input type="text" name="batasatas" id="batasatas" placeholder="Batas Atas" >
      </div>
    </div>
    <div class="input-field">
      <div class="input-select">
      <input class="btn-search" type="submit" Value="Search">
        
      </div>
    </div>
    </div>
  </form> 

   

<!-- end dropdown menu here -->


<div class="basic-search">
<div align="center">
<!-- <button class="btn btn-primary ml-2" a href='kota.php' type="button" >Filter NIK Kota <i class="fa fa-search"></i></button> -->
<a href='kota.php' class="btn btn-primary ml-2">Filter NIK Kota</a>
<!-- <button class="btn btn-primary ml-2" type="button" id="btn-camat">Filter NIK Camat <i
    class="fa fa-search"></i></button> -->
<a href='camat.php' class="btn btn-primary ml-2">Filter NIK Camat</a>
<!-- <button class="btn btn-primary ml-2" type="button" id="btn-lurah">Filter NIK Lurah <i
    class="fa fa-search"></i></button> -->
<a href='lurah.php' class="btn btn-primary ml-2">Filter NIK Lurah</a>
<!-- <button class="btn btn-primary ml-2" type="button" id="btn-RW">Filter NIK RW <i
    class="fa fa-search"></i></button> -->
<a href='rw.php' class="btn btn-primary ml-2">Filter NIK RW</a>
<!-- <button class="btn btn-primary ml-2" type="button" id="btn-RT">Filter NIK RT <i
    class="fa fa-search"></i></button> -->
<a href='RT.php' class="btn btn-primary ml-2">Filter NIK RT</a>
<!-- <button class="btn btn-primary ml-2" type="button" id="btn-warga">Filter NIK Warga <i
    class="fa fa-search"></i></button> -->
<a href='warga.php' class="btn btn-primary ml-2">Filter NIK Warga</a>
</div>
</div>


<div class="row" id="movie-list">
  <div class="col-md-4 mb-3 nikKota">
  </div>
  <div class="row" id="camat-list">
    <div class="col-md-4 mb-3 nikCamat">
    </div>
    <div class="row" id="lurah-list">
      <div class="col-md-4 mb-3 nikLurah">
      </div>
      <div class="row" id="RW-list">
        <div class="col-md-4 mb-3 nikRW">
        </div>
        <div class="row" id="RT-list">
          <div class="col-md-4 mb-3 nikRT">
          </div>
          <div class="row" id="warga-list">
            <div class="col-md-4 mb-3 nikWarga">
            </div>
            <div class="row" id="tingkatan-list">
              <div class="col-md-4 mb-3 nikTingkatan">
              </div>
              <div class="row" id="filter-list">
                <div class="col-md-4 mb-3 filterList">
                </div>

            </div>
          </div>
        </div>
        </div>

      </div>
    </div>
    </form>

    
    
    <!-- End of Footer -->

  </div>
 
  <!-- End of Content Wrapper -->

</div>
</div>
</div>
</div>
</div>
               

                </div>


      <div class="container-fluid"  id="blank">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Table List Member</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            
            
          </div>
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
              <th>Delete</th>
              </tr>
              </thead>

                <tbody>
                <!-- list all member -->
                <?php
                include '../configtoo.php';
                // list all member query
                $fetchnow = "SELECT * FROM full";
                $fetchresult = $dbconnect ->query($fetchnow);

                // output data of each row
                while($row = $fetchresult->fetch_assoc()){ 
                  echo "<tr>
                  <td>" . $row['reg_no'] . "</td>
                  <td>" . $row['name'] . "</td>
                  <td>" ."<a href='../on-member/followers.php?did=".$row['reg_no']."'>".$row['followers_count']."</a>". "</td>
                  <td>" ."<a href='../on-member/detail.php?did=".$row['reg_no']."'>Detail</a>"."</td>
                  <td>" ."<a href='../on-member/delete.php?did=".$row['reg_no']."'>Hapus</a>"."</td>
                  </tr>"; 
                  }
                ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>
</div>

      </div> 
  


<div class="container-fluid" id="follower">
<h1 class="h3 mb-2 text-gray-800">Edit Batas Follower</h1>
<!-- DataTales Example -->

<div class="container">
  <div class="roww">
   
    <div class="col-md-4">
      <div class="card2 card-2">
      <form method="post">
          <p class="judul">Batas Follower</p> 
          <select class="tingkatan" id="tingkatan" name="tingkatan">
          <option value="1">Kota</option>
              <option value="2">Camat</option>
              <option value="3">Lurah</option>
              <option value="4">RW</option>
              <option value="5">RT</option>
              <option value="6">Warga</option>
            </select></p>
            <div class="column">
            <input type="text" id="batasbawah" name="batasbawah" onkeypress="return hanyaAngka(event)"><br>
          </div>
          <div class="column">
            <select id="cars" name="cars">
            <option value="lk"><</option>
              <option value="lb">></option>
              <option value="lbs">≥</option>
              <option value="audi">≤</option>
            </select>
          </div>
          <div class="column2">
            <input type="text" id="batasatas" name="batasatas" onkeypress="return hanyaAngka(event)"><br>
          </div>
          <input type="submit" class="updt-follower" id="updt-follower" name="updt-follower"value="Update"/>
         </form>
         <?php
        if(isset($_POST['updt-follower']))
        {
          include'../configpict.php';
          $batasbawah=$_POST['batasbawah'];
          $batasatas=$_POST['batasatas'];
          $tingkatan=$_POST['tingkatan'];

          
        
          $sql="UPDATE status SET batasbawah='$batasbawah', batasatas='$batasatas' WHERE id='$tingkatan'";
          if($dbconnect->query($sql) === false)
          { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
            trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $dbconnect->error, E_USER_ERROR);
          }  
          else 
          { // Jika berhasil alihkan ke halaman tampil.php
            echo "<script>alert('Range status telah berhasil diubah!')</script>";
            echo "<meta http-equiv=refresh content=\"0; url=./index.php\">";
          }
        }
        
        ?>   
      </div>
<br>
</br>
      <!-- table poin followers -->
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
              <th>Tingkat</th>
              <th>Batas Bawah</th>
              <th>Batas Atas</th>

              </tr>
              </thead>

                <tbody>

              <?php
              include '../configsdk.php';
              $sqlfollowers = "SELECT * from status";
              $resultfollowers = $dbconnect->query($sqlfollowers);
              // output data of each row
              while($row = $resultfollowers->fetch_assoc()){ 
                echo "<tr>
                <td>" . $row['tingkatan'] . "</td>
                <td>" . $row['batasbawah'] . "</td>
                <td>" . $row['batasatas'] . "</td>
                </tr>"; 
                }
              ?>
              </tbody>
              </table>
      <!-- end table poin followers -->

    </div>
  </div>
</div>
<!-- 
        <div class="row1">
        <div class="card1">
 
        <form method="post">
          <p class="judul">Batas Follower <select id="tingkatan" name="tingkatan">
            <option value="1">Kota</option>
              <option value="2">Camat</option>
              <option value="3">Lurah</option>
              <option value="4">RW</option>
              <option value="5">RT</option>
              <option value="6">Warga</option>
            </select></p>
          
          <div class="column">
            <input type="text" id="batasbawah" name="batasbawah" onkeypress="return hanyaAngka(event)"><br>
          </div>
          <div class="column">
            <select id="cars" name="cars">
            <option value="lk"><</option>
              <option value="lb">></option>
              <option value="lbs">≥</option>
              <option value="audi">≤</option>
            </select>
          </div>
          <div class="column">
            <input type="text" id="batasatas" name="batasatas" onkeypress="return hanyaAngka(event)"><br>
          </div>
          <input type="submit" class="updt-follower" id="updt-follower" name="updt-follower"value="Update"/>
         </form>
          <!-- <?php
        // if(isset($_POST['updt-follower']))
        // {
        //   include'../configpict.php';
        //   $batasbawah=$_POST['batasbawah'];
        //   $batasatas=$_POST['batasatas'];
        //   $tingkatan=$_POST['tingkatan'];
        
        //   $sql="UPDATE status SET batasbawah='$batasbawah', batasatas='$batasatas' WHERE id='$tingkatan'";
        //   if($dbconnect->query($sql) === false)
        //   { 
        //     trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $dbconnect->error, E_USER_ERROR);
        //   }  
        //   else 
        //   { 
        //     echo "<script>alert('Range status telah berhasil diubah!')</script>";
        //     echo "<meta http-equiv=refresh content=\"0; url=./index.php\">";
        //   }
        // }
        
        ?>   
        </div> -->
</div>
</div>

     
  
<div class="container-fluid" id="point">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Poin</h1>

<!-- Content Row -->
<div class="row2">

  <div class="col-xl-4 col-lg-7">
    <!-- Area Chart -->

    <div class="card4 shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold1 text-primary">Bonus 1</h6>
      </div>
      <?php
include '../config.php';
// list all member query
$fetchnow = "SELECT * FROM full";
$fetchresult = $dbconnect ->query($fetchnow);
$querypoin1 = "SELECT * from file where id=1";		
 $result1 = $dbconnect->query($querypoin1);		
 $file1=$result1->fetch_assoc();		
 $querypoin2 = "SELECT * from file where id=2";		
 $result2 = $dbconnect->query($querypoin2);		
 $file2=$result2->fetch_assoc();		
 $querypoin3 = "SELECT * from file where id=3";		
 $result3 = $dbconnect->query($querypoin3);		
 $file3=$result3->fetch_assoc();		
 $querypoin4 = "SELECT * from file where id=4";		
 $result4 = $dbconnect->query($querypoin4);		
 $file4=$result4->fetch_assoc();		
 $querypoin5 = "SELECT * from file where id=5";		
 $result5 = $dbconnect->query($querypoin5);		
 $file5=$result5->fetch_assoc();		
 $querypoin6 = "SELECT * from file where id=6";		
 $result6 = $dbconnect->query($querypoin6);		
 $file6=$result6->fetch_assoc();
if(isset($_POST['simpan']))
{
    //periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
      $nama_file=$_POST['jdl'];
      $poin=$_POST['poin'];
      $idpoin=$_POST['idpoin'];
      $ukuran=$_FILES['gmbr']['size'];
      $jenis_gambar=$_FILES['gmbr']['type'];  
      if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
      {
          //periksa jika data yang dimasukan belum lengkap
          if ($nama_file=="")
          {
            //jika ada inputan yang kosong
            ?><script>alert('Lengkapi Data Anda belum lengkap');</script><?php
            ?><script>document.location.href='index.php?page=tambah_slide';</script><?php
          }
          else
          {
            //definisikan variabel file dan alamat file
            // $uploaddir='./../img/slide/';
            $uploaddir='../img/';

            $alamatfile=$uploaddir.$_FILES['gmbr']['name'];;              
            //periksa jika proses upload berjalan sukses
            if (move_uploaded_file($_FILES['gmbr']['tmp_name'],$alamatfile))
            {
              //jika berhasil  
              //catat data file yang berhasil di upload
              $sql="UPDATE file set nama='$nama_file',url='$alamatfile',poin='$poin' WHERE id='$idpoin'";
              if($dbconnect->query($sql) === false)
              { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
              trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $dbconnect->error, E_USER_ERROR);
              }  
              else 
              { // Jika berhasil alihkan ke halaman tampil.php
              echo "<script>alert('Berhasil Menyimpan!')</script>";
              echo "<meta http-equiv=refresh content=\"0; url=index.php?page=tabel_slide\">";
              }
            }
            else
            {
              //jika gagal
              echo "Proses upload gagal, kode error = " . $_FILES['location']['error'];
            }
          }
        }
        else
        {
          ?><script language="javascript">alert('Gambar harus berformat .jpg .png .gif');</script><?php  
          ?><script>document.location="index.php?page=tambah_galeri";</script><?php  
        }          
    }
?>
<form action="" method="POST" enctype="multipart/form-data"/>
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input class="editinput" id="cname" name="jdl" minlength="5" type="text" required placeholder="<?=$file1['nama'];?>"/><br>
  <label  class="editpoin" for="fname" >Edit poin :</label>
  <input type="hidden" name="idpoin" value="1" />
  <input class="editinput" id="cname" name="poin" type="text" required placeholder="<?=$file1['poin'];?>"/><br>
  ​<label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="gmbr" required>
  <input class="submit" name="simpan" type="submit">
</form> 

      </div>

      <div class="card4 shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold1 text-primary">Bonus 4</h6>
      </div>
      <form action="" method="POST" enctype="multipart/form-data"/>
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input class="editinput" id="cname" name="jdl" minlength="5" type="text" required placeholder="<?=$file4['nama'];?>"/><br>
  <label  class="editpoin" for="fname" >Edit poin :</label>
  <input type="hidden" name="idpoin" value="4" />
  <input class="editinput" id="cname" name="poin" type="text" required placeholder="<?=$file5['poin'];?>"/><br>
  ​<label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="gmbr" required>
  <input class="submit" name="simpan" type="submit">
</form> 

  </div>
  </div>

  <div class="col-xl-4 col-lg-7">
<!-- Area Chart -->
<div class="card4 shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold1 text-primary">Bonus 2</h6>
</div>

<form action="" method="POST" enctype="multipart/form-data"/>
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input class="editinput" id="cname" name="jdl" minlength="5" type="text" required placeholder="<?=$file2['nama'];?>"/><br>
  <label  class="editpoin" for="fname" >Edit poin :</label>
  <input type="hidden" name="idpoin" value="2" />
  <input class="editinput" id="cname" name="poin" type="text" required placeholder="<?=$file2['poin'];?>"/><br>
  ​<label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="gmbr" required>
  <input class="submit" name="simpan" type="submit">
</form> 

</div>

<div class="card4 shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold1 text-primary">Bonus 5</h6>
</div>
<form action="" method="POST" enctype="multipart/form-data"/>
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input class="editinput" id="cname" name="jdl" minlength="5" type="text" required placeholder="<?=$file5['nama'];?>"/><br>
  <label  class="editpoin" for="fname" >Edit poin :</label>
  <input type="hidden" name="idpoin" value="5" />
  <input class="editinput" id="cname" name="poin" type="text" required placeholder="<?=$file5['poin'];?>"/><br>
  ​<label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="gmbr" required>
  <input class="submit" name="simpan" type="submit">
</form>  

</div>
</div>

  <!-- Donut Chart -->
  <div class="col-xl-4 col-lg-5">
    <div class="card4 shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold1 text-primary">Bonus 3</h6>
      </div>
      <!-- Card Body -->
    
      <form action="" method="POST" enctype="multipart/form-data"/>
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input class="editinput" id="cname" name="jdl" minlength="6" type="text" required placeholder="<?=$file3['nama'];?>"/><br>
  <label  class="editpoin" for="fname" >Edit poin :</label>
  <input type="hidden" name="idpoin" value="3" />
  <input class="editinput" id="cname" name="poin" type="text" required placeholder="<?=$file3['poin'];?>"/><br>
  ​<label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="gmbr" required>
  <input class="submit" name="simpan" type="submit">
</form> 

  
      
    </div>
      <div class="card4 shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold1 text-primary">Bonus 6</h6>
        </div>
        <!-- Card Body -->
        <form action="" method="POST" enctype="multipart/form-data"/>
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input class="editinput" id="cname" name="jdl" minlength="7" type="text" required placeholder="<?=$file6['nama'];?>"/><br>
  <label  class="editpoin" for="fname" >Edit poin :</label>
  <input type="hidden" name="idpoin" value="6" />
  <input class="editinput" id="cname" name="poin" type="text" required placeholder="<?=$file6['poin'];?>"/><br>
  ​<label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="gmbr" required>
  <input class="submit" name="simpan" type="submit">
</form> 

      </div>
  </div>
</div>
</div>
</div>


 <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apa Anda Ingin Keluar Halaman Admin?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" di bawah ini untuk mengakhiri sesi Anda saat ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="./../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

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


  <script>
    $(document).ready(function(){
    $("#klikidentitas").click(function(){
      $("#identitas").css("display","block")
      $("#ketentuan").css("display","none")
      $("#dashboard").css("display","none")
      $("#follower").css("display","none")
      $("#point").css("display","none")
   })
  })
  </script>

<script>
  $(document).ready(function(){
  $("#klikidentitas-").click(function(){
    $("#identitas").css("display","block")
    $("#ketentuan").css("display","none")
    $("#dashboard").css("display","none")
    $("#follower").css("display","none")
    $("#point").css("display","none")
 })
})
</script>

<script>
  $(document).ready(function(){
  $("#klikketentuan").click(function(){
    $("#ketentuan").css("display","block")
    $("#identitas").css("display","none")
    $("#dashboard").css("display","none")
    $("#follower").css("display","none")
    $("#point").css("display","none")
 })
})
</script>

<script>
  $(document).ready(function(){
  $("#klikketentuan-").click(function(){
    $("#ketentuan").css("display","block")
    $("#identitas").css("display","none")
    $("#dashboard").css("display","none")
    $("#follower").css("display","none")
    $("#point").css("display","none")
 })
})
</script>

<script>
  $(document).ready(function(){
  $("#klikblank").click(function(){
    $("#blank").css("display","block")
    $("#ketentuan").css("display","none")
    $("#identitas").css("display","none")
    $("#dashboard").css("display","none")
    $("#follower").css("display","none")
    $("#point").css("display","none")
 })
})
</script>

<script>
  $(document).ready(function(){
  $("#klikfollower").click(function(){
    $("#follower").css("display","block")
    $("#blank").css("display","none")
    $("#ketentuan").css("display","none")
    $("#identitas").css("display","none")
    $("#dashboard").css("display","none")
    $("#point").css("display","none")
 })
})
</script>

<script>
  $(document).ready(function(){
  $("#klikpoint-").click(function(){
    $("#point").css("display","block")
    $("#follower").css("display","none")
    $("#blank").css("display","none")
    $("#ketentuan").css("display","none")
    $("#identitas").css("display","none")
    $("#dashboard").css("display","none")
 })
})
</script>
</body>

</html>
