<?php
session_start();


if($_SESSION['level']==""){
 header("location:multilevel/index.php");
}

require 'function1.php';

if(isset($_POST["submit"])){

	if(tambah($_POST) > 0 ){
		echo 
			"<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'admin-sekolah-4.php';
			</script>";
	}else {
		echo 
			"<script>
				alert('data gagal ditambahkan');
				document.location.href = 'admin-sekolah-2.php';
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
        <!-- Start Template files -->
        <link rel="stylesheet" href="assets/css/admin-local.css" />
        <link rel="stylesheet" href="assets/css/admin-local-media.css" />
        <!-- End  Template files -->
        <!-- End custom styles  -->
        <script src="assets/js/modernizr.custom.js"></script>
    </head>
    <body>
        <div class="page-wrapper">
            
            <!-- START mainbar -->
            <div class="mainbar">
                <div class="bar-head top-bar clearfix">		
                    <div class="profile-card pull-right">
                        <a href="admin-sekolah-4.html" class="profile-card-image">
                            <img src="assets/img/placeholder/kirja.jpg" alt="">
                        </a>
                        <div class="profile-body">
                            <?= $_SESSION['username'] ?>
                        </div>
                    </div><!-- /.profile-card -->

                </div><!-- /.top-bar -->
                <div class="mainbar-body">
                    <div class="section-form section">
                        <div class="section-header">
                            <h2 class="title">
                                Perbarui Profil
                            </h2>
                        </div>
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="box-content">
                            <div class="profile-editor clearfix">
                                <div class="profile-editor-side">
                                    <div class="profile-editor-preview">
                                        <img src="assets/img/placeholder/post-preview.jpg" alt="">
                                    </div>
                                    <p class="image_upload">
                                                <label for="foto">
                                                    <a class="btn btn-danger btn-lg btn-block btn-local-danger" rel="nofollow"  ><span class='glyphicon glyphicon-paperclip'></span> Masukan Foto</a>
                                                </label>
                                                 <input type="file" class="hidden" name="foto" id="foto">
                                            </p>
                                </div>
                                <div class="profile-editor-main">
                                    
                                        <div class="form-group form-xs-group nomargin">
                                            <label>Profil Pengguna</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-xs-group">
                                                        <input type="text" class="form-control" name="nama" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-xs-group">
                                                        <input type="text" class="form-control" name="email" placeholder="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-xs-group">
                                                        <textarea class="form-control" id="fieldDesription" rows="5" placeholder="Tentang pengguna(max 100 kata)" name="tentang"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        </div>
                                        <div class="form-group form-xs-group">
                                            <button type="submit" class="btn btn-xs btn-danger btn-local-danger" name="submit">Perbarui Profil</button>
                                        </div>
                    
                                </div>
                            </div>
                        </div>
                    
                    </form>
                    
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