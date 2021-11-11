<?php
$db = mysqli_connect("localhost", "root", "", "carisekolah");

function query($query){
	global $db;
	$result = mysqli_query($db, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}


function tm_profil($data){
    global $db;
    
    $email = htmlspecialchars($data["email"]);
    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO testimoni
                VALUES
                ('', '$email', '$nama', '$deskripsi')
                ";
                mysqli_query($db, $query);
}


?>