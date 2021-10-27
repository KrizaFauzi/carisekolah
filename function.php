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
				('', '$nama_sekolah','$kategori', '$no_sekolah', '$gambar_1','$gambar_2' , '$gambar_3' , '$logo' , '$email', '$ofc_web' , '$deskripsi'  ) 
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


    $ekstensiGambarValid = ['jpg','jpeg','png','ico'];
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

$kategori="";



?>