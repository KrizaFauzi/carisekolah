<?php
 
 require 'function.php';
 
 
 $conn = mysqli_connect("localhost","root","","carisekolah");

 if (!$conn) {
     echo "koneksi gagal" . mysql_connect_error();
 }
?>
 
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="UTF-8" /> 
        <title>Beranda</title> 
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
            <div class="container container-palette top-bar overflow top-bar-white t-overflow affix-menu">
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
            </div>
            <div class="section-search-area section container container-palette" data-parallax="scroll" data-image-src="assets/img/placeholder/bg_beranda.png">
                <div class="container">
                    <div class="body">
                        <div class="h-area">
                            <h1 class="title" style="font-family: cursive;">Cari Sekolahmu</h1>
                            <span class="subtitle" style="font-family: cursive;">Kami menyediakan website sekolah</span>
                        </div>
                        <div class="local-form">
                            <form action="#">
                                <center><div class="form-group">
                                    <input type="text" class="form-control" name="cari" placeholder="Nama Sekolah" style="width:300px;height:50px;"/>
                                </div>         
                                <div class="form-group form-group-btns">
                                    <button type="submit" class="btn btn-custom btn-custom-secondary"style="height:50px;">Cari</a>
                                </div></center>
                            </form>
                        </div>
                        <div class="tags">
                            <ul class="list-tags" id="search_types">
                                <li><a href="#" data-type="SMA"><i class="ion-university"></i>SMA </a></li>
                                <li><a href="#" data-type="SMK"><i class="ion-university"></i>SMK</a></li>
                                <li><a href="#" data-type="SMP/MTS"><i class="ion-ios-book"></i>SMP/MTS</a></li>
                                <li><a href="#" data-type="SD/MI"><i class="ion-ios-book"></i>SD/MI</a></li>
                            </ul>
                        </div>
                    </div>
                </div>   
            </div> <!-- /.section-search-area -->
        </header><!-- /.header -->
        <main class="zebra-childs">
            <section class="section-picks section container container-palette">
                <div class="container">
                    <div class="section-title">
                        <h2 class="title">Daftar Sekolah</h2>
                        <span class="subtitle">Hasil pencarian </span>
                    </div>
                    <div class="row result-container row-flex">
                        <?php
                            $no = 1;
                            $query = mysqli_query($conn,"SELECT * FROM tb_sekolah LIMIT 0, 3 ");

                            if (isset($_GET['cari'])) {
                                $query = mysqli_query($conn,"SELECT * FROM tb_sekolah WHERE nama_sekolah LIKE '%".$_GET['cari']."%'");
                            }
                            while ($dt = mysqli_fetch_assoc($query)) {
                            ?> 
                        <div class="col-md-4 col-sm-12">
                            <div class="thumbnail thumbnail-property">
                                <div class="thumbnail-image" style="height: 350px;">
                                    <center><img src="img/<?= $dt["logo"]; ?>"  alt="" /></center>
                                    <a href="listing.html"></a>
                                </div>
                                <div class="caption">
                                    <div class="caption-ls">
                                        <h3 class="thumbnail-title"><a href="listing.php?id=<?= $dt["id"];?>" class="listing-link"><?= $dt["nama_sekolah"]; ?></a></h3>
                                        <span class="type">
                                            <a href="#"><?= $dt["kategori"];?></a>
                                        </span>
                                    </div>
                                    <div class="caption-rs">
                                        <a href="<?= $dt["maps"];?>" class="btn-marker">
                                            <span class="box"><i class="fa fa-map-marker"></i></span>
                                            <span class="title"><?= $dt["alamat"];?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>     
                            <?php
                            }
                            ?>           
                        
                    </div>
                </div>
            </section> <!-- /.section-picks -->
            <section class="section-category section container container-palette">
                <div class="container">
                    <div class="section-title">
                        <h2 class="title">Jenjang Sekolah</h2>
                        <span class="subtitle"></span>
                    </div>
                    <div class="row result-container row-flex">
                        <div class="col-md-3 col-sm-6">
                            <div class="card card-category">
                                <a href="blog-preview-sma.html">
                                   <img src="assets/img/placeholder/card-preview-sma.jpg" class="image-cover" alt="" />
                                    <div class="badget b-icon"><i class="ion-university"></i></div>
                                    <div class="bottom">
                                        <h3 class="title">SMA</h3>
                                        <div class="hidden-subtitle">Sekolah Menengah Atas adalah sekolah anak-anak...</div>
                                    </div>
                                </a>
                            </div>
                        </div>            
                        <div class="col-md-3 col-sm-6">
                            <div class="card card-category">
                                <a href="blog-preview-smk.html">
                                    <img src="assets/img/placeholder/card-preview-smk-1.jpg" class="image-cover" alt="" />
                                    <div class="badget b-icon"><i class="ion-university"></i></div>
                                    <div class="bottom">
                                        <h3 class="title">SMK</h3>
                                        <div class="hidden-subtitle">Sekolah Menengah Kejuruan atau disingkat SMK merupakan...</div>
                                    </div>
                                </a>
                            </div>
                        </div>           
                        <div class="col-md-3 col-sm-6">
                            <div class="card card-category">
                                <a href="blog-preview-smp.html">
                                    <img src="assets/img/placeholder/smp-1.jpg" class="image-cover" alt="" />
                                    <div class="badget b-icon"><i class="ion-ios-book"></i></div>
                                    <div class="bottom">
                                        <h3 class="title">SMP/MTS</h3>
                                        <div class="hidden-subtitle">Pendidikan Dasar SMP Sekolah Menengah Pertama...</div>
                                    </div>
                                </a>
                            </div>  
                        </div>        
                        <div class="col-md-3 col-sm-6">
                            <div class="card card-category">
                                <a href="blog-preview-sd.html">
                                    <img src="assets/img/placeholder/card-preview-sd.jpg" class="image-cover" alt="" />
                                    <div class="badget b-icon"><i class="ion-ios-book"></i></div>
                                    <div class="bottom">
                                        <h3 class="title">SD/MI</h3>
                                        <div class="hidden-subtitle">sekolah dasar (SD) yaitu lembaga pendidikan yang...</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /.section-category -->
            <section class="section-reviews section container container-palette">
                <div class="container">
                    <div class="section-title">
                        <h2 class="title">Testimoni</h2>
                        <span class="subtitle"></span>
                    </div>
                    <div class="reviews-carousel">
                        <div class="nav-r">
                            <a href="#" class="nav-r-btn btn-left"><i class="ion-ios-arrow-left"></i></a>
                            <a href="#" class="nav-r-btn btn-right"><i class="ion-ios-arrow-right"></i></a>
                        </div>
                        <div class="reviews-results clearfix">
                            <div class="review show">
                                <div class="description">
                                    Sangat Membantu Untuk mengetahui tentang sekolah sekolah
                                </div>
                                <div class="user-card">
                                    <div class="user-card-image image-cover">
                                        <img src="assets/img/placeholder/anony.png" alt="" />
                                    </div>
                                    <div class="body">
                                        <h3 class="name">Dorian Breen</h3>
                                        <div class="contact"><span>untuk</span> <a href="index.php" class="link">Cari Sekolsh</a></div>
                                    </div>
                                </div>
                            </div>                
                            <div class="review">
                                <div class="description">
                                   sanggat membantu
                                </div>
                                <div class="user-card">
                                    <div class="user-card-image image-cover">
                                        <img src="assets/img/placeholder/anony.png" alt=""  />
                                    </div>
                                    <div class="body">
                                        <h3 class="name">Jonh Black</h3>
                                        <div class="contact"><span>Untuk</span> <a href="index.php" class="link">Cari Sekolah</a></div>
                                    </div>
                                </div>
                            </div>               
                            <div class="review">
                                <div class="description">
                                     Website ini sanggat bermanfaat  
                                </div>
                                <div class="user-card">
                                    <div class="user-card-image image-cover">
                                        <img src="assets/img/placeholder/anony.png" alt=""  />
                                    </div>
                                    <div class="body">
                                        <h3 class="name">Katryn Niclos</h3>
                                        <div class="contact"><span>untuk</span> <a href="index.php" class="link">Cari Sekolah</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /.section-reviews -->
            <section class="section-blog section container container-palette">
                <div class="container">
                    
                </div>
            </section> <!-- /.section-blog -->
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
                                <li><a href="testimoni.php">Testimoni</a></li>
                                
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
        </footer> <!-- /.footer -->
        
        </div><!-- /.modal -->
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