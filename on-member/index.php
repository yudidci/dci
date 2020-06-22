
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
<!DOCTYPE html>
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
<<<<<<< HEAD
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" id="klikpoint-" href="#klikpoint-">
          <i class="fa fa-filter"></i>
          <span>Filter</span></a>
=======
        <i class="fa fa-filter"></i>
          <span>Filter Member</span></a>
>>>>>>> test
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

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

        

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hai, <?=$_SESSION['nama'];?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
<<<<<<< HEAD
                <a class="dropdown-item" id="klikidentitas-" href="#klikidentitas-">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Profile
                </a>
       
                <div class="dropdown-divider"></div>
=======
>>>>>>> test
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
<<<<<<< HEAD
              
  
 
  


=======
>>>>>>> test
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
<<<<<<< HEAD

            </div>
               
            <div class="row">
  
              <!-- Area Chart -->
              <div class="col-xl-12 col-lg-7">
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
                        <img src="./img/iconPendidikanVokasi.png" alt="img" style="width: 35%; ">
                        <h5>Pendidikan Vokasi</h5>
                      </div>
                      <div class="col-sm-4 icon-box">
                        <img src="./img/iconIndusKesehatan.png" alt="img" style="width: 35%; ">
                        <h5>Industrialisasi Kesehatan</h5>
                      </div>
                      <div class="col-sm-4 icon-box">
                        <img src="./img/iconPelatihanKewira.png" alt="img" style="width: 35%; ">
                        <h5>Pelatihan Kewirausahaan</h5>
                      </div>
                    </div>
                    <div class="row" style="margin-top: 65px;">
                      <div class="col-sm-4 icon-box">
                        <img src="./img/iconPameranSeni.png" alt="img" style="width: 35%; ">
                        <h5>Pameran Seni Budaya</h5>
                      </div>
                      <div class="col-sm-4 icon-box">
                        <img src="./img/iconPelatihanAtlet.png" alt="img" style="width: 35%; ">
                        <h5>Pelatihan Atlet</h5>
                      </div>
                      <div class="col-sm-4 icon-box">
                        <img src="./img/iconSportTour.png" alt="img" style="width: 35%; ">
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
              


      </div>
      <!-- End of Main Content -->   

      <div  id="identitas">
        <div class="container-fluid">
=======
              

            </div>




<div class="s008">

<form>

<!-- <a class="navbar-brand">CARI NIK BERDASARKAN TINGKATAN</a> -->
<div class="inner-form">

<div class="advance">
<div class="advance-search">
  <div class="row">
    <div class="input-field">
      <div class="tengah2">
        <h5> Batas Bawah <i class="fas fa-sort-numeric-down"> </i></h5>
      </div>
    </div>
    <div class="input-field">
      <div class="input-select">
        <input type="text" id="search-text" class="form-control" onkeypress="return hanyaAngka(event) "aria-label="Recipient's username" aria-describedby="button-addon2">
      </div>
    </div>
    <div class="input-field">
      <div class="tengah">
       <h5> Batas Atas <i class="fas fa-sort-numeric-up"> </i></h5>
      </div>
    </div>
    <div class="input-field">
      <div class="kiri">
        <input type="text" id="search-text2" class="form-control" onkeypress="return hanyaAngka(event) "aria-label="Recipient's username" aria-describedby="button-addon2">
      </div>
    </div>
    <div class="input-field">
      <div class="input-select">
        <button type="button" class="btn-search" id="btn-detail">Search</button>
      </div>
    </div>
  </div>

  <!-- search -->
        <form class="example">
          <input type="text" id="search-text3" class="form-control" onkeypress="return hanyaAngka(event)"placeholder="Masukan Referral Number" aria-label="Recipient's username" aria-describedby="button-addon2">
          <!-- <button type="button" id="btn-follower"><i class="fa fa-search"></i></button> -->
          <button type="button" class="btn-follower" id="btn-follower">Search</button>
        </form>




        

