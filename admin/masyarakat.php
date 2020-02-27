<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Masyarakat</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<link href="../css/mystyle.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,600i,700,700i&display=swap" rel="stylesheet"> 
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
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Admin</span></a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="../img/pilogo.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href=""><em class="fa fa-home">&nbsp;</em>Home</a></li>
			<li><a href=""><em class="fa fa-pencil">&nbsp;</em>Tanggapan</a></li>
			<li><a href=""><em class="fa fa-briefcase">&nbsp;</em>Petugas</a></li>
			<li class="active"><a href=""><em class="fa fa-users">&nbsp;</em>Masyarakat</a></li>
			<li><a href=""><em class="fa fa-credit-card-alt">&nbsp;</em>Pengaduan</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-briefcase"></em>
				</a></li>
				<li class="active">Masyarakat</li>
			</ol>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-md-12 col-sm-12 text-center"><h1><b>Masyarakat</b></h1></div>
			</div><!--/.row-->
			<div class="row">
				<div class="col-md-9 col-sm-9">
					<form class="col-md-4 col-sm-4" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Cari disini">
						</div>
					</form>
				</div>
			</div><!--/.row-->
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="table-responsive">
						<table class="table text-center">
						  	<thead class="thead-light">
						    	<tr>
						      		<th scope="col">No</th>
						      		<th scope="col">N I K</th>
						      		<th scope="col">Nama</th>
						      		<th scope="col">Username</th>
						      		<th scope="col">Nomor Telepon</th>
						      		<th scope="col">Aksi</th>
						    	</tr>
						 	</thead>
						  	<tbody>
						    	<tr>
						      		<th scope="row">1</th>
						      		<td>32788801</td>
						      		<td>Roni</td>
						      		<td>Roni321</td>
						      		<td>081313451655</td>
						      		<td>
						      			<button type="button" class="btn btn-danger">Hapus</button>
						      			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
						      		</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">2</th>
						      		<td>32788801</td>
						      		<td>Rono</td>
						      		<td>Rono321</td>
						      		<td>081313451655</td>
						      		<td>
						      			<button type="button" class="btn btn-danger">Hapus</button>
						      			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
						      		</td>
						    	</tr>
						    	<tr>
						      		<th scope="row">3</th>
						      		<td>32788801</td>
						      		<td>Rani</td>
						      		<td>Rani321</td>
						      		<td>081313451655</td>
						      		<td>
						      			<button type="button" class="btn btn-danger">Hapus</button>
						      			<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Edit</button>
										
										<!--/.pop-up edit-->
						      			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
										  	<div class="modal-dialog modal-dialog-centered" role="document">
										    	<div class="modal-content">
										      		<div class="modal-header">
										        		<h5 class="modal-title" id="exampleModalCenterTitle">Edit Form Masyarakat</h5>
										        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          				<span aria-hidden="true">&times;</span>
										        			</button>
										      		</div>
										      		<div class="modal-body">
										        		<form>
														  	<div class="form-group">
														    	<label for="exampleInputEmail1" style="float: left;">N I K</label>
														    	<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
														  	</div>
														  	<div class="form-group">
														    	<label for="exampleInputEmail1" style="float: left;">Nama</label>
														    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
														  	</div>
														  	<div class="form-group">
														    	<label for="exampleInputEmail1" style="float: left;">Username</label>
														    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
														  	</div>
														  	<div class="form-group">
														    	<label for="exampleInputEmail1" style="float: left;">Nomor Telepon</label>
														    	<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
														  	</div>
														</form>
										      		</div>
										      		<div class="modal-footer">
										      			<button type="button" class="btn btn-primary">Simpan</button>
										        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
										      		</div>
										    	</div>
										  	</div>
										</div>
										<!--/.akhir pop-up edit-->

						      		</td>
						    	</tr>
						  	</tbody>
						</table>
					</div>
				</div>
			</div><!--/.row-->
		</div>
	</div>	<!--/.main-->
	
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