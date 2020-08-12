<?php
include '../config.php';

if(isset($_POST['simpan']))
{
    //periksa apakah user telah menekan submit, dengan menggunakan parameter setingan keterangan
      $nama_file=$_POST['nik'];
      $reg_no=$_POST['reg_no'];
      $ukuran=$_FILES['gmbr']['size'];
      $jenis_gambar=$_FILES['gmbr']['type'];  
      if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
      {
          //periksa jika data yang dimasukan belum lengkap
          if ($nama_file=="")
          {
            //jika ada inputan yang kosong
            ?><script>alert('Lengkapi Data Anda belum lengkap');</script><?php
            ?><script>document.location.href='index.php?';</script><?php
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
              $sql="INSERT INTO ktp set nik='$nama_file',url='$alamatfile', reg_no='$reg_no'";
              if($dbconnect->query($sql) === false)
              { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
              trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $dbconnect->error, E_USER_ERROR);
              }  
              else 
              { // Jika berhasil alihkan ke halaman tampil.php
              echo "<script>alert('Berhasil Menyimpan!')</script>";
              echo "<meta http-equiv=refresh content=\"0; url=index.php?\">";
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
          ?><script>document.location="index.php?";</script><?php  
        }          
    }
?>