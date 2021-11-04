<?php
require 'function.php';


$id = $_GET["id"];
$jbm = query("SELECT * FROM tb_berita WHERE id = $id")[0];


if(isset($_POST["proses"])){

	if(ubah_1($_POST) > 0 ){
		echo 
			"<script>
			alert('data berhasil diubah');
			document.location.href = 'admin-sekolah-5.php';	
				
			</script>";
	}else {
		echo 
			"<script>
			alert('data gagal diubah');
			document.location.href = 'admin-sekolah-5.php';	
				
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
                                <input type="hidden" name="beritaLama_1" value="<?= $jbm["berita_1"]; ?>">
                                <input type="hidden" name="beritaLama_2" value="<?= $jbm["berita_2"]; ?>">
                                <input type="hidden" name="beritaLama_3" value="<?= $jbm["berita_3"]; ?>">
                                <div class="form-section">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="judul">Judul Berita</label>
                                                <input type="text" class="form-control"  name="judul" id="judul" value="<?= $jbm["judul"];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="asal">Sumber Berita</label>
                                                <input type="text" class="form-control"  name="asal" id="asal" value="<?= $jbm["asal"];?>">
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
                                                        <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 1180px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                        <img src="img/<?= $jbm['berita_1'] ?>" width="250">
                                                        <input type="file" class="hidden" name="berita_1" id="berita_1">
                                                    </p>
                                            </div>
                                            <div class="form-group-in">
                                                <label >Foto Berita 2</label>
                                                    <p class="image_upload">
                                                        <label for="berita_2">
                                                        <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 1180px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                        <img src="img/<?= $jbm['berita_2'] ?>" width="250">
                                                        <input type="file" class="hidden" name="berita_2" id="berita_2">
                                                    </p>
                                            </div>
                                            <div class="form-group-in">
                                                <label >Foto Berita 3</label>
                                                    <p class="image_upload">
                                                        <label for="berita_3">
                                                        <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow" style="width: 1180px;" ><span class='glyphicon glyphicon-paperclip'></span> Sisipkan Gambar</a>
                                                </label>
                                                        <img src="img/<?= $jbm['berita_3'] ?>" width="250">
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
                                            <textarea class="form-control" id="isi_berita" name="isi_berita" rows="10"><?= $jbm["isi_berita"];?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" name="proses" class="btn btn-success">Ubah Berita</button>
                                                
                                </form></div>
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