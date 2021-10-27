<?php
require 'function.php';

if(isset($_POST["submit"])){

	if(tambah($_POST) > 0 ){
		echo 
			"<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'admin-sekolah.html';
			</script>";
	}else {
		echo 
			"<script>
				alert('data gagal ditambahkan');
				document.location.href = 'admin-sekolah-1.php';
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
                        <a href="index.html" class="link">Cari Sekolah</a>
                        <a href="index.html" class="link-mobile">C</a>
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
                        <li>
                            <a href="admin-sekolah.html"><i class="nav-icon ion-android-clipboard"></i><span class="nav-label">Website yang telah dibuat</span></a>
                        </li>                    
                        <li  class="active">
                            <a href="admin-sekolah-1.html"><i class="nav-icon ion-plus"></i><span class="nav-label">Tambah data website</span></a>
                        </li>                    
                        <li>
                            <a href="admin-sekolah-4.html"><i class="nav-icon ion-person"></i><span class="nav-label">Profil</span></a>
                        </li>                         
                        <li>
                            <a href="index.html"><i class="nav-icon ion-android-home"></i><span class="nav-label">Beranda</span></a>
                        </li>                             
                        <li>
                            <a href="#"><i class="nav-icon ion-android-exit"></i><span class="nav-label">Keluar</span></a>
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
                        <a href="admin-sekolah-4.html" class="profile-card-image">
                            <img src="assets/img/placeholder/kirja.jpg" alt="">
                        </a>
                        <div class="profile-body">
                            Kriza
                        </div>
                    </div><!-- /.profile-card -->
                    <a href="admin-sekolah-1.html" class="btn btn-transparent pull-right">Tambah Website</a>                
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
                                                <label for="kategori">Kategeori </label>
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
                                                    <select class="form-control" name="jurusan" id="jurusan">
                                                      <option><span class="option"> (khusus SMK)</span></option>
                                                     </select>
                                                 </div>
                                                  <div id="checkboxes">
                                                          <label for="RPL">
                                                          <input type="checkbox" id="RPL" />RPL</label>

                                                          <label for="TKJ">
                                                          <input type="checkbox" id="TKJ" />TKJ</label>

                                                          <label for="Mekatronika">
                                                          <input type="checkbox" id="Mekatronika" />Mektronika</label>

                                                          
                                                          <label for="Kesehatan">
                                                          <input type="checkbox" id="Kesehatan" />Kesehatan dan Pekerjaan Sosial</label>

                                                          <label for="Bisnis">
                                                          <input type="checkbox" id="Bisnis" />Bisnis dan Manajemen</label>

                                                          <label for="TKR">
                                                          <input type="checkbox" id="TKR" />TKR</label>

                                                          <label for="Kemaritiman">
                                                          <input type="checkbox" id="Kemaritiman" />Kemaritiman</label>

                                                          <label for="Pariwisata">
                                                          <input type="checkbox" id="Pariwisata" />Pariwisata</label>

                                                          <label for="lainnya">
                                                          <input type="text" id="lainnya" />lainnya</label>
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
                                <button type="submit" name="submit" class="btn btn-success">Kirim</button>
                            </form>
                        </div>
                    </div>
                    <div class="section-form section">
                        <div class="section-header">
                            <h2 class="title">
                                Lokasi
                            </h2>
                        </div>
                        <div class="box-content">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" placeholder="Jl teluk pacitan.....">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="link-map">Link Google maps</label>
                                            <input type="text" class="form-control" id="link-map" placeholder="google.com/maps/....">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                         <div class="form-group" style="width: 436px;">
                                             <label for="provinsi">Provinsi </label>
                                             <select id="provinsi" class="form-control">
                                                 <option>-pilih provinsi-</option>
                                                 <option>Aceh</option>
                                                 <option>Sumatra Utara</option>
                                                 <option>Sumatra Barat</option>
                                                 <option>Riau</option>
                                                 <option>Kepulauan Riau</option>
                                                 <option>Jambi</option>
                                                 <option>Sumatera Selatan</option>
                                                 <option>Kepulauan Bangka Belitung</option>
                                                 <option>Begkulu</option>
                                                 <option>Lampung</option>
                                                 <option>DKI Jakarta</option>
                                                 <option>Banten</option>
                                                 <option>Jawa Barat</option>
                                                 <option>Jawa Tengah</option>
                                                 <option>DI Yogyakarta</option>
                                                 <option>Jawa Timur</option>
                                                 <option>Bali</option>
                                                 <option>Nusa Tenggara Barat</option>
                                                 <option>Nusa Tenggara Timur</option>
                                                 <option>Kalimantan Barat</option>
                                                 <option>Kalimantan Tengah</option>
                                                 <option>Kalimantan Selatan</option>
                                                 <option>Kalimantan Timur</option>
                                                 <option>Kalimantan Utara</option>
                                                 <option>Sulawesi Utara </option>
                                                 <option>Gorontalo</option>
                                                 <option>Sulawesi Tengah</option>
                                                 <option>Sulawesi Barat</option>
                                                 <option>Sulawesi Selatan</option>
                                                 <option>Sulawesi Tenggara</option>
                                                 <option>Maluku</option>
                                                 <option>Maluku Utara</option>
                                                 <option>Papua Barat</option>
                                                 <option>papua</option>

                                             </select>
                                         </div>
                                     </div>                                
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="section-form section">
                        <div class="section-header">
                            <h2 class="title">
                                Jadwal Sekolah
                            </h2>
                        </div>
                        <div class="box-content">
                            <form>
                                <div class="form-group-in">
                                    <label for="senin" >Senin</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="senin" id="senin" placeholder="Jadwal Masuk dan Pulang">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group-in">
                                    <label for="selasa">Selasa</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="senin" id="selasa" placeholder="Jadwal Masuk dan Pulang">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group-in">
                                    <label for="rabu">Rabu</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="rabu" id="rabu" placeholder="Jadwal Masuk dan Pulang">
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group-in">
                                    <label for="kamis">Kamis</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="kamis" name="kamis" placeholder="Jadwal Masuk dan Pulang">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group-in">
                                    <label for="jumat">Jumat</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="jumat" name="jumat" placeholder="Jadwal Masuk dan Pulang">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group-in">
                                    <label for="sabtu">Sabtu</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="sabtu" name="sabtu" placeholder="Jadwal Masuk dan Pulang">
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group-in">
                                    <label for="minggu">Minggu</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="minggu" name="minggu" placeholder="Jadwal Masuk dan Pulang">
                                            </div>
                                        </div>
                                       
                                       
                                    </div>
                                     <button type="submit" class="btn btn-success">Kirim</button>
                                </div>
                            </form>
                        </div>
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