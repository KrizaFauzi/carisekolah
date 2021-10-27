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
	$nama_sekolah = htmlspecialchars($data["nama_sekolah"]);
	$no_sekolah = htmlspecialchars($data["no_sekolah"]);
	$email = htmlspecialchars($data["email"]);
    $ofc_web = htmlspecialchars($data["ofc_web"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
    $gambar_1 = upload();
	if ( !$gambar_1 ) {
		return false;
	}

	$query = "INSERT INTO tb_sekolah
				VALUES
				('', '$nama_sekolah', '$no_sekolah', '$gambar_1', '$email', '$ofc_web' , '$deskripsi'  ) 
				";
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}


function upload(){
		
    $namaFile = $_FILES['gambar_1']['name'];
    $ukuranFile = $_FILES['gambar_1']['size'];
    $error = $_FILES['gambar_1']['error'];
    $tmpname = $_FILES['gambar_1']['tmp_name'];


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




?>