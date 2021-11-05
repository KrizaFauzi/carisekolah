<?php

require 'function.php';

$jbm = query("SELECT * FROM testimoni");


if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $nama = $_POST["nama"];
    $deskripsi = $_POST["deskripsi"];

    $query = "INSERT INTO testimoni
                VALUES
                ('', '$email', '$nama', '$deskripsi')
                ";
                mysqli_query($db, $query);
}





?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Testimoni</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="icon" href="assets/img/logocs.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900%7COpen+Sans" rel="stylesheet" />
        <link rel="stylesheet" href="assets/libraries/font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" href="assets/libraries/ionicons-2.0.1/css/ionicons.min.css" />
        <!-- Start BOOTSTRAP -->
        <link rel="stylesheet" href="assets/libraries/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
        <link rel="stylesheet" href="assets/libraries/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css" />
        <!-- End Bootstrap -->
        <!-- Start Template files -->
        <link rel="stylesheet" href="assets/css/local.css" />
        <link rel="stylesheet" href="assets/css/local-media.css" />
        <!-- End  Template files -->
        <!-- Start blueimp  -->
        <link rel="stylesheet" href="assets/css/blueimp-gallery.min.css" />
        <!-- End blueimp  -->
        <link rel="stylesheet" href="assets/libraries/owl.carousel/dist/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="assets/libraries/owl.carousel/dist/css/owl.theme.default.css" />
        <link rel="stylesheet" href="assets/libraries/owl.carousel/dist/css/animate.css" />
        <!-- Start custom styles  -->
        <!-- Start select-picke  -->
        <link rel="stylesheet" href="assets/libraries/select-picker-auhau/dist/picker.min.css" />
        <!-- End select-picke  -->
        <!-- Start JS MAP  -->
        <link rel="stylesheet" href="assets/css/map.css" />
        <!-- End JS MAP  -->
        <link rel="stylesheet" href="assets/css/custom.css" />
        <!-- End custom styles  -->
        <script src="assets/js/modernizr.custom.js"></script>
    </head>
    <body class=""> 
        <header class="header">
            <div class="container container-palette top-bar affix-menu">
            <div class="container">
                    <div class="clearfix">
                        <div class="pull-left logo"><a href="index.php">Cari Sekolah</a></div>
                        <div class="top-bar-btns">
                            <ul class="nav-items">
                                <li><a href="multilevel/index.php" class="btn btn-custom-primary">Masuk</a></li>
                                <li><a href="multilevel/keluar.php" class="btn btn-danger">Keluar </a></li>
                            </ul>
                        </div>
                        <div class="pull-right navigation-wrapper">
                            <a href="" class="button-close"></a> 
                            <div class="logo"><a href="#">Cari Sekolah</a></div>
                            <ul class="nav navbar-nav nav-items default-menu" id="main-menu">
                                <li class="active"><a href="index.php">Beranda</a></li>
                                <li><a href="multilevel/index.php">Admin</a></li>
                                <li><a href="homepage-slider-top.php">Daftar Sekolah</a></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> 
        </header><!-- /.header -->
        <section class="section widget-top-title container container-palette" data-parallax="scroll" data-image-src="assets/img/placeholder/bg-3.jpg">
            <div class="container">
                <div class="body">
                    <h1 class="title">TESTIMONI</h1>
                    <span class="subtitle"></span>
                </div>
            </div>
        </section>
        <main class="main container container-palette">
            <center><div class="container container-palette widget"></center>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">  
                            <div class="widget-styles">
                                <div class="header content t-left"><h2>Testimoni pengguna Cari sekolah</h2></div>
                                <ul class="list-reviews">
<?php $i=1; ?>
<?php foreach ($jbm as $row) : ?> 
                                    <li class="content-box">
                                        <a href="#">
                                            <img src="assets/img/placeholder/unkwon.jpg" alt="" style="width: 50px;" />
                                        </a>
                                        <div class="list-reviews-body">
                                            <div class="list-reviews-title">
                                                <h2><a href="#"><?= $row["nama"]; ?></a></h2>
                                            </div>
                                            <div class="description"><?= $row["deskripsi"]; ?></div>
                                        </div>
                                    </li>
