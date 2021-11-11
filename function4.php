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

function upload(){
		
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];


    if ( $error === 4 ) {
        echo "<script>
        alert ('pilih gambar terlebih dahulu');
        </script>";
        
        return false;
    }


    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert ('yang anda upload bukan gambar');
        </script>";
        return false;
    }

    if ($ukuranFile > 2500000) { 
        echo "<script>
        alert ('ukuran file terlalu besar');
        </script>";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpname, 'img/'.$namaFileBaru);

    return $namaFileBaru;


}

function tm_profil($data){
	global $db;
    $user_id = $_SESSION["id"];
	$deskripsi = htmlspecialchars($data["deskripsi"]);
    $gambar = upload();
	if ( !$gambar ) {
		return false;
	}

    $query = "INSERT INTO tb_profil
				VALUES
				(NULL, '$user_id','$deskripsi','$gambar' ) 
				";

	

     mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}


?>