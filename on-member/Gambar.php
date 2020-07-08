<section id="main-content">
    <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Tambah</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-files-o"></i>Tambah</li>
						<li><i class="fa fa-photo"></i>Slide</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Slide
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="" enctype="multipart/form-data">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Judul Gambar </label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="jdl" minlength="5" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cuser" class="control-label col-lg-2">Pilih Gambar </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cuser" type="file" name="gmbr" required />
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                                              <input type="reset" name="batal" class="btn btn-default" value="Batal">
                                              <button onclick="history.back(-1)" class="btn btn-default-active" >Kembali</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>            
              <!-- page end-->
          </section>
      </section>
<?php
include '../config.php';
if(isset($_POST['simpan']))
{
    //periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
      $nama_file=$_POST['jdl'];
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
              $sql="INSERT INTO file (nama,url) VALUES ('$nama_file','$alamatfile')";
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

