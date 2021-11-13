<?php


session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='multilevel/index.php'</script>";
}

require 'function4.php';



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
                                        <?php 
                                            $query = mysqli_query($db,"SELECT * FROM tb_profil WHERE user_id = '".$_SESSION['id']."' ");
                                            if($gb = mysqli_fetch_assoc($query)) {
                                        ?>
                                         <img src="img/<?= $gb["gambar"]; ?>" alt="">
                                         <?php
                                           }else{
                                         ?>
                                          <img src="assets/img/placeholder/post-preview.jpg" alt="">
                                         <?php
                                              }
                                         ?>
                                         </div>
                                </div>
                                <div class="profile-editor-main">
                                    <form>
                                        <div class="form-group form-xs-group nomargin">
                                            <label>Rincian utama</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group form-xs-group">
                                                        <input type="text" class="form-control" placeholder="" value=<?= $_SESSION['username'] ?> style="background-color: white;" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-xs-group">
                                                        <?php 
                                                        $query = mysqli_query($db,"SELECT * FROM loginmulti WHERE id = '".$_SESSION['id']."' ");
                                                        while ($dt = mysqli_fetch_assoc($query)) {
                                                                ?>
                                                        <input  type="text" class="form-control" placeholder="email" value=<?= $dt["gmail"]; ?> style="background-color: white;" disabled>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group form-xs-group">
                                                    <?php 
                                                        $query = mysqli_query($db,"SELECT * FROM tb_profil WHERE user_id = '".$_SESSION['id']."' ");
                                                       if($jbm = mysqli_fetch_assoc($query)) {
                                                                ?>
                                                        <textarea type="text" class="form-control" id="fieldDesription" placeholder="Tentang pengguna(max 100 kata)"  style="background-color: white;" disabled><?= $jbm["deskripsi"]; ?></textarea>.
                                                        <?php
                                                        }else{
                                                        ?>
                                                        <textarea type="text" class="form-control" id="fieldDesription" placeholder="Tentang pengguna(max 100 kata)" rows="5" style="background-color: white;" disabled></textarea>
                                                         <?php
                                                        }
                                                        ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div></br> 
                                        </div>
                                        <div class="form-group form-xs-group">
                                        <?php
                                        $query = mysqli_query($db,"SELECT * FROM tb_profil WHERE user_id = '".$_SESSION['id']."' ");
                                        $lk = mysqli_fetch_assoc($query);

                                        if ( $lk == '') { ?>
                                            <button type="button" onclick="window.location.href='admin-sekolah-2.php' " class="btn btn-danger" name="btn">Tambah profil</button>
                                        <?php 
                                        }else{ 
                                        ?>
                                            <button type="button" onclick="window.location.href='admin-sekolah-3.php?id=<?= $lk['id'] ?>' " class="btn btn-danger" >Update Profil</button>
                                        <?php 
                                            }
                                        ?>
                                            
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