<?php
  if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
    
    }
  }else{
    ?>
    <p class="mb-5">Selamat Datang di Aplikasi Pelaporan Pengaduan Masyrakat (APPEM) yang di buat untuk melaporkan pelangaran
    atau penyimpangan kejadian kejadian yang ada pada masyarakat</p> <br>
    Anda Login Sebagai : <h2><b><?php echo $_SESSION['nama']; 
    
    include '../config/koneksi.php';
    $result = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE status='0'");
    if ($cek = mysqli_num_rows($result)) {
    ?>
    <br><br>
    <div class="card text-center">
      <div class="card-header">
       Laporan
      </div>
      <div class="card-body">
        <h5 class="card-title">Laporan Pengaduan</h5>
        <p class="card-text">Ada <?php echo $cek ;?> Laporan dari masyarakat</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  
  <?php
    }
  }
  ?>