<?php $i++; ?>
<?php endforeach; ?>   
                                </ul>
                                <div class="caption-title t-left content" id="write_review">Nilai/Tulis Testimoni</div>
                                <div class="content-box">
                                    <form action="" method="post" class="local-form">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                   <label for="email">Email</label>
                                                   <input type="email" class="form-control" name="email" placeholder="Email" />
                                                </div>
                                            </div> 
                                            <div class="col-sm-6 col-xs-6">
                                                <div class="form-group">
                                                   <label for="nama">Nama</label>
                                                   <input type="text" class="form-control"  name="nama" id="nama" placeholder="nama">
                                                </div>
                                            </div>    
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                   <label for="deskripsi">Deskrpsi sekolah</label>
                                                   <textarea class="form-control" id="deskripsi" name="deskripsi" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cliearfix">
                                            <button type="submit" name ="submit" class="btn btn-custom btn-custom-secondary">Kirim testimoni</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            
                        </div>

                        <div class="col-md-3 swap-top right-side sidebar">
                        
                        <div class="widget-styles agent-box">
                                <div class="content">
                                    <div class="preview-image"><a href="page_profile.html"><img src="assets/img/logocs.ico" style= "width: 100px;" alt="" /></a></div>
                                    <div class="content-box">
                                        <h2 class="title"><a href="tentangcs.html">CARI SEKOLAH</a></h2>
                                        <div class="description"> Betapapun sulitnya hidup, selalu ada sesuatu yang dapat Anda lakukan dan berhasil.  </div>
                                        <a href="#" class="btn btn-custom btn-custom-secondary btn-wide"><i class="ion-email"></i></a>
                                    </div>
                                </div>
                        </div>
                        <div class="widget widget-styles widget-right-map">
                            <div class="body">
                                <img src="assets/img/placeholder/ads.jpg" style="width: 240px;" alt="" />  
                            </div>
                        </div>
                </div>
            </div>
        </main>
        <footer class="footer container container-palette">
            <div class="footer-content section">
                <div class="container">
                    <div class="row footer-results">              
                        <div class="col-md-3 col-sm-6 f-box">
                            <div class="title">Profil</div>
                            <ul class="list-f">
                                <li><a href="tentangcs.html">Tentang Cari Sekolah</a></li>
                                <li><a href="page_faq.html">Pertanyaan</a></li>
                                <li><a href="testimoni.html">Testimoni</a></li>
                                
                            </ul>
                        </div>              
                        <div class="col-md-3 col-sm-6 f-box">
                            <div class="title">Kontak</div>
                            <ul class="list-f">
                                <li><i class="ion-ios-email-outline"></i>   <a href="#">carisekolah@gmail.com</a></li>
                                <li><i class="ion-ios-telephone-outline"></i>      <a href="#">012345678910</a></li>
                            </ul>
                        </div>                
                        <div class="col-md-3 col-sm-6 f-box">
                            <div class="title">Media Sosial</div>
                            <ul class="list-social">
                                <li><a href="https://www.facebook.com/share.php?u=http://test.com&amp;title=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/intent/tweet?text=Hello%20world"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com/share?url=http://test.com" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="http://pinterest.com/pin/create/button/?url=http://test.com" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="twitter"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <span>CariSekolah&#169;2021.  Made in SMKN 8 Malang</span>
                </div>
            </div>
        </footer><!-- /.footer -->
        <!-- /.modal -->
        <!-- /.modal -->
        
        <div class="se-pre-con"></div>
        <!-- Start Jquery -->
        <script src="assets/js/jquery-2.2.1.min.js"></script>
        <script src="assets/libraries/jquery.mobile/jquery.mobile.custom.min.js"></script>
        <!-- End Jquery -->
        <!-- Start BOOTSTRAP -->
        <script src="assets/libraries/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/libraries/bootstrap-colorpicker-master/dist/js/bootstrap-colorpicker.min.js"></script>
        <!-- End Bootstrap -->
        <!-- Start Template files -->
        <script src="assets/js/local.js"></script>
        <!-- End  Template files -->
        <!-- Start blueimp  -->
        <script src="assets/js/blueimp-gallery.min.js" type="text/javascript"></script>
        <!-- End blueimp  -->
        <script src="assets/libraries/owl.carousel/dist/owl.carousel.min.js"></script>
        <!-- Start JS MAP  -->
        <script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;&key=AIzaSyAqLlMqwv4wpy6cfSBGJddPpyoZ_eP14Kc" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/map_infobox.js"></script>
        <script type="text/javascript" src="assets/js/markerclusterer.js"></script>
        <script src="assets/js/map.js" type="text/javascript"></script>
        <!-- End JS MAP  -->
        <!-- Start picker  -->
        <script type="text/javascript" src="assets/libraries/select-picker-auhau/dist/picker.min.js"></script>
        <!-- End picker  -->
        <script src="assets/libraries/parallax/parallax.js"></script>
        <!-- Start custom styles  -->
        <script src="assets/js/jquery.helpers.js" type="text/javascript"></script>
        <script src="assets/js/custom.js" type="text/javascript"></script>
        <!-- End custom styles  -->
        <script src="assets/js/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="assets/js/moment-timezone-with-data.js" type="text/javascript"></script>
        <script src="assets/js/facebook.js"></script>
    </body>
</html>