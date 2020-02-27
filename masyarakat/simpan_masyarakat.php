<?php
if(isset($_POST['Submit'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $username=  $_POST['username'];
  $password=  $_POST['password'];
  $telepon=  $_POST['telepon'];

  // include database connection file
  include_once("../config/koneksi.php");

  // Insert user data into table
  $result = mysqli_query($koneksi, "INSERT INTO masyarakat(nik,nama,username,password,no_telepone) VALUES('$nik','$nama','$username','$password','$telepon')");

  if($result == true){
    
    echo ("<script LANGUAGE='JavaScript'>
      window.alert('Data Berhasil disimpan, silahkan Gunakan untuk login');
      window.location.href='../login.php';
      </script>");
  }else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Data gagal disimpan');
    window.location.href='../register.php';
    </script>");
  }
}
?>