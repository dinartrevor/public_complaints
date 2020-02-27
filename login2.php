<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<link rel="stylesheet" href="css/stylelogin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,600i,700,700i&display=swap" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading text-center">Login Admin Dan Petugas</div>
				<div class="panel-body">
					<form action="cek_login2.php" method="POST">
						<fieldset class="fieldset">
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="row">
							</div><!-- /.row -->
							<button type="submit" class="btn btn-primary btn-block" style="display: block; margin-bottom: 7px;">Masuk</button>
              <a href="login.php" class="btn btn-primary  btn-block">Kembali</a>
            </fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->		

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
