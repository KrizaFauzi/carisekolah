<?php

require 'function.php';


$id = $_GET["id"];

if ( hapus_1($id) > 0) {
	echo 
			"<script>
				alert('data berhasil dihapus');
				document.location.href = 'admin_3.php';
			</script>";
}else{
	echo 
			"<script>
				alert('data gagal dihapus');
				document.location.href = 'admin_3.php';
			</script>";
}



?>