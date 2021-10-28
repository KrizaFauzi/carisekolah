<?php
 session_start();

 
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin 5</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" href="assets/img/logocs.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900%7COpen+Sans" rel="stylesheet" />
        <link rel="stylesheet" href="assets/libraries/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/libraries/ionicons-2.0.1/css/ionicons.min.css" />
        <!-- Start BOOTSTRAP -->
        <link rel="stylesheet" href="assets/libraries/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
        <!-- End Bootstrap -->
        <!-- Start footable-jquery -->	
        <link rel="stylesheet" href="assets/libraries/footable-jquery/css/footable.bootstrap.min.css" />
        <!-- End footable-jquery -->
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
                        <a href="#" class="link">Cari Sekolah</a>
                        <a href="#" class="link-mobile">L</a>
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
                            <a href="admin_1.php"><i class="nav-icon ion-android-color-palette"></i><span class="nav-label">Dasbor </span></a>
                        </li>                    
                        <li>
                            <a href="admin_2.php"><i class="nav-icon ion-android-clipboard"></i><span class="nav-label">daftar sekolah </span></a>                    
                        <li>
                        </li>                       
                        <li class="active">
                            <a href="admin_5.php"><i class="nav-icon ion-android-star"></i><span class="nav-label">testimoni</span></a>
                        </li>                            
                        <li>
                            <a href="multilevel/keluar.php"><i class="nav-icon ion-android-exit"></i><span class="nav-label">keluar</span></a>
                        </li>
                    </ul>
                </div>
                <div class="copyright">Cari Sekolah&#169;2021.  Made in SMKN 8 MALANG</div>
            </div><!-- /.sidebar -->
            <!-- END mainbar -->
            <!-- START mainbar -->
            <div class="mainbar">
                <!-- /.top-bar -->
                <div class="mainbar-body">
                    <div class="section-reviews">
                        <div class="section-header">
                            <h2 class="title">
                                Testimoni 
                            </h2>
                        </div>
                        <table class="table-panel footable table-listings">
                            <tr>
                                <td data-title="Preview" data-breakpoints="xs" data-type="html" class="preview">
                                    <a href="#" class="link">
                                        <img class="image-preview preview-75x70"  src="assets/img/placeholder/pp_developer2.jpeg" alt="">
                                    </a>
                                </td>
                                <td class="preview-mobile" data-type="html">
                                    <div class="reviews-box">
                                        <div class="header">
                                            <b>kriza</b> untuk <a href="#" class="link"> cari sekolah</a>
                                        </div>
                                        <p class="description">
                                            sangat membantu
                                        </p>
                                        
                                    </div>
                                </td>
                                
                                   
                                <td data-title="" data-breakpoints="xs" data-type="html">
                                    <a href="#" onclick="return confirm('yakin ta gak?')" class='btn btn-listing btn-danger'><i class="icon-remove"></i> hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="preview">
                                    <a href="#" class="link">
                                        <img class="image-preview preview-75x70"  src="assets/img/placeholder/pp_developer1.jpeg" alt="">
                                    </a>
                                </td>
                                <td>
                                    <div class="reviews-box">
                                        <div class="header"> 
                                            <b>filzah</b> untuk  <a href="#" class="link"> cari sekolah </a>
                                        </div>
                                        <p class="description">
                                            sangat bermanfaat
                                        </p>
                                        
                                </td>
                                
                                
                                <td data-title="" data-breakpoints="xs" data-type="html">
                                    <a href="#" onclick="return confirm('yakin ta gak?')" class='btn btn-listing btn-danger'><i class="icon-remove"></i> hapus</a>
                                </td>
                            
                        </table>
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
        <!-- Start footable-jquery -->	
        <script src="assets/libraries/footable-jquery/js/footable.js"></script>
        <script src="assets/js/footable_custom.js"></script>
        <!-- End footable-jquery -->
    </body>
</html>