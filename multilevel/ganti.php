<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ganti Sandi</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
    <form action="prosesganti.php" method="post">
     	<h2>Ganti Sandi</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>Sandi Lama</label>
     	<input type="password" 
     	       name="op" 
     	       placeholder="Sandi Lama">
     	       <br>

     	<label>Sandi Baru</label>
     	<input type="password" 
     	       name="np" 
     	       placeholder="Sandi Baru">
     	       <br>

     	<label>Konfirmasi sandi</label>
     	<input type="password" 
     	       name="c_np" 
     	       placeholder="Konfirmasi sandi">
     	       <br>

     	<button type="submit">GANTI</button>
          <a href="../admin-sekolah-4.php" class="ca">KEMBALI</a>
     </form>
</body>
</html>

<?php 
}else{
     header("Location: ganti.php");
     exit();
}
 ?>