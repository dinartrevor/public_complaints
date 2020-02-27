<?php
  include 'config/koneksi.php';
  $username = addslashes($_POST['username']);
  $password = addslashes($_POST['password']);
  
  $sql = mysqli_query($koneksi,"SELECT * FROM petugas WHERE username='$username' AND password='$password'");
  // var_dump($sql);
  $cek = mysqli_num_rows($sql);

  if ($cek>0) {
    $data=mysqli_fetch_array($sql);
    if ($data['level'] == 'admin') {
      session_start();
      $_SESSION['username']=$username;
      $_SESSION['nama']=$data['nama_petugas'];
      $_SESSION['level']=$data['level'];
      header('location:admin/index.php');
    }else if ($data['level'] == 'petugas') {
      session_start();
      $_SESSION['user']=$username;
      $_SESSION['nama']=$data['nama_petugas'];
      $_SESSION['level']=$data['level'];
      header('location:petugas/index.php');
    }
  }else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Username Atau Password tidak ditemukan');
    window.location.href='login2.php';
    </script>");
  }

?>