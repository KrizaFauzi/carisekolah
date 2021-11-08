<?php
require 'function.php';


$id = $_GET["id"];


$jbm = query("SELECT * FROM tb_sekolah WHERE id = $id")[0];
$o = explode(',', $jbm['jurusan']);

if(isset($_POST["submit"])){

	if(ubah($_POST) > 0 ){
		echo 
			"<script>
			alert('data berhasil diubah');
			document.location.href = 'admin-sekolah.php';	
				
			</script>";
	}else {
		echo 
			"<script>
			alert('data gagal diubah');
			document.location.href = 'admin-sekolah.php';	
				
			</script>";
	}



}




?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Halaman Admin Sekolah</title>
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
            <div class="mainbar">
                <div class="bar-head top-bar clearfix">		
                    <div class="profile-card pull-right">
                        <a href="#" class="profile-card-image">
                            <img src="assets/img/placeholder/kirja.jpg" alt="">
                        </a>
                        <div class="profile-body">
                            Kriza
                        </div>
                    </div><!-- /.profile-card -->				
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
                                <input type="hidden" name="id" value="<?= $jbm["id"]; ?>">	
	                    	    <input type="hidden" name="gambarLama_1" value="<?= $jbm["gambar_1"]; ?>">
                                <input type="hidden" name="gambarLama_2" value="<?= $jbm["gambar_2"]; ?>">
                                <input type="hidden" name="gambarLama_3" value="<?= $jbm["gambar_3"]; ?>">
                                <input type="hidden" name="logoLama" value="<?= $jbm["logo"]; ?>">
                                <div class="form-section">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nama_sekolah">Nama Sekolah</label>
                                                <input type="text" class="form-control"  name="nama_sekolah" id="nama_sekolah" value="<?= $jbm["nama_sekolah"];?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="kategori">Kategori </label>
                                                <select id="kategori" name="kategori" class="form-control">
                                                    <option value=""><?= $jbm["kategori"];?></option>
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
                                                      <option><span class="option"> (Mohon diisi</span></option>
                                                     </select>
                                                 </div>
                                                  <div id="checkboxes">
                                                          <input type="checkbox" name="jurusan[]" value="tidak ada jurusan khusus" <?php in_array("tidak ada jurusan khusus",$o) ? print 'checked' :'' ?> >tidak ada jurusan khusus</br>
                                                          <input type="checkbox" name="jurusan[]" value="RPL" <?php in_array("RPL",$o) ? print 'checked' :'' ?> >RPL</br>
                                                          <input type="checkbox"  name="jurusan[]" value="TKJ" <?php in_array("TKJ",$o) ? print 'checked' :'' ?>>TKJ</br>
                                                          <input type="checkbox"  name="jurusan[]" value="Mekatronika" <?php in_array("Mekatronika",$o) ? print 'checked' :'' ?> />Mektronika</br> 
                                                          <input type="checkbox" name="jurusan[]" value="kesehatan dan Pekerjaan Sosial" <?php in_array("Kesehatan dan Pekerjaan Sosial",$o) ? print 'checked' :'' ?> />Kesehatan dan Pekerjaan Sosial</br>
                                                          <input type="checkbox"  name="jurusan[]" value="Bisnis dan Manajemen" <?php in_array("Bisnis dan Manajemen",$o) ? print 'checked' :'' ?> />Bisnis dan Manajemen</br>
                                                          <input type="checkbox" name="jurusan[]" value="TKR" <?php in_array("TKR",$o) ? print 'checked' :'' ?>>TKR</br>
                                                          <input type="checkbox" name="jurusan[]" value="Kemaritiman" <?php in_array("Kemaritiman",$o) ? print 'checked' :'' ?> />Kemaritiman</br>
                                                          <input type="checkbox" name="jurusan[]" value="Pariwisata" <?php in_array("Pariwisata",$o) ? print 'checked' :'' ?> />Pariwisata
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
                                                        <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 1000px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                <img src="img/<?= $jbm['gambar_1'] ?>" width="250">
                                                        <input type="file" class="hidden" name="gambar_1" id="gambar_1">
                                                    </p>
                                            </div>  
                                            <div class="form-group-in">
                                                <label >Foto Sekolah 2</label>
                                                <p class="image_upload">
                                                <label for="gambar_2">
                                                    <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 1000px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                <img src="img/<?= $jbm['gambar_2'] ?>" width="250">
                                                 <input type="file" class="hidden" name="gambar_2" id="gambar_2">
                                            </p>
                                            </div>
                                            <div class="form-group-in">
                                                <label >Foto Sekolah 3</label>
                                                <p class="image_upload">
                                                <label for="gambar_3">
                                                    <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 1000px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                <img src="img/<?= $jbm['gambar_3'] ?>" width="250">
                                                 <input type="file" class="hidden" name="gambar_3" id="gambar_3">
                                            </p>
                                            </div>
                                            <div class="form-group-in">
                                                <label >Logo</label>
                                                <p class="image_upload">
                                                <label for="logo">
                                                    <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 1000px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                <img src="img/<?= $jbm['logo'] ?>" width="250">
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
                                                <input type="text" class="form-control" id="no_sekolah" name="no_sekolah" value="<?= $jbm["no_sekolah"];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" value="<?= $jbm["email"];?>">
                                            </div>        
                                        </div>
                                         <div class="col-md-6">
                                            <div class="form-group" style="width: 900px;">
                                                <label for="ofc_web">Website Official Sekolah</label>
                                                <input type="text" class="form-control" id="ofc_web" name="ofc_web" value="<?= $jbm["ofc_web"];?>">
                                            </div>        
                                        </div>                                  
                                    </div>                                   
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="deskripsi">Deskrpsi sekolah</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10" value="<?= $jbm["deskripsi"];?>"><?= $jbm["deskripsi"];?></textarea>
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
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $jbm["alamat"];?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="link-map">Link Google maps</label>
                                            <input type="text" class="form-control" id="link-map" name="maps" value="<?= $jbm["maps"];?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                         <div class="form-group" style="width: 436px;">
                                             <label for="provinsi">Provinsi </label>
                                             <select id="provinsi" name="provinsi" class="form-control">
                                                 <option value="<?= $jbm["provinsi"];?>" ><?= $jbm["provinsi"];?></option>
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
                                            <input type="text" class="form-control" id="senin" name="senin" value="<?= $jbm["senin"];?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="selasa">selasa</label>
                                            <input type="text" class="form-control" id="selasa" name="selasa" value="<?= $jbm["selasa"];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="rabu">rabu</label>
                                            <input type="text" class="form-control" id="rabu" name="rabu" value="<?= $jbm["rabu"];?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kamis">kamis</label>
                                            <input type="text" class="form-control" id="kamis" name="kamis" value="<?= $jbm["kamis"];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jumat">jumat</label>
                                            <input type="text" class="form-control" id="jumat" name="jumat" value="<?= $jbm["jumat"];?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sabtu">sabtu</label>
                                            <input type="text" class="form-control" id="sabtu" name="sabtu" value="<?= $jbm["sabtu"];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="minggu">minggu</label>
                                            <input type="text" class="form-control" id="minggu" name="minggu" value="<?= $jbm["minggu"];?>">
                                        </div>
                                    </div>
                                    <!--tempat kolom kedua-->
                                </div>
                                <button type="submit" name="submit" class="btn btn-success">Ubah</button>      
                            </form>
                        </div>
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