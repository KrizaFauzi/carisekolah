<?php


include "koneksi.php";


$password_lama = $_POST['pass_lama'];


$username = $_POST['username'];


$tampil = mysqli_query($koneksi, "SELECT * FROM loginmulti WHERE 
                                username = '$username' and password = '$password_lama'");
$data = mysqli_fetch_array($tampil);

if ($data) {
    
    $password_baru = $_POST['pass_baru'];
    $konfirmasi_password = $_POST['konfirmasi_pass'];

    if ($password_baru == $konfirmasi_password) {
       
        $pass_ok = $konfirmasi_password;
        $ubah = mysqli_query($koneksi, "UPDATE loginmulti set password = '$pass_ok'  
                                        WHERE id = '$data[id]' ");
        if ($ubah) {
            echo "<script>alert('Password anda berhasil diubah, silahkan logout untuk menguji password baru anda.!');document.location='index.php'</script>";
        }
    } else {
        echo "<script>alert('Maaf, Password Baru & Konfirmasi password yang anda inputkan tidak sama!');document.location='ganti.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Password lama anda tidak sesuai/tidak terdaftar!');document.location='ganti.php'</script>";
}
