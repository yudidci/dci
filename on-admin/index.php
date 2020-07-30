  <?php
// Start the session
session_start();

if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'admin' ) ) {

	header('location:./../login.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<!-- notification -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<!-- end notif -->
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
        <div class="sidebar-brand-text mx-3">Member Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="./../index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu utama
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Modul User</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item" id="klikidentitas" href="#klikidentitas">Identitas</a>
            <a class="collapse-item" id="klikblank" href="#klikblank">Visi & Misi</a>
            <a class="collapse-item" id="klikketentuan" href="#klikketentuan">Syarat & Ketentuan</a>
          </div>
        </div>
      </li>



      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
        <a class="nav-link" id="klikpoint-" href="#klikpoint-">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Point</span></a>
      </li>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
              <a class="nav-link" id="klikfollower" href="#klikfollower">
                <i class="fas fa-fw fa-table"></i>
                <span>Follower</span></a>
            </li>
            
      <li class="nav-item">
              <a class="nav-link" href="../forgot-password.php">
                <i class="fa fa-key"></i>
                <span>Lupa Password</span></a>
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
<!-- notification -->
          <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
      <!-- <i class="fa fa-bell"></i> -->
       <a href="#" class="fa fa-bell" data-toggle="dropdown" style="margin-top: 25px;">
       <span class="label label-pill label-danger count" style="border-radius:10px;"></span>
       <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
       <ul class="dropdown-menu1"></ul>
      </li>
     </ul>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hai, <?=$_SESSION['nama'];?></span>
                <img class="img-profile rounded-circle" src="./img/hiclipart.com.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" id="klikidentitas-" href="#klikidentitas-">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Profile
                </a>
                <a class="dropdown-item" id="klikketentuan-" href="#klikketentuan-">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  SKU
                </a>
                <div class="dropdown-divider"></div>
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
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
            <div class="row">

              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Follower Anda</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$_SESSION['followers'];?> </div>
                      </div>
                      <div class="col-auto">
                      <i class="fa fa-users fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
  
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Mobil Pendukung Osco</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">473</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-car fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kecamatan Pendukung</div>
                        <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">12</div>
                          </div>
                          <div class="col">
                            <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fa fa-handshake fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Pending Requests Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kelurahan Pendukung</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">64</div>
                      </div>
                      <div class="col-auto">
                        <i class="fa fa-asl-interpreting fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
               
            <div class="row">
  
              <!-- Area Chart -->
              <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h3 class="osco-title">PROGRAM OSCO</h3>
                    <div class="dropdown no-arrow">
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                  <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 osco-program-box">
          <div class="mu-features-area">
            <!-- Start Title -->
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">

                <div class=" col-sm-12 text-center">
                  <div class="mu-single-feature">

                    <div class="row">
                      <div class="col-sm-4 icon-box">
                        <img src="./img/iconPendidikanVokasi.png" alt="img" style="width: 50%; ">
                        <h5>Pendidikan Vokasi</h5>
                      </div>
                      <div class="col-sm-4 icon-box">
                        <img src="./img/iconIndusKesehatan.png" alt="img" style="width: 50%; ">
                        <h5>Industrialisasi Kesehatan</h5>
                      </div>
                      <div class="col-sm-4 icon-box">
                        <img src="./img/iconPelatihanKewira.png" alt="img" style="width: 50%; ">
                        <h5>Pelatihan Kewirausahaan</h5>
                      </div>
                    </div>
                    <div class="row" style="margin-top: 65px;">
                      <div class="col-sm-4 icon-box">
                        <img src="./img/iconPameranSeni.png" alt="img" style="width: 50%; ">
                        <h5>Pameran Seni Budaya</h5>
                      </div>
                      <div class="col-sm-4 icon-box">
                        <img src="./img/iconPelatihanAtlet.png" alt="img" style="width: 50%; ">
                        <h5>Pelatihan Atlet</h5>
                      </div>
                      <div class="col-sm-4 icon-box">
                        <img src="./img/iconSportTour.png" alt="img" style="width: 50%; ">
                        <h5>Sport Tourism</h5>
                      </div>
                    </div>
                    <br>


                  </div>
                </div>
              </div>
            </div>
            <!-- End features content -->
          </div>
        </div>
      </div>
    </div>
                  </div>
                </div>
              </div>
  
              <!-- Pie Chart -->
              <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"> #MASKERUNTUKSEMUA</h6>
                    <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                    </div>
                  </div>
                  <!-- Card Body -->
                  <div class="card-body">
                   <img src="./img/masker.png" alt="img" style="width: 100%; ">
                      <div class="h5 text-center font-weight-bold text-gray-800">25000</div>
                      <div class="text-primar text-center">SUDAH DIBAGIKAN SAMPAI SAAT INI</div>
                  </div>
                </div>
              </div>
            </div>


      </div>
      <!-- End of Main Content -->   
      <div  id="identitas">
        <div class="container-fluid">
        <?php
include '../configtoo.php';
// $nik=$_SESSION['sess_id'];
$a=mysqli_query($dbconnect,"SELECT * FROM full WHERE nik='$_SESSION[sess_id]'");
$b=mysqli_fetch_array($a,MYSQLI_ASSOC)
?>
        <form method="post">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Identitas</h1>
          <div class="mb-4">Edit Data Member</div>
  
          <div class="row">
             
              </div>
  
              <!-- Brand Buttons -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Nama</h6>
                </div>
                <div class="col-sm-10">
                <input type="text" name="name" placeholder="Insert Name" value="<?=$b['name'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">NIK</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="nik" name="nik" value="<?=$b['nik'];?>"><br>
                </div>
                </div>
              </div>
              <!-- <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Password</h6>
                </div>
                <div class="col-sm-10">
                <div class="wrap-input100 validate-input" style="margin-bottom: -20px;" data-validate = "Password is required"></div>
                                <span class="btn-show-pass">
                                  <i class="fa fa-eye"></i>
                                </span>
                                <input class="input100" name="password" disabled="disabled" id="password" type="password" required pattern="[A-Za-z0-9\s]{6,}" value="<?=$_SESSION['password'];?>"><br>
                                <span class="focus-input100"></span>
                </div>
                </div>
              </div> -->
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Nomor Referral</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="ref" name="red" value="<?=$_SESSION['reg_no'];?>" readonly><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Tempat Lahir</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="dob_place" name="dob_place" value="<?=$b['dob_place'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Tanggal Lahir</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="dob" name="dob" value="<?=$b['dob'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Jenis Kelamin</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="gender" name="gender" value="<?=$b['gender'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Status Perkawinan</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="marital" name="marital" value="<?=$b['marital'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Alamat</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="road_name" name="road_name" value="<?=$b['road_name'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">RT</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="rt" name="rt" value="<?=$b['rt'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">RW</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="rw" name="rw" value="<?=$b['rw'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Kelurahan</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="desa" name="desa" value="<?=$b['desa'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Kecamatan</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="kec" name="kec" value="<?=$b['kec'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Agama</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="agama" name="agama" value="<?=$b['agama'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Pekerjaan</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="job" name="job" value="<?=$b['job'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Kewarga Negaraan</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="nationality" name="nationality"value="<?=$b['nationality'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Nomor Telepon</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="phone" name="phone" value="<?=$b['phone'];?>"><br>
                </div>
                </div>
                
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Email</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="email" name="email" value="<?=$b['email'];?>"><br>
                </div>
                </div>
           
                
              </div>
  
  
        </div>
        <!-- /.container-fluid -->
        <button class="button2" name="updateprofile">Update</button>
        <!-- <input type="submit" class="button2" name="updateprofile" value="Update"> -->
        <!-- <input type="submit" name="update_profile" value="Update Profile" /> -->
      </div>
      </div>
</form>
<?php
if(isset($_POST['updateprofile']))
{
  include '../configtoo.php';
                             $dob_place=$_POST['dob_place'];
                             $gender=$_POST['gender'];
                             $dob=$_POST['dob'];
                             $road_name=$_POST['road_name'];
                             $rt=$_POST['rt'];
                             $rw=$_POST['rw'];
                             $desa=$_POST['desa'];
                             $kec=$_POST['kec'];
                             $agama=$_POST['agama'];
                             $marital=$_POST['marital'];
                             $job=$_POST['job'];
                             $nationality=$_POST['nationality'];
                             $nik=$_POST['nik'];
                             $name=$_POST['name'];
                             $phone=$_POST['phone'];
                             $email=$_POST['email'];

  $nik=$_SESSION['sess_id'];


  $sql="UPDATE full SET dob_place = '$dob_place', dob = '$dob', gender = '$gender', road_name = '$road_name', rt = '$rt', rw = '$rw' ,desa ='$desa', kec ='$kec', agama ='$agama', marital ='$marital', job ='$job', nationality ='$nationality',  nik = '$nik', name = '$name', phone='$phone', email='$email' WHERE nik='$nik'";
  if($dbconnect->query($sql) === false)
  { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $dbconnect->error, E_USER_ERROR);
  }  
  else 
  { // Jika berhasil alihkan ke halaman tampil.php
    echo "<script>alert('Profil berhasil diubah! Silakan Login Kembali')</script>";
  	echo "<meta http-equiv=refresh content=\"0; url=./../logout.php\">";
  }
}
?>
   
      <div class="container-fluid"  id="blank">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Visi & Misi </h1>
     </div>
     <div class="row">
        <div class="row">

          <div class="col-lg-7">

            <!-- Default Card Example -->
            <div class="card mb-4">
              <div class="card-header">
              <h3 class="osco-visi">VISI</h3>
              </div>
              <div class="card-body">
                <p class="impact">"Terwujudnya Batam Bermatabat yang kuat, berdaulat, mandiri, inovatif dan berkepribadian, 
                  belandaskan gotong-royong dengan semangat baru untuk berkarya"..
                </p>
              </div>
            </div>

            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h3 class="osco-visi">MISI</h3>
              </div>
              <div class="card-body">
              <p class="impact">✓ Meningkatkan Kualitas Sumber Daya Manusia<p>
              <p class="impact"> ✓ Mengembangkan Sistem Pendidikan dan Kesehatan yang Modern</p>
              <p class="impact">✓ Memajukan Kualitas dan Kuantitas Industri dan Dunia Usaha</p>
              <p class="impact">✓ Menjaga Kesetaraan Gender dan pemberdayaan Perempuan</p>
              <p class="impact">✓ Mengedepankan Kebijikan Tata Ruang yang Terintegrasi</p>
              <p class="impact">✓ Mendorong Kemajuan Seni Budaya dan Pariwsata</p>
              <p class="impact">✓ Meningkatkan Prestasi Olah Raga</p>
              <img src="./img/sahabatosco.jpg" class="img-fluid" alt="">
              <h5 class="osco-future">"HARAPAN BATAM PERJUANGAN OSCO"</h5>
              </div>
            </div>

          </div>

          <div class="col-lg-5">

            <!-- Dropdown Card Example -->
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h2 class="mu-title">Profile Osco</h2>
              </div>
              <!-- Card Body -->
              <div class="card-body">
              <h5 class="osco">Osco Olfriady Letunggamu, M.Sc.</h5>
              <p class="impact">CALON WAKIL WALIKOTA BATAM 2020</p>
              <img src="./img/osco-puasa.jpg" class="img-fluid" alt="">
              <p class="impac">✓ Warga Batam dan mempunyai KTP Batam.</p>
              <p class="impac">✓ Lulusan tercepat di Jerman, lulus Sarjana dalam 2 tahun 3 bulan.</p>
              <p class="impac">✓ Ketua Komite Eropa & Rusia KADIN Indonesia.</p>
              <p class="impac">✓ Wakil Ketua KADIN Indonesia Bidang Ekonomi dan Industri Kreatif.</p>
              <p class="impac">✓ Executive Advisior Indonesia Business Council NSW Australia.</p>
              <p class="impac">✓ Senior Advisor Indonesia Diaspora Network Australia.</p>
              <p class="impac">✓ Dewan Ahli IKRAR</p>
              <p class="impac">✓ Bendahara Umum Equestrian Indonesia Raya EQUINARA</p>
              <p class="impac">✓ Wakil Bendahara Umum Persatuan Olahraga Berkuda Indonesia</p>
              <p class="impac">✓ Wakil Bendahara Umum Persatuan Olahraga Berkuda Indonesia</p>
              <p class="impac">✓ Wakil Bendahara Umum Persatuan Olahraga Berkuda Indonesia</p>
              <p class="impac">✓ Wakil Bendahara Umum Persatuan Olahraga Berkuda Indonesia</p>
              <p class="impac">✓ Ketua Umum Perhimpunan Alumni Jerman.</p>
              <p class="slogan">"SEMANGAT BARU UNTUK BERKARYA"</p>
              </div>
            </div>

           

        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
      </div>

 

      <div class="container-fluid" id="ketentuan">
      <h1 class="h3 mb-2 text-gray-800">Syarat Dan Ketentuan</h1>
      <div class="card mb-4">
  <div class="card-body">
  <p class="judul">Pengenalan</p>
  <p class="pengenalan">Dalam menggunakan layanan web ini, Pengguna setuju untuk mengikatkan diri, tunduk pada dan melaksanakan syarat-syarat dan ketentuan-ketentuan penggunaan layanann web ("Ketentuan Layanan Sahabat OSCO"), sebagai berikut:
</p>
    <p class="pengenalan">Dengan menjadi member osco ("Sahabat Osco"") 
      berarti Anda telah setuju dengan Syarat dan Ketentuan Layanan 
      (untuk selanjutnya disebut "Syarat dan Ketentuan") berikut ini. 
      Anda bisa melihat Syarat dan Ketentuan secara lengkap di halaman ini. 
      Segala macam fitur baru yang ada pada Layanan akan terikat dengan Syarat dan Ketentuan ini.
      Admin memiliki hak untuk melakukan perubahan sewaktu-waktu. 
      Di sarankan Anda untuk membaca Syarat dan Ketentuan ini secara periodik untuk melihat perubahan-perubahan yang dibuat.
    </p>
    <p class="judul">Bagian I - Akun</p>
    <p class="pengenalan1">1. Anda harus berumur minimal 16 tahun ketika mendaftar member osco</P>
    <p class="pengenalan1">2. Anda wajib memberikan nama lengkap dan jelas, alamat, alamat email yang valid dan informasi lain yang dibutuhkan dalam pendaftaran layanan Sahabat OSCO</P>
    <p class="pengenalan1">3. Anda berkewajiban untuk menjaga kemanan password Anda, Osco tidak akan bertanggung jawab pada kerugian dan kerusakan yang timbul akibat ketidak mampuan Anda dalam menjaga keamanan password Anda.</P>
    <p class="pengenalan1">4. Anda tidak diijinkan menggunakan Web ini untuk aktifitas ilegal dan melanggar hukum/undang-undang (termasuk undang-undang hak cipta) di wilayah Anda dan/ataupun wilayah hukum Indonesia.</P>
    <p class="pengenalan1">5. Anda dilarang mengirimkan segalam macam worm, virus, kode yang bersifat merusak.</p>
    <p class="pengenalan1">6. Pelanggaran akan ketentuan ini akan mengakibatkan dihentikannya akun Anda.</p>
    <p class="judul">Bagian II - Syarat Umum</p>
    <p class="pengenalan1">1. Admin area OSCO memiliki hak untuk mengubah atau membatalkan Layanan ini dengan alasan apapun dan tanpa pemberitahuan sebelumnya</p>
    <p class="pengenalan1">2. Admin area OSCO memiliki hak untuk menolak memberikan layanan ini setiap saat pada siapapun dengan alasan apapun</p>
    <p class="pengenalan1">2. Resiko penggunaan Layanan ini adalah resiko Anda. Layanan ini disediakan seperti apa adanya tanpa jaminan apapun, tersurat ataupun tersirat</p>
    <p class="pengenalan1">3. OSCO tidak menjamin Layanan ini tidak akan mengalami gangguan, tepat waktu, aman ataupun bebas dari kesalahan</p>
    <p class="pengenalan1">4. OSCO tidak menjamin segala hal yang dihasilkan dari penggunaan Layanan akan akurat atau bisa diandalkan</p>

</div>
      <div class="card-body">
      <div style="overflow-x:auto;">
            <div class="table-responsive">
              <table class="table table-border" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th><center>Keterangan</center></th>
                    <th><center>Follower</center></th>
                  </tr>
                </thead>
                <tbody>
                <!-- new query -->
                <?php
                  include '../configsdk.php';
                  $table="status";
                  $querysql= "SELECT * from $table where id='1'";
                  $quesrycamat= "SELECT * from $table where id='2'";
                  $quesrylurah= "SELECT * from $table where id='3'";
                  $quesryrw= "SELECT * from $table where id='4'";
                  $quesryrt= "SELECT * from $table where id='5'";
                  $quesrywarga= "SELECT * from $table where id='6'";
                  $result = $dbconnect->query($querysql);
                  $resultcamat = $dbconnect ->query($quesrycamat);
                  $resultlurah = $dbconnect ->query($quesrylurah);
                  $resultrt = $dbconnect ->query($quesryrt);
                  $resultrw = $dbconnect ->query($quesryrw);
                  $resultwarga = $dbconnect ->query($quesrywarga);
                  $b=$result->fetch_assoc();
                  $c=$resultcamat->fetch_assoc();
                  $d=$resultlurah->fetch_assoc();
                  $e=$resultrw->fetch_assoc();
                  $f=$resultrt->fetch_assoc();
                  $g=$resultwarga->fetch_assoc();
                  ?>
                  <!-- new variable -->
                <tr>
                    <td><div class="keterangan">Untuk mencapai tingkatan KOTA anda harus mempunyai<div></td>
                    <td><div class="box text-center"><?=$b['batasbawah'];?> <br>Follower</div></td>
                  </tr>
                <tr>
                    <td><div class="keterangan">Untuk mencapai tingkatan KECAMATAN anda harus mempunyai<div></td>
                    <td><div class="box text-center"><?=$c['batasbawah'];?> <br>Follower</div></td>
                  </tr>
                <tr>
                    <td><div class="keterangan">Untuk mencapai tingkatan KELURAHAN anda harus mempunyai<div></td>
                    <td><div class="box text-center"><?=$d['batasbawah'];?> <br>Follower</div></td>
                  </tr>
                <tr>
                    <td><div class="keterangan">Untuk mencapai tingkatan RW anda harus mempunyai<div></td>
                    <td><div class="box text-center"><?=$e['batasbawah'];?> <br>Follower</div></td>
                  </tr>
                <tr>
                    <td><div class="keterangan">Untuk mencapai tingkatan RT anda harus mempunyai<div></td>
                    <td><div class="box text-center"><?=$f['batasbawah'];?> <br>Follower</dic></td>
                  </tr>
                  <tr>
                    <td><div class="keterangan">Jika member baru anda akan menjadi tingkatan WARGA <div></td>
                    <td><div class="box text-center"><?=$g['batasbawah'];?> <br>Follower</div></td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
          </div>
      </div>
        </div>

      <div class="container-fluid" id="follower">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Table Follower</h1>
        <p class="mb-4">Di bawah ini adalah data table follower yang anda miliki :</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?=$_SESSION['followers'];?> Follower</h6>
           
          <!-- conditional status -->
            <?php
            include '../configfollowers.php';
            $querysql= "SELECT * from status where id='1'";
            $result = $dbconnect->query($querysql);
            $b=$result->fetch_assoc();
              $followers = $_SESSION['followers'];
              $var = "Peringkat anda saat ini adalah ";
            if ($followers >= $b['batasatas'] || $followers>= $b['batasbawah']) {
              echo "<p>".$var."Kota</p>"; 
            }
            elseif ($followers >= $c['batasatas'] || $followers>= $c['batasbawah']) {
              echo "<p>".$var. "camat</p>";
            }
            elseif ($followers >= $d['batasatas'] || $followers>= $d['batasbawah']) {
              echo "<p>".$var. "lurah</p>";
            }
            elseif ($followers >= $e['batasatas'] || $followers>= $e['batasbawah']) {
              echo "<p>".$var. "RW</p>";
            }
            elseif ($followers >= $f['batasatas'] || $followers>= $f['batasbawah']) {
              echo "<p>".$var. "RT</p>";
            }
            elseif ($followers >= $g['batasatas'] || $followers>= $g['batasbawah']) {
              echo "<p>".$var. "Warga</p>";
            }
            else {
              echo "<p>".$var. "Member Baru</p>";
            }
            ?>
            
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
              <th>Tingkat Followers</th>
              <th>Detail</th>
              </tr>
              </thead>

                <tbody>
              <?php
              include '../config.php';
              $sql = "SELECT * from full where referral= '$_SESSION[reg_no]'";
              $result = $dbconnect->query($sql);
              $querysql= "SELECT * from status where id='1'";
              $resultcondition = $dbconnect->query($querysql);
              $b=$resultcondition->fetch_assoc();
              // output data of each row
              while($row = $result->fetch_assoc()){ 
                echo "<tr> 
                <td>" . $row['reg_no'] . "</td> 
                <td>" . $row['name'] . "</td>
                <td>" . $row['followers_count'] . "</td> 
                <td>";
                if ($row['followers_count'] >= $b['batasatas'] || $row['followers_count']>= $b['batasbawah']) {
                  echo "<p>Kota</p>"; 
                }
                elseif ($row['followers_count'] >= $c['batasatas'] || $row['followers_count']>= $c['batasbawah']) {
                  echo "<p>Camat</p>"; 
                }
                elseif ($row['followers_count'] >= $d['batasatas'] || $row['followers_count']>= $d['batasbawah']) {
                  echo "<p>Lurah</p>"; 
                }
                elseif ($row['followers_count'] >= $e['batasatas'] || $row['followers_count']>= $e['batasbawah']) {
                  echo "<p>RW</p>"; 
                }
                elseif ($row['followers_count'] >= $f['batasatas'] || $row['followers_count']>= $f['batasbawah']) {
                  echo "<p>RT</p>"; 
                }
                elseif ($row['followers_count'] >= $g['batasatas'] || $row['followers_count']>= $g['batasbawah']) {
                  echo "<p>Warga</p>"; 
                }
                else {
                  echo "<p>Member Baru</p>";
                }
          
                    echo 
                //     "</td>
                // <td><button >Detail</button></td> 
                // "<tr> 

                // <td><a href=detailpage.php?id=" . $row['reg_no'] . "<button>View Details</button></a></td> 
                "<td><a href='detail.php?did=".$row['reg_no']."'>Detail</a></td>
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

      <div class="container-fluid" id="point">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">POIN</h1>
<h6 class="m-0 font-weight-bold text-primary1"><?=$_SESSION['followers'];?> FOLLOWER</h6>
<p class="mb-4">Tukar Follower anda dengan Hadiah di bawah ini</p>

<!-- Content Row -->
<div class="row">

  <div class="col-xl-4">
    <!-- Area Chart -->
    
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bonus 1</h6>
      </div>
        
         <div class="card-body">
         <div class="card3">
       <?php
       include '../configpict.php';
       $a = "SELECT * FROM file WHERE id='1'";
       $result = $dbconnect->query($a);
       $aa=$result->fetch_assoc();

       $b = "SELECT * FROM file WHERE id='2'";
       $result = $dbconnect->query($b);
       $bb=$result->fetch_assoc();

       $c = "SELECT * FROM file WHERE id='3'";
       $result = $dbconnect->query($c);
       $cc=$result->fetch_assoc();

       $d = "SELECT * FROM file WHERE id='4'";
       $result = $dbconnect->query($d);
       $dd=$result->fetch_assoc();

       $e = "SELECT * FROM file WHERE id='5'";
       $result = $dbconnect->query($e);
       $ee=$result->fetch_assoc();

       $f = "SELECT * FROM file WHERE id='6'";
       $result = $dbconnect->query($f);
       $ff=$result->fetch_assoc();

       
       ?>
       <form action="redeem.php" method="post">
            <img src="<?=$aa['url'];?>" alt="Avatar" style="width:100%; height: 168px; border-radius: 27px 27px 0px 0px;">
           
            <div class="centered"><span class="currDate"></span></div>
            <div class="container">
            <h5><b><?=$aa['nama'];?></b></h5>
                <p><?=$aa['poin'];?> Follower
                <input type="hidden" name="poin" id="poin" value="<?=$aa['poin'];?>" />
                <input type="hidden" name="hadiah" id="hadiah" value="<?=$aa['nama'];?>" />
                <div class="my-4 text-right"> <input type="submit" id="redeem" name="redeem" value="Tukar" <?php if ($_SESSION['followers'] < $aa['poin']){ ?> disabled <?php   }  ?> /></div>
                <!-- <div class="my-4 text-right"> <button class="button3">Tukar</button></div> -->
                </p>
            </div>
        </div>
        </div>
        </div>
        </form>

        


   



      <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bonus 2</h6>
      </div>
         <div class="card-body">
         <div class="card3">
         <form action="redeem.php" method="post">
              <img src="<?=$bb['url'];?>" alt="Avatar" style="width:100%; height: 168px; border-radius: 27px 27px 0px 0px;">
              <div class="centered"><span class="currDate"></span></div>
              <div class="container">
              <h5><b><?=$bb['nama'];?></b></h5>
                <p><?=$bb['poin'];?> Follower
                <input type="hidden" name="poin" value="<?=$bb['poin'];?>" />
                <!-- new to input -->
                <input type="hidden" name="hadiah" id="hadiah" value="<?=$bb['nama'];?>" />
                <div class="my-4 text-right"> <input type="submit" id="redeem" name="redeem" value="Tukar" <?php if ($_SESSION['followers'] < $bb['poin']){ ?> disabled <?php   }  ?> /></div>
            </p>
          </div>
        </div>
        </div>
      </div>
      </form>
  </div>

  <div class="col-xl-4">
<!-- Area Chart -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Bonus 3</h6>
</div>

<div class="card-body">
<div class="card3">
<form action="redeem.php" method="post">
<img src="<?=$cc['url'];?>" alt="Avatar" style="width:100%; height: 168px; border-radius: 27px 27px 0px 0px;">
 <div class="centered"><span class="currDate"></span></div>
  <div class="container">
  <h5><b><?=$cc['nama'];?></b></h5>
                <p><?=$cc['poin'];?> Follower
                <input type="hidden" name="poin" value="<?=$cc['poin'];?>" />
                <input type="hidden" name="hadiah" id="hadiah" value="<?=$cc['nama'];?>" />
                <div class="my-4 text-right"> <input type="submit" id="redeem" name="redeem" value="Tukar" <?php if ($_SESSION['followers'] < $cc['poin']){ ?> disabled <?php   }  ?> /></div>
              </form>
</div>
</div>
</div>
</div>

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Bonus 4</h6>
</div>
<div class="card-body">
<div class="card3">
<form action="redeem.php" method="post">
<img src="<?=$dd['url'];?>" alt="Avatar" style="width:100%; height: 168px; border-radius: 27px 27px 0px 0px;">
<div class="centered"><span class="currDate"></span></div>
<div class="container">
<h5><b><?=$dd['nama'];?></b></h5>
                <p><?=$dd['poin'];?> Follower
                <input type="hidden" name="poin" value="<?=$dd['poin'];?>" />
                <input type="hidden" name="hadiah" id="hadiah" value="<?=$dd['nama'];?>" />
                <div class="my-4 text-right"> <input type="submit" id="redeem" name="redeem" value="Tukar" <?php if ($_SESSION['followers'] < $dd['poin']){ ?> disabled <?php   }  ?> /></div>
              </form>
</div>
</div>
</div>
</div>
</div>

  <!-- Donut Chart -->
  <div class="col-xl-4">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bonus 5</h6>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="card3">
        <form action="redeem.php" method="post">
        <img src="<?=$ee['url'];?>" alt="Avatar" style="width:100%; height: 168px; border-radius: 27px 27px 0px 0px;">
          <div class="centered"><span class="currDate"></span></div>
          <div class="container">
          <h5><b><?=$ee['nama'];?></b></h5>
                <p><?=$ee['poin'];?> Follower
                <input type="hidden" name="poin" value="<?=$ee['poin'];?>" />
                <input type="hidden" name="hadiah" id="hadiah" value="<?=$ee['nama'];?>" />
                <div class="my-4 text-right"> <input type="submit" id="redeem" name="redeem" value="Tukar" <?php if ($_SESSION['followers'] < $ee['poin']){ ?> disabled <?php   }  ?> /></div>
              </form>
          </div>
        </div>
      </div>
  
      
    </div>
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Bonus 6</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="card3">
          <form action="redeem.php" method="post">
          <img src="<?=$ff['url'];?>" alt="Avatar" style="width:100%; height: 168px; border-radius: 27px 27px 0px 0px;">
            <div class="centered"><span class="currDate"></span></div>
            <div class="container">
            <h5><b><?=$ff['nama'];?></b></h5>
                <p><?=$ff['poin'];?> Follower
                <input type="hidden" name="poin" value="<?=$ff['poin'];?>" />
                <input type="hidden" name="hadiah" id="hadiah" value="<?=$ff['nama'];?>" />
                <div class="my-4 text-right"> <input type="submit" id="redeem" name="redeem" value="Tukar" <?php if ($_SESSION['followers'] < $ff['poin']){ ?> disabled <?php   }  ?> /></div>
              </form>
            </div>
          </div>
        </div>
    
        
      </div>

  </div>

</div>

</div>

</div>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>© 2020 Sahabat Osco | All rights reserved.</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

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

    <!-- Counter -->
    <script type="text/javascript" src="./js/waypoints.js"></script>
    <script type="text/javascript" src="./js/jquery.counterup.js"></script>
  
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="../on-admin/js/dataklik.js"></script>


  <script>
    $(document).ready(function(){
    $("#klikidentitas").click(function(){
      $("#identitas").css("display","block")
      $("#ketentuan").css("display","none")
      $("#dashboard").css("display","none")
      $("#follower").css("display","none")
      $("#point").css("display","none")
      $("#blank").css("display","none")
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
    $("#blank").css("display","none")
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
    $("#blank").css("display","none")
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
    $("#blank").css("display","none")
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
<!-- notification -->
<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu1').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>
</body>

</html>
