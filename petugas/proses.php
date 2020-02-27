<?php 
  include '../config/koneksi.php';

  $sql = mysqli_query($koneksi, "UPDATE pengaduan SET status='proses' WHERE id='$_GET[id]'");

  if ($sql == true) {
    header('location:verifikasi_pengaduan.php');
  }
?>