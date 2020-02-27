<?php
  if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
      case 'tulis_pengaduan':
        include 'tulis_pengaduan.php';
        break;
      case 'lihat_pengaduan':
        include 'lihat_pengaduan.php';
        break;
        case 'detail-pengaduan':
          include 'detail- pengaduan.php';
          break;
    }
  }else{
    ?>
    <p class="mb-5">Selamat Datang di Aplikasi Pelaporan Pengaduan Masyrakat (APPEM) yang di buat untuk melaporkan pelangaran
    atau penyimpangan kejadian kejadian yang ada pada masyarakat</p> <br><br>
    Anda Login Sebagai : <h2><b><?php echo $_SESSION['nama'];
  }
  ?>
