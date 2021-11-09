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
        <title>Profil Admin Sekolah</title>
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
                        <li>
                            <a href="admin-sekolah-1.php"><i class="nav-icon ion-plus"></i><span class="nav-label">Tambah data website</span></a>
                        </li>                    
                        <li class="active">
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
                            <img src="assets/img/placeholder/kirja.jpg" alt="">
                        </a>
                        <div class="profile-body">
                            <?= $_SESSION['username'] ?>
                        </div>
                    </div><!-- /.profile-card -->
                    <a href="multilevel/ganti.php" class="btn btn-transparent pull-right">Ganti Sandi</a>       
                </div><!-- /.top-bar -->
                <div class="mainbar-body">
                    <div class="section-form section">
                        <div class="section-header">
                            <h2 class="title">
                                Perbarui Profil
                            </h2>
                        </div>
                        <div class="box-content">
                            <div class="profile-editor clearfix">
                                <div class="profile-editor-side">
                                    <div class="profile-editor-preview">
                                        <img src="assets/img/placeholder/post-preview.jpg" alt="">
                                    </div>
                                </div>
                                <div class="profile-editor-main">
                                    <form>
                                        <div class="form-group form-xs-group nomargin">
                                            <label>Rincian utama</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-xs-group">
                                                        <class type="text" class="form-control" placeholder=""><h4><?= $_SESSION['username'] ?></h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-xs-group">
                                                        <class  type="text" class="form-control" placeholder="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-xs-group">
                                                        <class class="form-control" id="fieldDesription" rows="5" placeholder="Tentang pengguna(max 100 kata)"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        </div>
                                        <div class="form-group form-xs-group">
                                            <button type="button" onclick="window.location.href='admin-sekolah-2.php' " class="btn btn-danger ">Perbarui Profil</button>
                                        </div>
                                    </form>
                                </div>
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