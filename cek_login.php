<?php
  include 'config/koneksi.php';
  $username = addslashes($_POST['username']);
  $password = addslashes($_POST['password']);
  
  $sql = mysqli_query($koneksi,"SELECT * FROM masyarakat where username='$username' AND password='$password'");

  $cek = mysqli_num_rows($sql);

  if ($cek>0) {
    $data=mysqli_fetch_array($sql);
    session_start();
    $_SESSION['nama']=$username;
    $_SESSION['nik']=$data['nik'];
    
    header('location:masyarakat/index.php');
  }else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Username Atau Password tidak ditemukan');
    window.location.href='login.php';
    </script>");
  }

?>