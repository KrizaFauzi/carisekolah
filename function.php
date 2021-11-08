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
    $kategori = htmlspecialchars($data["kategori"]);
    $jurusan = htmlspecialchars(implode(',', $data["jurusan"]));
    $alamat = htmlspecialchars($data["alamat"]);
    $maps = htmlspecialchars($data["maps"]);
    $provinsi = htmlspecialchars($data["provinsi"]);
    $senin = htmlspecialchars($data["senin"]);
    $selasa = htmlspecialchars($data["selasa"]);
    $rabu = htmlspecialchars($data["rabu"]);
    $kamis = htmlspecialchars($data["kamis"]);
    $jumat = htmlspecialchars($data["jumat"]);
    $sabtu = htmlspecialchars($data["rabu"]);
    $minggu = htmlspecialchars($data["minggu"]);
    $gambar_1 = upload1();
	if ( !$gambar_1 ) {
		return false;
	}
    $gambar_2 = upload2();
	if ( !$gambar_2 ) {
		return false;
	}
    $gambar_3 = upload3();
	if ( !$gambar_3 ) {
		return false;
	}
    $logo = upload4();
	if ( !$logo ) {
		return false;
	}

	$query = "INSERT INTO tb_sekolah
				VALUES
				('', '$nama_sekolah','$kategori','$jurusan' , '$no_sekolah', '$gambar_1','$gambar_2' , '$gambar_3' , '$logo' , '$email', '$ofc_web' , '$deskripsi' , '$alamat'  , '$maps'  , '$provinsi' , '$senin' , '$selasa' , '$rabu' , '$kamis' , '$jumat' , '$sabtu' , '$minggu' ) 
				";
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}


function testimoni($data){
    global $db;
    $email = htmlspecialchars($data["email"]);
    $nama = htmlspecialchars($data["nama"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
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
	if ( !$berita_2 ) {
		return false;
	}
    $berita_3 = upload7();
	if ( !$berita_3 ) {
		return false;
	}
    

	$query = "INSERT INTO tb_berita
				VALUES
				('', '$judul','$asal' , '$berita_1', '$berita_2', '$berita_3','$isi_berita' ) 
				";
	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

/*=============================================! FUNGSI UPLOAD !=============================================*/
function upload1(){
		
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

function upload2(){
		
    $namaFile = $_FILES['gambar_2']['name'];
    $ukuranFile = $_FILES['gambar_2']['size'];
    $error = $_FILES['gambar_2']['error'];
    $tmpname = $_FILES['gambar_2']['tmp_name'];


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

function upload3(){
		
    $namaFile = $_FILES['gambar_3']['name'];
    $ukuranFile = $_FILES['gambar_3']['size'];
    $error = $_FILES['gambar_3']['error'];
    $tmpname = $_FILES['gambar_3']['tmp_name'];


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

function upload4(){
		
    $namaFile = $_FILES['logo']['name'];
    $ukuranFile = $_FILES['logo']['size'];
    $error = $_FILES['logo']['error'];
    $tmpname = $_FILES['logo']['tmp_name'];


    if ( $error === 4 ) {
        echo "<script>
        alert ('pilih gambar terlebih dahulu');
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


/*=============================================! FUNGSI UPLOAD !=============================================*/

function hapus($id){
	global $db;
	mysqli_query($db, "DELETE FROM tb_sekolah WHERE id = $id");

	return mysqli_affected_rows($db);
}

function hapus_1($id){
	global $db;
	mysqli_query($db, "DELETE FROM tb_berita WHERE id = $id");

	return mysqli_affected_rows($db);
}

function ubah($data){
	global $db;
	$id = $data["id"];
	$nama_sekolah = htmlspecialchars($data["nama_sekolah"]);
	$no_sekolah = htmlspecialchars($data["no_sekolah"]);
	$email = htmlspecialchars($data["email"]);
    $ofc_web = htmlspecialchars($data["ofc_web"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $jurusan = htmlspecialchars(implode(',', $data["jurusan"]));
    $alamat = htmlspecialchars($data["alamat"]);
    $maps = htmlspecialchars($data["maps"]);
    $provinsi = htmlspecialchars($data["provinsi"]);
    $senin = htmlspecialchars($data["senin"]);
    $selasa = htmlspecialchars($data["selasa"]);
    $rabu = htmlspecialchars($data["rabu"]);
    $kamis = htmlspecialchars($data["kamis"]);
    $jumat = htmlspecialchars($data["jumat"]);
    $sabtu = htmlspecialchars($data["rabu"]);
    $minggu = htmlspecialchars($data["minggu"]);
    $gambarLama_1 = htmlspecialchars($data["gambarLama_1"]);
    $gambarLama_2 = htmlspecialchars($data["gambarLama_2"]);
    $gambarLama_3 = htmlspecialchars($data["gambarLama_3"]);
    $logoLama = htmlspecialchars($data["logoLama"]);

	if ($_FILES['gambar_1']['error'] === 4 ) {
		$gambar_1 = $gambarLama_1; 
	}else{
		$gambar_1 = upload1(); 
	}

    if ($_FILES['gambar_2']['error'] === 4 ) {
		$gambar_2 = $gambarLama_2; 
	}else{
		$gambar_2 = upload2(); 
	}

    if ($_FILES['gambar_3']['error'] === 4 ) {
		$gambar_3 = $gambarLama_3; 
	}else{
		$gambar_3 = upload3(); 
	}

    if ($_FILES['logo']['error'] === 4 ) {
		$logo = $logoLama; 
	}else{
		$logo = upload4(); 
	}

	$query = "UPDATE tb_sekolah SET 
				nama_sekolah = '$nama_sekolah',
				kategori   = '$kategori',
                jurusan   = '$jurusan',
				no_sekolah = '$no_sekolah',
				gambar_1 = '$gambar_1',
                gambar_2 = '$gambar_2',
                gambar_3 = '$gambar_3',
                logo = '$logo',
				email = '$email',
				ofc_web = '$ofc_web',
				deskripsi = '$deskripsi',
                alamat = '$alamat' ,
                maps = '$maps' ,
                provinsi = '$provinsi' ,
                senin = '$senin' ,
                selasa = '$selasa' ,
                rabu = '$rabu' ,
                kamis = '$kamis' ,
                jumat = '$jumat' ,
                sabtu = '$sabtu' ,
                minggu = '$minggu'
				WHERE id = $id
				";

     mysqli_query($db, $query);

	return mysqli_affected_rows($db);
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


$kategori="";
$provinsi="";
$jurusan[]="";


?>