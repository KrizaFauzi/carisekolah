<?php

session_start();
if (empty($_SESSION["id"]) or empty($_SESSION['level']) ) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='multilevel/index.php'</script>";
}


require 'function.php';


if(isset($_POST["submit"])){

    if(tambah($_POST) > 0 ){
        echo 
        "<script>
            alert('Data Sekolah Berhasil Ditambahkan');
            document.location.href = 'admin-sekolah.php';
        </script>";
        
    }else {
        echo 
            "<script>
                alert('Data Sekolah Gagal Ditambahkan');
                document.location.href = 'admin-sekolah.php';
            </script>";
    }

}




if(isset($_POST["proses"])){

	if(tm_berita($_POST) > 0 ){
		echo 
			"<script>
				alert('Berita Berhasil Ditambahkan');
				document.location.href = 'admin-sekolah-5.php';
			</script>";
	}else {
		echo 
			"<script>
				alert('Berita Gagal Ditambahkan');
				document.location.href = 'admin-sekolah-5.php';
			</script>";
	}

}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Sekolah</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" href="assets/img/logocs.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900%7COpen+Sans" rel="stylesheet" />
        <link rel="stylesheet" href="assets/libraries/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/libraries/ionicons-2.0.1/css/ionicons.min.css" />
        <!-- Start BOOTSTRAP -->
        <link rel="stylesheet" href="assets/libraries/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
        <!-- End Bootstrap -->
        <link rel="stylesheet" href="assets/css/map.css" />
        <!-- Start Template files -->
        <link rel="stylesheet" href="assets/css/admin-local.css" />
        <link rel="stylesheet" href="assets/css/admin-local-media.css" />
        <!-- End  Template files -->
        <!-- End custom styles  -->
        <script src="assets/js/modernizr.custom.js"></script>
    </head>
    <script>
    var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
</script>
<body>
        <style >
.multiselect {
  width: 200px;
}



