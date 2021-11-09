<?php
 
session_start();

 
include 'koneksi.php';

 
$username = $_POST['username'];
$password = $_POST['password'];



 
$login = mysqli_query($koneksi,"SELECT * FROM loginmulti WHERE username='$username' and password='$password'");

$cek = mysqli_num_rows($login);


 
if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 
 if($data['level']=="admin"){

  $_SESSION["id"] = $data["id"];
  $_SESSION['username'] = $username;
  $_SESSION['level'] = $data["level"]=="admin";
   
  header("location:../admin-sekolah-4.php");

 
 }else if($data['level']=="devoloper"){
   
   $_SESSION["id"] = $data["id"];

  $_SESSION['username'] = $username;
  $_SESSION['level'] = $data["level"]=="devoloper";

   
  header("location:../admin_1.php");

 }else{

   
  header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}
?>