<?php
session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ganti sandi</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="jumbotron bg-primary text-white">
            <h1 class="display-4">Hello, <b><?= $_SESSION['username'] ?></b></h1>
            <p class="lead"> Selamat datang, anda berhasil Login sebagai <b><?= $_SESSION['username'] ?></b> </p>
            <hr class="my-4">
            <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                Ganti Password (*abaikan jika tidak ingin ganti password)
            </div>
            <div class="card-body">
                <form method="post" action="prosesganti.php">
                    <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                    <div class="form-group">
                        <label>Masukkan Password Lama Anda!</label>
                        <input type="password" class="form-control" name="pass_lama" required>
                    </div>
                    <div class="form-group">
                        <label>Masukkan Password Baru Anda!</label>
                        <input type="password" class="form-control" name="pass_baru" required>
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password Baru Anda!</label>
                        <input type="password" class="form-control" name="konfirmasi_pass" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Proses</button>
                    <button type="reset" class="btn btn-danger">Batal</button>
                </form>
            </div>
        </div>

    </div>
    <!-- Penutup container -->
</body>

</html>