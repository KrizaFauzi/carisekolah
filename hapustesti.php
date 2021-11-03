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
 
function hapus($id){
	global $db;
	mysqli_query($db, "DELETE FROM testimoni WHERE id = $id");

	return mysqli_affected_rows($db);
}


$id = $_GET["id"];

if ( hapus($id) > 0) {
	echo 
			"<script>
				alert('data berhasil dihapus');
				document.location.href = 'admin_5.php';
			</script>";
}else{
	echo 
			"<script>
				alert('data gagal dihapus');
				document.location.href = 'admin_5.php';
			</script>";
}



?>