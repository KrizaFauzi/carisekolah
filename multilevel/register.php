<?php
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register']))
{
	$username = $_POST['username'];
	$gmail = $_POST['gmail'];
	$password =$_POST['password'];
	$level = $_POST['level'];
	if($database->register($username,$gmail,$password,$level))
	{
		header('location:index.php');
	}
}
$level="";
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="generator" content="">
		<title>Daftar</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">

		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="icon" href="../assets/img/logocs.ico" type="image/x-icon" />
	<style>
		.bd.placeholder-img{
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd.placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>

	
		<link rel="stylesheet" href="sticky-footer.css">
  	</head>
  	<body class="d-flex flex-column h-100">
  		
 <main role="main" class="flex-shrink-0">
 	<div class="container">
 		<h1 class="mt-5">Form Daftar</h1>
 		<p class="lead">Silahkan Daftarkan Identitas Anda</p>
 		<hr/>
 		<form method="post" action="">
 		<div class="form-group row">
 			<label for="username" class="col-sm-2 col-form-label">Username</label>
 			<div class="col-sm-10">
 				<input type="text" class="form-control" id="username" name="username" placeholder="Username">
 			</div>
 		</div>
		<br>
 		<div class="form-group row">
 			<label for="gmail" class="col-sm-2 col-form-label">gmail</label>
 			<div class="col-sm-10">
 				<input type="email" class="form-control" id="gmail" name="gmail" placeholder="gmail">
 			</div>
 		</div>
		 <br>
 		<div class="form-group row">
 			<label for="password" class="col-sm-2 col-form-label">Kata Sandi</label>
 			<div class="col-sm-10">
 				<input type="password" class="form-control" name="password" id="password" placeholder="Password">
 			</div>
 		</div>
		 <br>
		<div class="form-group row">
 			<label for="level"class="col-sm-2 col-form-label">Sebagai </label>
				<div class="col-sm-10">	
			 		<select id="level" name="level" class="form-control">
                    	<option value=""       >Pilih level</option>
                    	<option value="admin"     <?php if($level == "admin") echo "selected"?>>admin</option>
                	</select>
					</div>
 		</div>
 		<div class="form-group row">
 			<div class="col-sm-10">
 				<a href="index.php" class="btn btn-success">Masuk</a>
 				<button type="submit" class="btn btn-primary" name="register">Daftar</button>
 			</div>
 		</div>
 	</form>
 </div>
</main>


<footer class="footer mt-auto py-3">
	<div class="container">
		<span class="text-muted">Cari Sekolah &copy; 2021</span>
	</div>
</footer>
</body>
</html>