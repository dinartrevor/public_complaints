<?php
	session_start();
	if (!isset($_SESSION['nama'])) {
		die("Anda Belum Login");
  }
  if ($_SESSION['level']!="petugas") {
		die("Anda Bukan Petugas");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Masyarakat</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<link href="../css/mystyle.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,s600i,700,700i&display=swap" rel="stylesheet"> 
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h3 style="color: white;">Aplikasi Pengaduan Masyarakat</h3>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="../img/pilogo.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['nama'];?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="index.php"><em class="fa fa-home">&nbsp;</em>Home</a></li>
			<li class="active"><a href="#"><em class="fa fa-pencil">&nbsp;</em>Verivikasi Pengaduan</a></li>
			<hr>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Pengaduan</li>
			</ol>
		</div><!--/.row-->
		<div class="panel panel-container">
			<div class="row">
      <div class="col-md-12 col-sm-12">
					<div class="table-responsive">
						<table class="table text-center">
						  <thead class="thead-light">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">N I K</th>
                  <th scope="col">Isi Laporan</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                </tr>
               </thead>
               <?php
                  include '../config/koneksi.php';
                  $no = 1;
                  // $nik = 
                  // var_dump($nik);
                  $sql = mysqli_query($koneksi, "SELECT * FROM pengaduan where status='0'");
                  while ($data = mysqli_fetch_array($sql)){
                  
               ?>
              <tbody>
                <tr>
                  <th scope="row"><?php echo $no++?></th>
                  <td><?php echo $data['tanggal'] ?></td>
                  <td><?php echo $data['nik'] ?></td>
                  <td><?php echo $data['isi_laporan'] ?></td>
                  <td><img src="<?php echo "foto/".$data['foto']; ?>"></td>
                  <td><?php echo $data['status'] ?></td>
                  <td>
                    <a href="detail-pengaduan.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Detail & Verifikasi</a>
                  </td>
                </tr>
              </tbody>
                  <?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div><!--/.main-->
	<script src="../ck-editor/ckeditor.js"></script>
  <script>
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace( 'comment' );
	</script>
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>
	<script src="../js/jquery-3.3.1.js"></script>
	<script src="../js/myjs.js"></script>
		
</body>
</html>