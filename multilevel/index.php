<!DOCTYPE html>

<html>
<head>
 <title>Login sek sam!!</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="icon" href="../assets/img/logocs.ico" type="image/x-icon" />
</head>
<body>

 <h1></h1>

 <?php
 if(isset($_GET['pesan'])){
  if($_GET['pesan']=="gagal"){
   echo "<div class='alert'>Username dan Password Salah !</div>";
  }
 }
 ?>
 <div class="panel_login">
  <p class="tulisan_atas">Silahkan Masuk</p>

  <form action="cek_login.php" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required">

   <label>Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required">

   <center><button class="btn btn-primary" style="width:310px;" type="submit" name="login">Masuk</button> 
    </br>
   <a href="register.php" class="btn btn-success"  style="width:310px;" >Daftar</a></center>

   
  </form>
  
 </div>

 <footer class="footer mt-auto py-3">
	<center><div class="container">
		<span class="text-muted">Cari Sekolah &copy; 2021</span>
	</div></center>
</footer>
</body>
</html>