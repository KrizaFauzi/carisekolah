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

function tambah($data){
	global $db;
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

	$foto = upload();
	if ( !$foto ) {
		return false;
	}


	$query = "INSERT INTO tb_profiladmin
				VALUES
				('', '$nama', '$email', '$deskripsi', '$foto') 
				";
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}


function upload(){
		
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];


    if ( $error === 4 ) {
        echo "<script>
        alert ('pilih foto terlebih dahulu');
        </script>";
        
        return false;
    }


    $ekstensiGambarValid = ['jpg','jpeg','png','ico','jfif'];
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
?>