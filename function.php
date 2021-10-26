<?php 
//koneksi ke database
$db = mysqli_connect("localhost", "root", "", "cari_sekolah");

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
	$nama_pembeli = htmlspecialchars($data["nama_pembeli"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$no_telp = htmlspecialchars($data["no_telp"]);
	$no_ktp = htmlspecialchars($data["no_ktp"]);
	$merk_mobil = htmlspecialchars($data["merk_mobil"]);
	$warna = htmlspecialchars($data["warna"]);

	$gambar = upload();
	if ( !$gambar ) {
		return false;
	}


	$query = "INSERT INTO tb_website
				VALUES
				('', '$nama_pembeli', '$alamat', '$no_telp', '$no_ktp', '$merk_mobil', '$warna', '$gambar') 
				";
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}



 ?>
