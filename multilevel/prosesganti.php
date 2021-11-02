<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

    include "db_conn.php";

if (isset($_POST['op']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$op = validate($_POST['op']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
    
    if(empty($op)){
      header("Location: ganti.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: ganti.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: ganti.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$op = md5($op);
    	$np = md5($np);
        $id = $_SESSION['id'];

        $sql = "SELECT password
                FROM loginmulti WHERE 
                id='$id' AND password='$op'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE loginmulti
        	          SET password='$np'
        	          WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: ganti.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: ganti.php?error=Incorrect password");
	        exit();
        }

    }

    
}else{
	header("Location: ganti.php");
	exit();
}

}else{
     header("Location: index.php");
     exit();
}