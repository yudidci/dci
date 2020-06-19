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
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" id="klikpoint-" href="#klikpoint-">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Filter</span></a>
      </li>

                  <!-- Nav Item - Tables -->
            <li class="nav-item">
              <a class="nav-link" id="klikfollower" href="#klikfollower">
                <i class="fas fa-fw fa-table"></i>
                <span>Batas Follower</span></a>
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

        

            <!-- Nav Item - Messages -->
            <!-- <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
         
                <span class="badge badge-danger badge-counter">1</span>
              </a>
  
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! Test </div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li> -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hai, <?=$_SESSION['nama'];?></span>
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

      </div>
      <!-- End of Main Content -->   


      <div class="container-fluid" id="follower">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit Batas Follower</h1>

        <!-- DataTales Example -->
        <div class="advance">

                <div class="row">
                <div class="card1">
                  <p class="judul">Batas Follower Kota</p>
                  <div class="column">
                    <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
                  </div>
                  <div class="column">
                    <select id="cars" name="cars">
                      <option value="volvo">></option>
                      <option value="saab"><</option>
                      <option value="fiat">≥</option>
                      <option value="audi">≤</option>
                    </select>
                  </div>
                  <div class="column">
                    <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
                  </div>
                  <button type="button" class="updt-follower" id="updt-follower">update</button>
                </div>
                <div class="card1">
                  <p class="judul">Batas Follower Camat</p>
                  <div class="column">
                    <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
                  </div>
                  <div class="column">
                  <select id="cars" name="cars">
                    <option value="volvo">></option>
                    <option value="saab"><</option>
                    <option value="fiat">≥</option>
                    <option value="audi">≤</option>
                  </select>
                  </div>
                  <div class="column">
                    <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
                  </div>
                  <button type="button" class="updt-follower" id="updt-follower">update</button>
                </div>
                <div class="card1">
                  <p class="judul">Batas Follower Lurah</p>
                  <div class="column">
                    <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
                  </div>
                  <div class="column">
                    <select id="cars" name="cars">
                      <option value="volvo">></option>
                      <option value="saab"><</option>
                      <option value="fiat">≥</option>
                      <option value="audi">≤</option>
                    </select>
                  </div>
                  <div class="column">
                    <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
                  </div>
                  <button type="button" class="updt-follower" id="updt-follower">update</button>
                </div>
                <div class="card1">
                  <p class="judul">Batas Follower RT</p>
                  <div class="column">
                    <input type="text" id="username" name="username"><br>
                  </div>
                  <div class="column">
                    <select id="cars" name="cars">
                      <option value="volvo">></option>
                      <option value="saab"><</option>
                      <option value="fiat">≥</option>
                      <option value="audi">≤</option>
                    </select>
                  </div>
                  <div class="column">
                    <input type="text" id="username" name="username"><br>
                  </div>
                  <button type="button" class="updt-follower" id="updt-follower">update</button>
                </div>
                <div class="card1">
                  <p class="judul">Batas Follower RW</p>
                  <div class="column">
                    <input type="text" id="username" name="username"><br>
                  </div>
                  <div class="column">
                    <select id="cars" name="cars">
                      <option value="volvo">></option>
                      <option value="saab"><</option>
                      <option value="fiat">≥</option>
                      <option value="audi">≤</option>
                    </select>
                  </div>
                  <div class="column">
                    <input type="text" id="username" name="username"><br>
                  </div>
                  <button type="button" class="updt-follower" id="updt-follower">update</button>
                </div>
                <div class="card1">
                  <p class="judul">Batas Follower Warga</p>
                <div class="column">
                  <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
                </div>
                <div class="column">
                  <select id="cars" name="cars">
                    <option value="volvo">></option>
                    <option value="saab"><</option>
                    <option value="fiat">≥</option>
                    <option value="audi">≤</option>
                  </select>
                </div>
                <div class="column">
                  <input type="text" id="username" name="username" onkeypress="return hanyaAngka(event)"><br>
                </div>
                <button type="button" class="updt-follower" id="updt-follower">update</button>
              </div>
              </div>
        </div>

      </div>

      <div class="container-fluid" id="point">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Filter Member</h1>
<div class="s008">
    
    <form>
      
      <!-- <a class="navbar-brand">CARI NIK BERDASARKAN TINGKATAN</a> -->
      <div class="inner-form">

        <div class="advance">

          <div class="row">
            <div class="input-field">
              <div class="tengah2">
                <h3>Batas Bawah</h3>
              </div>
            </div>
            <div class="input-field">
              <div class="input-select">
                <input type="text" id="search-text" class="form-control" onkeypress="return hanyaAngka(event) "aria-label="Recipient's username" aria-describedby="button-addon2">
              </div>
            </div>
            <div class="input-field">
              <div class="tengah">
               <h3>Batas Atas</h3>
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

       

        </div>
       
                

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
    </div>

    <div class="advance-search">
      <span class="desc">List Member :<button class="button2" type="button" id="btn-tingkatan"><span> Lihat
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
            </form>
            
    
          
         



          <!-- Modal Button -->
          <!-- <div id="myModal" class="modal"> -->

          <!-- Modal content -->
          <!-- <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2>Sukses</h2>
      </div>
      <div class="modal-body">
        <p>Registrasi Berhasil</p>
      </div>
      <div class="modal-footer">
        <h3>Terima Kasih</h3>
      </div>
    </div>
  
  </div> -->

          <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">
        </div>
      </div>
    </div>
  </div> -->
          <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
          <script src='https://kit.fontawesome.com/a076d05399.js'></script>

          <script src="assets/js/bootstrap.js"></script>
          <script src="assets/script.js"></script>
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
          <!-- <script>
    $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
    </script> -->
          <script>
            function hanyaAngka(evt) {
              var charCode = (evt.which) ? evt.which : event.keyCode
              if (charCode > 31 && (charCode < 48 || charCode > 57))

                return false;
              return true;
            }
          </script>

    </div>

    <!-- Footer -->
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

</html>