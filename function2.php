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

function tm_berita($data){
	global $db;
	$judul = htmlspecialchars($data["judul"]);
	$asal = htmlspecialchars($data["asal"]);
	$isi_berita = htmlspecialchars($data["isi_berita"]);
    $berita_1 = upload5();
	if ( !$berita_1 ) {
		return false;
	}
    $berita_2 = upload6();
	if ( !$berita_1 ) {
		return false;
	}
    $berita_3 = upload7();
	if ( !$berita_1 ) {
		return false;
	}
    

	$query = "INSERT INTO tb_berita
				VALUES
				('', '$judul','$asal' , '$berita_1', '$berita_2', '$berita_3','$isi_berita' ) 
				";
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

function upload5(){
		
    $namaFile = $_FILES['berita_1']['name'];
    $ukuranFile = $_FILES['berita_1']['size'];
    $error = $_FILES['berita_1']['error'];
    $tmpname = $_FILES['berita_1']['tmp_name'];


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

function upload6(){
		
    $namaFile = $_FILES['berita_2']['name'];
    $ukuranFile = $_FILES['berita_2']['size'];
    $error = $_FILES['berita_2']['error'];
    $tmpname = $_FILES['berita_2']['tmp_name'];


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

function upload7(){
		
    $namaFile = $_FILES['berita_3']['name'];
    $ukuranFile = $_FILES['berita_3']['size'];
    $error = $_FILES['berita_3']['error'];
    $tmpname = $_FILES['berita_3']['tmp_name'];


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
function ubah_1($data){
	global $db;
	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);
	$asal = htmlspecialchars($data["asal"]);
    $isi_berita = htmlspecialchars($data["isi_berita"]);
    $beritaLama_1 = htmlspecialchars($data["beritaLama_1"]);
    $beritaLama_2 = htmlspecialchars($data["beritaLama_2"]);
    $beritaLama_3 = htmlspecialchars($data["beritaLama_3"]);

	if ($_FILES['berita_1']['error'] === 4 ) {
		$berita_1 = $beritaLama_1; 
	}else{
		$berita_1 = upload5(); 
	}

    if ($_FILES['berita_2']['error'] === 4 ) {
		$berita_2 = $beritaLama_2; 
	}else{
		$berita_2 = upload6(); 
	}

    if ($_FILES['berita_3']['error'] === 4 ) {
		$berita_3 = $beritaLama_3; 
	}else{
		$berita_3 = upload7(); 
	}


	$query = "UPDATE tb_berita SET 
				judul = '$judul',
				asal   = '$asal',
				berita_1 = '$berita_1',
                berita_2 = '$berita_2',
                berita_3 = '$berita_3',
                isi_berita = '$isi_berita'
				WHERE id = $id
				";

     mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}



?>