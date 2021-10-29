<!DOCTYPE html>
<html>
<head>
 <title>Halaman admin</title>
 <link rel="icon" href="../assets/img/logocs.ico" type="image/x-icon" />
</head>
<body>
 <?php
 session_start();

 
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

 ?>
 <h1>Maaf halaman admin masih dikerjakan</h1>

 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
 <a href="logout.php">LOGOUT</a>

 <br/>
 <br/>

</body>
</html>