<!-- end dropdown menu here -->


<div class="basic-search">
<div align="center">
<button class="btn btn-primary ml-2" type="button" id="btn-search">Filter NIK Kota <i class="fa fa-search"></i></button>
<button class="btn btn-primary ml-2" type="button" id="btn-camat">Filter NIK Camat <i
    class="fa fa-search"></i></button>
<button class="btn btn-primary ml-2" type="button" id="btn-lurah">Filter NIK Lurah <i
    class="fa fa-search"></i></button>
<button class="btn btn-primary ml-2" type="button" id="btn-RW">Filter NIK RW <i
    class="fa fa-search"></i></button>
<button class="btn btn-primary ml-2" type="button" id="btn-RT">Filter NIK RT <i
    class="fa fa-search"></i></button>
<button class="btn btn-primary ml-2" type="button" id="btn-warga">Filter NIK Warga <i
    class="fa fa-search"></i></button>
</div>
</div>

<span class="desc">List Member :<button class="button3" type="button" id="btn-tingkatan"><span> Lihat
    Semua</span></button>


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

                <div class="row" id="follower-list">
                  <div class="col-md-4 mb-3 followerList">
                  </div>
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


>>>>>>> test
  
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
                  <input type="text" id="fname" name="fname" value="<?=$_SESSION['nama'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">NIK</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="fname" name="fname" value="<?=$_SESSION['sess_id'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Password</h6>
                </div>
                <div class="col-sm-10">
                <div class="wrap-input100 validate-input" style="margin-bottom: -20px;" data-validate = "Password is required"></div>
                                <span class="btn-show-pass">
                                  <i class="fa fa-eye"></i>
                                </span>
                                <input class="input100" name="password" disabled="disabled" type="password" required pattern="[A-Za-z0-9\s]{6,}" value="<?=$_SESSION['password'];?>"><br>
                                <span class="focus-input100"></span>
                </div>
                </div>
              </div>
 
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Tempat Lahir</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="dob_place" name="dob_place" value="<?=$_SESSION['tempat_lahir'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Tanggal Lahir</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="dob" name="dob" value="<?=$_SESSION['tanggal_lahir'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Jenis Kelamin</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="gender" name="gender" value="<?=$_SESSION['jenis_kelamin'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Status Perkawinan</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="marital" name="marital" value="<?=$_SESSION['marital'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Alamat</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="road" name="road" value="<?=$_SESSION['alamat'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">RT</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="fname" name="fname" value="<?=$_SESSION['rt'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">RW</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="fname" name="fname" value="<?=$_SESSION['rw'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Kelurahan</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="desa" name="desa" value="<?=$_SESSION['kelurahan'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Kecamatan</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="kec" name="kec" value="<?=$_SESSION['kecamatan'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Agama</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="agama" name="agama" value="<?=$_SESSION['agama'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Pekerjaan</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="fname" name="fname" value="<?=$_SESSION['job'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Kewarga Negaraan</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="nationality" name="nationality" value="<?=$_SESSION['nationality'];?>"><br>
                </div>
                </div>
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Nomor Telepon</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="phone" name="phone" value="<?=$_SESSION['phone'];?>"><br>
                </div>
                </div>
                
              </div>
              <div class="card-header py-3">
                <div class="row">
                  <div class="col-sm-2">
                  <h6 class="m-0 font-weight-bold text-primary">Email</h6>
                </div>
                <div class="col-sm-10">
                  <input type="text" id="email" name="email" value="<?=$_SESSION['email'];?>"><br>
                </div>
                </div>
           
                
              </div>
  
  
        </div>
        <!-- /.container-fluid -->
        <button class="button2" onclick="alert('Hello world!')">Update</button>
      </div>
      </div>

      <div class="container-fluid"  id="blank">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Visi & Misi </h1>
     </div>
     <div class="row">
        <div class="row">

<<<<<<< HEAD
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
      </div>
  


<div class="container-fluid" id="follower">
<!-- Page Heading -->
=======

<div class="container-fluid" id="follower">
>>>>>>> test
<h1 class="h3 mb-2 text-gray-800">Edit Batas Follower</h1>
<!-- DataTales Example -->

        <div class="row1">
        <div class="card1">
          <p class="judul">Batas Follower Kota</p>
          <div class="column">
            <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
          </div>
          <div class="column">
            <select id="cars" name="cars">
              <option value="pilih">Pilih</option>
              <option value="lb">></option>
              <option value="lk"><</option>
              <option value="lbs">≥</option>
              <option value="audi">≤</option>
            </select>
          </div>
          <div class="column">
            <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
          </div>
          <button type="button" class="updt-follower" id="updt-follower">Update</button>
        </div>
        <div class="card1">
          <p class="judul">Batas Follower Camat</p>
          <div class="column">
            <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
          </div>
          <div class="column">
          <select id="cars" name="cars">
          <option value="pilih">Pilih</option>
            <option value="volvo">></option>
            <option value="saab"><</option>
            <option value="fiat">≥</option>
            <option value="audi">≤</option>
          </select>
          </div>
          <div class="column">
            <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
          </div>
          <button type="button" class="updt-follower" id="updt-follower">Update</button>
        </div>
        <div class="card1">
          <p class="judul">Batas Follower Lurah</p>
          <div class="column">
            <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
          </div>
          <div class="column">
            <select id="cars" name="cars">
            <option value="pilih">Pilih</option>
              <option value="volvo">></option>
              <option value="saab"><</option>
              <option value="fiat">≥</option>
              <option value="audi">≤</option>
            </select>
          </div>
          <div class="column">
            <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
          </div>
          <button type="button" class="updt-follower" id="updt-follower">Update</button>
        </div>
</div>
<div class="row1">
        <div class="card1">
          <p class="judul">Batas Follower RT</p>
          <div class="column">
            <input type="text" id="username" name="username"><br>
          </div>
          <div class="column">
            <select id="cars" name="cars">
            <option value="pilih">Pilih</option>
              <option value="volvo">></option>
              <option value="saab"><</option>
              <option value="fiat">≥</option>
              <option value="audi">≤</option>
            </select>
          </div>
          <div class="column">
            <input type="text" id="username" name="username"><br>
          </div>
          <button type="button" class="updt-follower" id="updt-follower">Update</button>
        </div>
        <div class="card1">
          <p class="judul">Batas Follower RW</p>
          <div class="column">
            <input type="text" id="username" name="username"><br>
          </div>
          <div class="column">
            <select id="cars" name="cars">
            <option value="pilih">Pilih</option>
              <option value="volvo">></option>
              <option value="saab"><</option>
              <option value="fiat">≥</option>
              <option value="audi">≤</option>
            </select>
          </div>
          <div class="column">
            <input type="text" id="username" name="username"><br>
          </div>
          <button type="button" class="updt-follower" id="updt-follower">Update</button>
        </div>
        <div class="card1">
          <p class="judul">Batas Follower Warga</p>
        <div class="column">
          <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
        </div>
        <div class="column">
          <select id="cars" name="cars">
          <option value="pilih">Pilih</option>
            <option value="volvo">></option>
            <option value="saab"><</option>
            <option value="fiat">≥</option>
            <option value="audi">≤</option>
          </select>
        </div>
        <div class="column">
          <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
        </div>
        <button type="button" class="updt-follower" id="updt-follower">Update</button>
      </div>
      </div>
</div>
</div>

      
  
<div class="container-fluid" id="point">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Edit Poin</h1>

<!-- Content Row -->
<div class="row2">

  <div class="col-xl-4 col-lg-7">
    <!-- Area Chart -->

<<<<<<< HEAD
  <div class="row">
    <div class="input-field">
      <div class="tengah2">
        <h4>Batas Bawah</h4>
      </div>
    </div>
    <div class="input-field">
      <div class="input-select">
        <input type="text" id="search-text" class="form-control" onkeypress="return hanyaAngka(event) "aria-label="Recipient's username" aria-describedby="button-addon2">
      </div>
    </div>
    <div class="input-field">
      <div class="tengah">
       <h4>Batas Atas</h4>
      </div>
    </div>
    <div class="input-field">
      <div class="kiri">
        <input type="text" id="search-text2" class="form-control" onkeypress="return hanyaAngka(event) "aria-label="Recipient's username" aria-describedby="button-addon2">
=======
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bonus 1</h6>
      </div>
      <form action="/action_page.php">
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input  class="editinput" type="text" id="fname" name="fname" value="Sebako 1"><br>
  ​ <label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="filename">
  <input class="submit" type="submit">
</form> 

>>>>>>> test
      </div>

      <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bonus 4</h6>
      </div>
      <form action="/action_page.php">
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input  class="editinput" type="text" id="fname" name="fname" value="Sebako 1"><br>
  ​ <label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="filename">
  <input class="submit" type="submit">
</form> 
  </div>
  </div>

  <div class="col-xl-4 col-lg-7">
<!-- Area Chart -->
<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Bonus 2</h6>
</div>

<form action="/action_page.php">
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input  class="editinput" type="text" id="fname" name="fname" value="Sebako 1"><br>
  ​ <label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="filename">
  <input class="submit" type="submit">
</form> 
</div>

<div class="card shadow mb-4">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Bonus 5</h6>
</div>
<form action="/action_page.php">
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input  class="editinput" type="text" id="fname" name="fname" value="Sebako 1"><br>
  ​ <label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="filename">
  <input class="submit" type="submit">
</form> 
</div>
</div>

<<<<<<< HEAD
<div class="advance-search">
<span class="desc">List Member :<button class="button3" type="button" id="btn-tingkatan"><span> Lihat
    Semua</span></button>


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

                <div class="row" id="follower-list">
                  <div class="col-md-4 mb-3 followerList">
                  </div>
              </div>
            </div>
          </div>
        </div>
        </div>

=======
  <!-- Donut Chart -->
  <div class="col-xl-4 col-lg-5">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Bonus 5</h6>
>>>>>>> test
      </div>
      <!-- Card Body -->
    
<<<<<<< HEAD
    <!-- End of Footer -->
=======
      <form action="/action_page.php">
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input  class="editinput" type="text" id="fname" name="fname" value="Sebako 1"><br>
  ​ <label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="filename">
  <input class="submit" type="submit">
</form> 
  
      
    </div>
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Bonus 6</h6>
        </div>
        <!-- Card Body -->
        <form action="/action_page.php">
  <label  class="editpoin" for="fname">Edit deskripsi :</label>
  <input  class="editinput" type="text" id="fname" name="fname" value="Sebako 1"><br>
  ​ <label  class="editpoin1" for="fname">Edit Photo            :</label>
   <input class="editfile" type="file" id="myFile" name="filename">
  <input class="submit" type="submit">
</form> 
    
        
      </div>
>>>>>>> test

  </div>

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
<<<<<<< HEAD

  <script src="assets/script.js"></script>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
=======
>>>>>>> test



         
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> 
  <script src="../assets/main.js"></script>

    <!-- Counter -->
    <script type="text/javascript" src="./js/waypoints.js"></script>
    <script type="text/javascript" src="./js/jquery.counterup.js"></script>
  
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="../on-admin/js/dataklik.js"></script>

<<<<<<< HEAD
      <!-- button modal -->
  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

    <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
  </script>

</div>

=======
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>


          <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
>>>>>>> test


          <script src="../on-member/js/script.js"></script>
          <!-- button modal -->
          <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function () {
              modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
              modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }

          <script>
            function hanyaAngka(evt) {
              var charCode = (evt.which) ? evt.which : event.keyCode
              if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
              return true;
            }
          </script>

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
</body>
</body>

</html>