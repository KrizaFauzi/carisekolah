<?php 
//koneksi ke database
$db = mysqli_connect("localhost", "root", "", "dvlprcs");

function query($query){
	global $db;
	$result = mysqli_query($db, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}

function registrasi($data) {
	global $db;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($db, $data["password"]);
	$password2 = mysqli_real_escape_string($db,$data["password2"]);
	
	$result = mysqli_query($db, "SELECT username FROM registerdv WHERE username = '$username'");

	if (mysqli_fetch_assoc($result) ) {
		echo "<script>
			alert ('username sudah terdaftar');
			</script>";

		return false;
	}




	if ($password != $password2) {
		echo "<script>
			alert ('konfirmasi password tidak valid');
			</script>";
			return false;
	}
	
	$password = password_hash($password, PASSWORD_DEFAULT);

	mysqli_query($db, "INSERT INTO registerdv VALUES('','$username' ,'$password')");


	return mysqli_affected_rows($db);
	}
?>