.selectBox select {
  width: 100%;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}</style>
        <div class="page-wrapper">
            <!-- START mainbar -->
            <div class="sidebar">
                <div class="bar-head">
                    <div class="logo">
                        <a href="index.php" class="link">Cari Sekolah</a>
                        <a href="index.php" class="link-mobile">C</a>
                    </div>
                </div>
                <div class="widget left-menu">
                    <button type="button" class="navbar-toggle" id="navigation-toogle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <ul class="nav-side">
                    <li >
                            <a href="admin-sekolah.php"><i class="nav-icon ion-android-clipboard"></i><span class="nav-label">Website yang telah dibuat</span></a>
                        </li>                  
                        <li >
                            <a href="admin-sekolah-5.php"><i class="nav-icon ion-android-clipboard"></i><span class="nav-label">Berita yang telah dibuat</span></a>
                        </li>                    
                        <li class="active">
                            <a href="admin-sekolah-1.php"><i class="nav-icon ion-plus"></i><span class="nav-label">Tambah data website</span></a>
                        </li>                    
                        <li>
                            <a href="admin-sekolah-4.php"><i class="nav-icon ion-person"></i><span class="nav-label">Profil</span></a>
                        </li>                       
                        <li>
                            <a href="index.php"><i class="nav-icon ion-android-home"></i><span class="nav-label">Beranda</span></a>
                        </li>                             
                        <li>
                            <a href="multilevel/keluar.php"><i class="nav-icon ion-android-exit"></i><span class="nav-label">Keluar</span></a>
                        </li>
                    </ul>
                </div>
                <div class="copyright">Cari Sekolah&#169;2021.  Made in SMKN 8 MALANG</div>
            </div><!-- /.sidebar -->
            <!-- END mainbar -->
            <!-- START mainbar -->
            <div class="mainbar">
                <div class="bar-head top-bar clearfix">     
                    <div class="profile-card pull-right">
                        <a href="admin-sekolah-4.php" class="profile-card-image">
                        <?php 
                         $query = mysqli_query($db,"SELECT * FROM tb_profil WHERE user_id = '".$_SESSION['id']."' ");
                         if($gb = mysqli_fetch_assoc($query)) {
                        ?>
                         <img src="img/<?= $gb["gambar"]; ?>" alt="">
                        <?php
                          }else{
                        ?>
                         <img src="assets/img/placeholder/profil1.jpg" alt="">
                        <?php
                              }
                            ?>
                        </a>
                        <div class="profile-body">
                         <?= $_SESSION['username']; ?>
                        </div>
                    </div><!-- /.profile-card -->
                    <a href="admin-sekolah-1.php" class="btn btn-transparent pull-right">Tambah Website</a>                
                </div><!-- /.top-bar -->
                <div class="mainbar-body">
                    <div class="section-form section">
                        <div class="section-header">
                            <h2 class="title">
                                Isi Data Website Sekolahmu 
                            </h2>
                        </div>
                        <div class="box-content">
                            <form action="" method="post" enctype="multipart/form-data" >
                                <div class="form-section">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nama_sekolah">Nama Sekolah</label>
                                                <input type="text" class="form-control"  name="nama_sekolah" id="nama_sekolah" placeholder="nama Sekolah ">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="kategori">Kategori </label>
                                                <select id="kategori" name="kategori" class="form-control">
                                                    <option value=""       >-pilih kategeori-</option>
                                                    <option value="SMA"     <?php if($kategori == "sma") echo "selected"?>>SMA</option>
                                                    <option value="SMK"     <?php if($kategori == "smk") echo "selected"?>>SMK</option>
                                                    <option value="SMP/MTS" <?php if($kategori == "smp/sd") echo "selected"?>>SMP/MTS</option>
                                                    <option value="SD/MI"   <?php if($kategori == "sd/mi") echo "selected"?>>SD/MI</option>
                                                </select>
                                            </div>
                                        </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan </label>
                                            <div class="multiselect" >
                                                <div onclick="showCheckboxes()">
                                                    <select class="form-control"id="jurusan">
                                                      <option><span class="option"> (WAJIB DIISI)</span></option>
                                                     </select>
                                                 </div>
                                                  <div id="checkboxes">
                                                          <input type="checkbox" name="jurusan[]" value="tidak ada jurusan khusus " />tidak ada jurusan khusus </br>
                                                          <input type="checkbox" name="jurusan[]" value="Akuntansi" id="Akuntansi"/>Akuntansi</br>
                                                          <input type="checkbox" name="jurusan[]" value="Alat Berat" id="Alat Berat"/>Alat Berat</br>
                                                          <input type="checkbox" name="jurusan[]" value="Animasi" id="Animasi"/>Animasi</br>
                                                          <input type="checkbox" name="jurusan[]" value="Analisis kimia" id="Analisis kimia"/>Analisis kimia</br>
                                                          <input type="checkbox"  name="jurusan[]" value="Bisnis dan Manajemen" id="Bisnis"/>Bisnis dan Manajemen</br>
                                                          <input type="checkbox" name="jurusan[]" value="Elin" id="Elin"/>Elin</br>
                                                          <input type="checkbox" name="jurusan[]" value="RPL" id="RPL"/>RPL</br>
                                                          <input type="checkbox"  name="jurusan[]" value="TKJ" id="TKJ"/>TKJ</br>
                                                          <input type="checkbox" name="jurusan[]" value="Farmasi" id="Farmasi"/>Farmasi</br>
                                                          <input type="checkbox" name="jurusan[]" value="Jurnalistik" id="Jurnalistik"/>Jurnalistik</br>
                                                          <input type="checkbox" name="jurusan[]" value="Kemaritiman" id="Kemaritiman"/>Kemaritiman</br>
                                                          <input type="checkbox"  name="jurusan[]" value="Mekatronika" id="Mekatronika"/>Mektronika</br> 
                                                          <input type="checkbox" name="jurusan[]" value="Multimedia" id="Multimedia"/>Multimedia</br>
                                                          <input type="checkbox" name="jurusan[]" value="Pariwisata" id="Pariwisata"/>Pariwisata</br>
                                                          <input type="checkbox" name="jurusan[]" value="Perhotelan" id="Perhotelan"/>Perhotelan</br>
                                                          <input type="checkbox" name="jurusan[]" value="Perkantoran" id="Perkantoran"/>Perkantoran</br>
                                                          <input type="checkbox" name="jurusan[]" value="TKR" id="TKR"/>TKR</br>
                                                          <input type="checkbox" name="jurusan[]" value="TSM" id="TSM"/>TSM</br>  
                                                          <input type="checkbox" name="jurusan[]" value="Tata Boga" id="Tata Boga"/>Tata Boga</br>
                                                          <input type="checkbox" name="jurusan[]" value="Tata Busana" id="Tata Busana"/>Tata Busana</br>
                                                          <input type="checkbox" name="jurusan[]" value="Teknik Otomasi Industri" id="Teknik Otomasi Industri"/>Teknik Otomasi Industri</br>
                                                          <input type="checkbox" name="jurusan[]" value="Teknik Sipil" id="Teknik Sipil"/>Teknik Sipil
                                                          
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-section">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group-in">
                                                <label >Foto Sekolah 1</label>
                                                    <p class="image_upload">
                                                        <label for="gambar_1">
                                                        <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 900px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                        <input type="file" class="hidden" name="gambar_1" id="gambar_1">
                                                    </p>
                                            </div>  
                                            <div class="form-group-in">
                                                <label >Foto Sekolah 2</label>
                                                <p class="image_upload">
                                                <label for="gambar_2">
                                                    <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 900px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                 <input type="file" class="hidden" name="gambar_2" id="gambar_2">
                                            </p>
                                            </div>
                                            <div class="form-group-in">
                                                <label >Foto Sekolah 3</label>
                                                <p class="image_upload">
                                                <label for="gambar_3">
                                                    <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 900px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                 <input type="file" class="hidden" name="gambar_3" id="gambar_3">
                                            </p>
                                            </div>
                                            <div class="form-group-in">
                                                <label >Logo</label>
                                                <p class="image_upload">
                                                <label for="logo">
                                                    <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 900px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                 <input type="file" class="hidden" name="logo" id="logo">
                                            </p>
                                            </div>   
                                        </div>
                                    </div>   
                                </div> 
                                <div class="form-section">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="no_sekolah">Nomor Telp Sekolah</label>
                                                <input type="text" class="form-control" id="no_sekolah" name="no_sekolah" placeholder="+62">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="********@gmail.com">
                                            </div>        
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group" style="width: 900px;">
                                                <label for="ofc_web">Website Official Sekolah</label>
                                                <input type="text" class="form-control" id="ofc_web" name="ofc_web" placeholder="https://">
                                            </div>        
                                        </div>                                  
                                    </div>                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="deskripsi">Deskrpsi sekolah</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="title" style="font-weight: bold";>
                                Lokasi
                                </h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Jl teluk pacitan.....">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="link-map">Link Google maps</label>
                                            <input type="text" class="form-control" id="link-map" name="maps" placeholder="google.com/maps/....">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                         <div class="form-group" style="width: 436px;">
                                             <label for="provinsi">Provinsi </label>
                                             <select id="provinsi" name="provinsi" class="form-control">
                                                 <option value="" >-pilih provinsi-</option>
                                                 <option value="Aceh" <?php if($provinsi == "Aceh") echo "selected"?>>Aceh</option>
                                                 <option value="Sumatra Utara" <?php if($provinsi == "Sumatra Utara") echo "selected"?>>Sumatra Utara</option>
                                                 <option value="Sumatra Barat" <?php if($provinsi == "Sumatra Barat") echo "selected"?>>Sumatra Barat</option>
                                                 <option value="Riau" <?php if($provinsi == "Riau") echo "selected"?>>Riau</option>
                                                 <option value="Kepulauan Riau" <?php if($provinsi == "Kepulauan Riau") echo "selected"?>>Kepulauan Riau</option>
                                                 <option value="Jambi" <?php if($provinsi == "Jambi") echo "selected"?>>Jambi</option>
                                                 <option value="Sumatra Selatan" <?php if($provinsi == "Sumatra Selatan") echo "selected"?>>Sumatera Selatan</option>
                                                 <option value="Kepualauan Bangka Belitung" <?php if($provinsi == "Kepualauan Bangka Belitung") echo "selected"?>>Kepulauan Bangka Belitung</option>
                                                 <option value="Bengkulu" <?php if($provinsi == "Bengkulu") echo "selected"?>>Begkulu</option>
                                                 <option value="Lampung" <?php if($provinsi == "Lampung") echo "selected"?>>Lampung</option>
                                                 <option value="DKI Jakarta" <?php if($provinsi == "DKI Jakarta") echo "selected"?>>DKI Jakarta</option>
                                                 <option value="Banten" <?php if($provinsi == "Banten") echo "selected"?>>Banten</option>
                                                 <option value="Jawa Barat" <?php if($provinsi == "Jawa Barat") echo "selected"?>>Jawa Barat</option>
                                                 <option value="Jawa Tengah" <?php if($provinsi == "Jawa Tengah") echo "selected"?>>Jawa Tengah</option>
                                                 <option value="DI Yogyakarta" <?php if($provinsi == "DI Yogyakarta") echo "selected"?>>DI Yogyakarta</option>
                                                 <option value="Jawa Timur" <?php if($provinsi == "Jawa Timur") echo "selected"?>>Jawa Timur</option>
                                                 <option value="Bali" <?php if($provinsi == "Bali") echo "selected"?>>Bali</option>
                                                 <option value="Nusa Tenggara Barat" <?php if($provinsi == "Nusa Tenggara Barat") echo "selected"?>>Nusa Tenggara Barat</option>
                                                 <option value="Nusa Tenggara Timur" <?php if($provinsi == "Nusa Tenggara Timur") echo "selected"?>>Nusa Tenggara Timur</option>
                                                 <option value="Kalimantan Barat" <?php if($provinsi == "Kalimantan Barat") echo "selected"?>>Kalimantan Barat</option>
                                                 <option value="Kalimantan Tengah" <?php if($provinsi == "Kalimantan Tengah") echo "selected"?>>Kalimantan Tengah</option>
                                                 <option value="Kalimantan Selatan" <?php if($provinsi == "Kalimantan Selatan") echo "selected"?>>Kalimantan Selatan</option>
                                                 <option value="Kalimantan Timur" <?php if($provinsi == "Kalimantan Timur") echo "selected"?>>Kalimantan Timur</option>
                                                 <option value="Kalimantan Utara" <?php if($provinsi == "Kalimantan Utara") echo "selected"?>>Kalimantan Utara</option>
                                                 <option value="Sulawesi Utara" <?php if($provinsi == "Sulawesi Utara") echo "selected"?>>Sulawesi Utara </option>
                                                 <option value="Gorontalo" <?php if($provinsi == "Gorontalo") echo "selected"?>>Gorontalo</option>
                                                 <option value="Sulawesi Tengah" <?php if($provinsi == "Sulawesi Tengah") echo "selected"?>>Sulawesi Tengah</option>
                                                 <option value="Sulawesi Barat" <?php if($provinsi == "Sulawesi Barat") echo "selected"?>>Sulawesi Barat</option>
                                                 <option value="Sulawesi Selatan" <?php if($provinsi == "Sulawesi Selatan") echo "selected"?>>Sulawesi Selatan</option>
                                                 <option value="Sulawesi Tenggara" <?php if($provinsi == "Sulawesi Tenggara") echo "selected"?>>Sulawesi Tenggara</option>
                                                 <option value="Maluku" <?php if($provinsi == "Maluku") echo "selected"?>>Maluku</option>
                                                 <option value="Maluku Utara" <?php if($provinsi == "Maluku Utara") echo "selected"?>>Maluku Utara</option>
                                                 <option value="Papua Barat" <?php if($provinsi == "Papua Barat") echo "selected"?>>Papua Barat</option>
                                                 <option value="Papua" <?php if($provinsi == "Papua") echo "selected"?>>papua</option>

                                             </select>
                                         </div>
                                     </div>                                
                                </div>
                                <h2 class="title" style="font-weight: bold";>
                                Jadwal
                                </h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="senin">Senin</label>
                                            <input type="text" class="form-control" id="senin" name="senin" placeholder="jadwal masuk dan pulang">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="selasa">selasa</label>
                                            <input type="text" class="form-control" id="selasa" name="selasa" placeholder="jadwal masuk dan pulang">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="rabu">rabu</label>
                                            <input type="text" class="form-control" id="rabu" name="rabu" placeholder="jadwal masuk dan pulang">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kamis">kamis</label>
                                            <input type="text" class="form-control" id="kamis" name="kamis" placeholder="jadwal masuk dan pulang">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jumat">jumat</label>
                                            <input type="text" class="form-control" id="jumat" name="jumat" placeholder="jadwal masuk dan pulang">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sabtu">sabtu</label>
                                            <input type="text" class="form-control" id="sabtu" name="sabtu" placeholder="jadwal masuk dan pulang">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="minggu">minggu</label>
                                            <input type="text" class="form-control" id="minggu" name="minggu" placeholder="jadwal masuk dan pulang">
                                        </div>
                                    </div>
                                    <!--tempat kolom kedua-->
                                </div>
                                <button type="submit" name="submit" class="btn btn-success">Kirim</button>
                                                
                                </form></div>
                    </div>
                    <div class="section-form section">
                        <div class="section-header">
                            <h2 class="title">
                                BERITA 
                            </h2>
                        </div>
                        <div class="box-content">
                            <form action="" method="post" enctype="multipart/form-data" >
                                <div class="form-section">
                                    <div class="row">
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="1">berita untuk sekolah</label>
                                                <input type="text" class="form-control"  name="nama_sekolah" id="1" placeholder="(mohon diisi sama dengan nama sekolahnya)" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="judul">Judul Berita</label>
                                                <input type="text" class="form-control"  name="judul" id="judul" placeholder="nama Berita ">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="asal">Sumber Berita</label>
                                                <input type="text" class="form-control"  name="asal" id="asal" placeholder="Sumber Berita ">
                                            </div>
                                        </div>
                                </div>
                                <div class="form-section">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group-in">
                                                <label >Foto Berita 1</label>
                                                    <p class="image_upload">
                                                        <label for="berita_1">
                                                        <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 900px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                        <input type="file" class="hidden" name="berita_1" id="berita_1">
                                                    </p>
                                            </div>
                                            <div class="form-group-in">
                                                <label >Foto Berita 2</label>
                                                    <p class="image_upload">
                                                        <label for="berita_2">
                                                        <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 900px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                        <input type="file" class="hidden" name="berita_2" id="berita_2">
                                                    </p>
                                            </div>
                                            <div class="form-group-in">
                                                <label >Foto Berita 3</label>
                                                    <p class="image_upload">
                                                        <label for="berita_3">
                                                        <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 900px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                        <input type="file" class="hidden" name="berita_3" id="berita_3">
                                                    </p>
                                            </div> 
                                        </div>
                                    </div>   
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="isi_berita">ISI BERITA</label>
                                            <textarea class="form-control" id="isi_berita" name="isi_berita" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="proses" class="btn btn-success">Tambahkan Berita</button>
                                                
                                </form></div>
                    </div>
                </div>
            </div>
            <!-- END mainbar -->
        </div>
        <!-- Start Jquery -->
        <script src="assets/js/jquery-2.2.1.min.js"></script>
        <script src="assets/libraries/jquery.mobile/jquery.mobile.custom.min.js"></script>
        <!-- End Jquery -->
        <!-- Start BOOTSTRAP -->
        <script src="assets/libraries/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <!-- End Bootstrap -->
        <!-- Start JS MAP  -->
        <script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;&key=AIzaSyAqLlMqwv4wpy6cfSBGJddPpyoZ_eP14Kc" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/map_infobox.js"></script>
        <script type="text/javascript" src="assets/js/markerclusterer.js"></script>
        <script src="assets/js/map.js" type="text/javascript"></script>
        <script src='assets/js/gmap3/gmap3.min.js'></script>
        <!-- End JS MAP  -->
        <!-- Start Template files -->
        <script src="assets/js/admin-local.js"></script>
        <!-- End  Template files -->
        <!-- Start custom styles  -->
        <script src="assets/js/jquery.helpers.js" type="text/javascript"></script>
        <!-- End custom styles  -->
        <script src="assets/js/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="assets/js/moment-timezone-with-data.js" type="text/javascript"></script>
    </body>
</html>