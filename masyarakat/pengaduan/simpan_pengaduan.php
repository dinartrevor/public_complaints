<?php

  if(isset($_POST['submit'])) {
    $tanggal_pengaduan = $_POST['tanggal'];
    $nik = $_POST['nik'];
    $isi_laporan = $_POST['isi_laporan'];
    $ft = $_FILES['foto']['name'];
    $file = $_FILES['foto']['tmp_name'];
    $st=0;
    include_once("../../config/koneksi.php");
    // cara ka 1 
    $tmppath="foto/".$ft;
    // $directory ="/opt/lampp/htdocs/public/complaints/foto/";
    $files = move_uploaded_file($_FILES["foto"]["name"],$tmppath.$file );

    $result = mysqli_query($koneksi, "INSERT INTO pengaduan(tanggal,nik,isi_laporan,foto,status) VALUES('$tanggal_pengaduan','$nik','$isi_laporan','$ft','$st')");
    if($result == true){

      echo ("<script LANGUAGE='JavaScript'>
        window.alert('Data Berhasil disimpan, Terima Kasih sudah meulis laporan');
        window.location.href='../tulis_pengaduan.php';
        </script>");
    }
  }
  // lamun cara ka 1 teu bisa pake nu iye copykeun iye, hapus cara ka 1
  //  move_uploaded_file($file, "foto/".$ft );
?>