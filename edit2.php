<?php
require 'function.php';

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
