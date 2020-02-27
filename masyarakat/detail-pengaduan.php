<?php
	session_start();
	if (!isset($_SESSION['nama'])) {
		die("Anda Belum Login");
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
			<li class="active"><a href="#"><em class="fa fa-pencil">&nbsp;</em>Tulis Pengaduan</a></li>
			<li><a href="lihat_pengaduan.php"><em class="fa fa-briefcase">&nbsp;</em>Lihat Laporan</a></li>
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
			<div class="container data">
				<div class="row">
					<h1>Detail Pengaduan</h1>
					<hr>
					<div class="col-sm-10 offset-sm-1">
            <form action="#" method="POST" enctype="multipart/form-data">
              <?php
              include '../config/koneksi.php';
              $sql = mysqli_query($koneksi,"SELECT * FROM pengaduan where id='$_GET[id]'");

              $data = mysqli_fetch_array($sql);
              if ($sql) {
              ?>
							<div class="form-group">
								<label for="...">Tanggal</label>
								<input type="date" class="form-control" name="tanggal" value="<?php echo $data['tanggal']; ?>" readonly>
							</div>
							<div class="form-group">
								<label for="comment">Laporan saya mengenai 	:</label>
								<textarea class="form-control" name="isi_laporan" rows="5" id="comment" readonly><?php echo $data['isi_laporan']; ?></textarea>
							</div>
							<div class="form-group">
                <label for="...">Bukti Foto</label>
                <div>
                <img src="../foto/<?php echo $data['foto']; ?>" width="600">
                </div>
							</div> 
              <?php } ?>
							<!-- <i class="fas fa-plus-circle"></i> -->
            </form>	
            <a href="lihat_pengaduan.php" class="btn btn-primary btn-block">Kembali</a>
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