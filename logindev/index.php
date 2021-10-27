<?php
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
	header('location:../admin_1.php');
}

if(isset($_SESSION['gmail']))
{
	$database->relogin($_SESSION['gmail']);
	header('location:../admin_1.php');
}

if(isset($_POST['login']))
{
	$gmail = $_POST['gmail'];
	$password = $_POST['password'];
	if(isset($_POST['remember']))
	{
		$remember = TRUE;
	}
	else
	{
		$remember = FALSE;
	}

	if($database->login($gmail,$password,$remember))
	{
		header('location:../admin_1.php');
	}
}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="generator" content="">
		<title>Masuk</title>

		<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

		
<link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
	
	<link rel="stylesheet" href="assets/css/signin.css">
  </head>
  <body class="text-center">
  	<form class="form-signin" method="post" action="">
  <img class="mb-4" src="assets/css/csg.png" alt="" width="200" >
  <h1 class="h3 mb-3 font-weight-normal">Login</h1>
  <label for="gmail" class="sr-only">gmail</label>
  <input type="text" id="gmail" class="form-control" placeholder="Gmail" name="gmail" required autofocus>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
  <div class="checkbox mb-3">
  	<label>
  		<input type="checkbox" value="remember-me" name="remember"> Ingat saya
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Masuk</button>
  
  <p class="mt-5 mb-3 text-muted">Cari Sekolah &copy; 2021</p>
</form>
</body>
</html>
