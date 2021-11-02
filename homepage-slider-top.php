<?php
require 'function.php';

$jumlahDataPerhalaman = 6;
$jumlahData = count(query("SELECT * FROM tb_sekolah"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman) ;
$halamanAktif = ( isset($_GET["page"]) ) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman ;

$jbm = query("SELECT * FROM tb_sekolah LIMIT $awalData, $jumlahDataPerhalaman ");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Daftar Sekolah</title>
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
        <!-- Start JS MAP  -->
        <link rel="stylesheet" href="assets/css/map.css" />
        <!-- End JS MAP  -- >
        <!-- Start select-picke  -->
        <link rel="stylesheet" href="assets/libraries/select-picker-auhau/dist/picker.min.css" />
        <!-- End select-picke  -->
        <link rel="stylesheet" href="assets/css/custom.css" />
        <!-- End custom styles  -->
        <script src="assets/js/modernizr.custom.js"></script>
    </head>
    <body class="">
        <header class="header">
            <div class="container container-palette top-bar affix-menu">
                <div class="container">
                    <div class="clearfix">
                        <div class="pull-left logo"><a href="index.html">Cari Sekolah</a></div>
                        
                        <div class="top-bar-btns">
                            <ul class="nav-items">
                                <li><a href="multilevel/index.php" class="btn btn-custom-primary">Masuk</a></li>
                                <li><a href="multilevel/keluar.php" class="btn btn-danger">Keluar </a></li>
                            </ul>
                            <button type="button" class="navbar-toggle" id="navigation-toogle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="pull-right navigation-wrapper">
                            <a href="" class="button-close"></a> 
                            <div class="logo"><a href="#">Cari Sekolah</a></div>
                            <ul class="nav navbar-nav nav-items default-menu" id="main-menu">
                                <li class="active"><a href="index.html">Beranda</a></li>
                                <li><a href="admin-sekolah.html">Admin</a></li>
                                <li><a href="homepage-slider-top.html">Daftar Sekolah</a></li>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /.header -->
        <div class="widget-slider-owl owl-dots-local owl-nav-local container container-palette">
            <div id="owl-slider" class="owl-slider owl-slider-content owl-carousel owl-theme">
                <div class="item">
                    <img src="assets/img/placeholder/bg_daftarsekolah.png" alt="" />
                    <div class="caption anim-1">
                        <h2 class="title">Daftar Sekolah</h2>
                        <span class="subtitle">menyedikan seluruh website sekolah</span>
                    </div>
                </div>
                <div class="item"><img src="assets/img/placeholder/bg_daftarsekolah.png" alt="" />
                    <div class="caption anim-2">
                        <h2 class="title">Daftar Sekolah</h2>
                        <span class="subtitle">seluruh nama website sekolah yang terdaftar </span>
                    </div>
                </div>
                <div class="item"><img src="assets/img/placeholder/bg_daftarsekolah.png" alt="" />
                    <div class="caption anim-3">
                        <div class="container">
                            <h2 class="title">Daftar Sekolah</h2>
                            <span class="subtitle">segera daftarkan sekolahmu di website cari sekolah</span>
                        </div>
                    </div>
                </div>
                <div class="item"><img src="assets/img/placeholder/bg_daftarsekolah.png" alt="" />
                    <div class="caption  anim-4">
                        <h2 class="title">Daftar Sekolah</h2>
                        <span class="subtitle">maka temukanlah sekolahmu disini </span>
                    </div>
                </div>
                <div class="item"><img src="assets/img/placeholder/bg_daftarsekolah.png" alt="" />
                    <div class="caption anim-5">
                        <h2 class="title">Daftar Sekolah</h2>
                        <span class="subtitle">cari sekolah akan menampilkan sekolahmu </span>
                    </div>
                </div>
            </div>  
        </div>
        <main class="slim-sections">
            <div class="widget-search container container-palette">
                <div class="filters filters-box boxed-wide">
                    <div class="container">
                        <form action="homepage-slider-top.html" class="local-form"> 
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="input" class="selectpicker">
                                            <option value="0">Jenjang Sekolah</option>
                                            <option value="1">SMK</option>
                                            <option value="2">SMA</option>
                                            <option value="3">SMP/MTS</option>
                                            <option value="4">SD/MI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <select name="input" class="selectpicker">
                                            <option value="0">Provinsi</option>
                                            <option value="1">Jawa Timur</option>
                                            <option value="2">Jawa Tengah</option>
                                            <option value="3">Jawa Barat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-custom btn-custom-secondary btn-wide">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
            <section class="section widget-recentproperties container container-palette">
                <div class="header">
                    <div class="container">
                        <div class="title-location">
                            <h2 class="location"><b>Hasil</b></h2>
                            
                        </div>
                    </div>
            
                </div>
                <div class="container">
                    <div class="row result-container row-flex">

<?php $i=1; ?>
<?php foreach ($jbm as $row) : ?>

                     
                    <div class="col-md-4 col-sm-6">
                            <div class="thumbnail thumbnail-property">
                                <div class="thumbnail-image" style="height: 350px;">
                                    <img src="img/<?= $row["logo"]; ?>" alt=""  />
                                    <a href="listing.php?id=<?= $row["id"];?>"></a>
                                </div>
                                <div class="caption">
                                    <div class="caption-ls">
                                        <h3 class="thumbnail-title"><a href="listing.php?id=<?= $row["id"];?>"><?= $row["nama_sekolah"];?></a></h3>
                                        <span class="type"><?= $row["kategori"]; ?></a>
                                        </span>
                                    </div>
                                    <div class="caption-rs">
                                        <a href="<?= $row["maps"]; ?>" class="btn-marker">
                                            <span class="box"><i class="fa fa-map-marker"></i></span>
                                            <span class="title"><?= $row["alamat"]; ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>                
<?php $i++; ?>
<?php endforeach; ?>                                 
                    </div>
                    <div class="text-center">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                        <?php if( $halamanAktif > 1) :?>                                
                                <li>
                                    <a href="?page=<?= $halamanAktif - 1; ?>" aria-label="Previous">
                                        &laquo;
                                    </a>
                                </li>
                        <?php endif; ?>

                        <?php for ($i=1; $i <=$jumlahHalaman; $i++) : ?> 
                            <?php if ( $i == $halamanAktif) : ?>                               
                                 <li class="active"><a href="?page=<?= $i; ?>"><?= $i; ?></a></li>
                            <?php else :?>
                                 <li><a href="?page=<?= $i; ?>"><?= $i; ?></a></li>
                            <?php endif ;?>
                         <?php endfor?>
                         
                        <?php if( $halamanAktif < $jumlahHalaman) :?> 
                                <li>              
                                    <a href="?page=<?= $halamanAktif + 1; ?>" aria-label="Next">
                                        &raquo;
                                    </a>
                                </li>
                        <?php endif; ?>                               
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>
            <section class="section container container-palette">
                <div class="container">
                    <div class="section-title slim">
                        <h2 class="title">Jenjang Sekolah</h2>
                    </div>
                  <div class="row">
                        <div class="col-md-4 col-sm-6" style="width: 290px;">
                            <figure class="card card-preview">
                                <img src="assets/img/placeholder/card-preview-sd.jpg" alt="" />
                                <a href="blog-preview-sd.html" class="link"></a>
                                <figcaption class="description">
                                    <h2>SD</h2>
                                    <p></p>
                                </figcaption>

                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6" style="width: 290px;">
                            <figure class="card card-preview">
                                <img src="assets/img/placeholder/smp-1.jpg" alt="" />
                                <a href="blog-preview-smp.html" class="link"></a>
                                <figcaption class="description">
                                    <h2>SMP</h2>
                                    <p></p>
                                </figcaption>

                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6" style="width: 290px;">
                            <figure class="card card-preview">
                                <img src="assets/img/placeholder/card-preview-sma.jpg" alt="" />
                                <a href="blog-preview-sma.html" class="link"></a>
                                <figcaption class="description">
                                    <h2>SMA</h2>
                                    <p></p>
                                </figcaption>

                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6" style="width: 290px;">
                            <figure class="card card-preview">
                                <img src="assets/img/placeholder/card-preview-smk-1.jpg" alt="" />
                                <a href="blog-preview-smk.html" class="link"></a>
                                <figcaption class="description">
                                    <h2>SMK</h2>
                                    <p></p>
                                </figcaption>

                            </figure>
                        </div>
                    </div>
                </div>
            </section> <!-- /. section preview category -->
            <section class="section container container-palette">
                
            </section> <!-- /. How it Works -->
            <section class="section-picks section container container-palette">
                <div class="container">
                    <div class="section-title slim">
                        <h2 class="title">sekolah yang banyak di minati </h2>
                    </div>
                    <div id="owl-carousel-items" class="owl-carousel-items owl-carousel owl-theme owl-carousel-property">
                        <div class="item">
                            <div class="thumbnail thumbnail-property">
                                <div class="thumbnail-image">
                                    <img src="assets/img/placeholder/card-preview.png" alt="" />
                                    <a href="listing.html"></a>
                                    <div class="icons">
                                        <a href="https://www.facebook.com/share.php?u=http://test.com&amp;title="><i class="ion-android-share-alt"></i></a>
                                        <a href="#" class='add_to_favorites'><i class="ion-android-favorite"></i></a>
                                        <a href="listing.html"><i class="ion-location"></i></a>
                                        <a href="listing.html"><i class="ion-forward"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="caption-ls">
                                        <h3 class="thumbnail-title"><a href="listing.html">SMKN 8 MALANG </a></h3>
                                        <span class="thumbnail-ratings">
                                            4.5 <i class="icon-star-ratings-4-5"></i>
                                        </span>
                                        <span class="type">
                                            <a href="#">SMK </a>
                                        </span>
                                    </div>
                                    <div class="caption-rs">
                                        <a href="listing.html" class="btn-marker">
                                            <span class="box"><i class="fa fa-map-marker"></i></span>
                                            <span class="title">jl. teluk pacitan, arjosari </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>               
                        <div class="item">
                            <div class="thumbnail thumbnail-property">
                                <div class="thumbnail-image">
                                        <img src="assets/img/placeholder/logoman2mlg.png" alt="" />
                                    <a href="listing.html">
                                    </a>
                                    <div class="icons">
                                        <a href="https://www.facebook.com/share.php?u=http://test.com&amp;title="><i class="ion-android-share-alt"></i></a>
                                        <a href="#" class='add_to_favorites'><i class="ion-android-favorite"></i></a>
                                        <a href="listing.html"><i class="ion-location"></i></a>
                                        <a href="listing.html"><i class="ion-forward"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="caption-ls">
                                        <h3 class="thumbnail-title"><a href="listing.html">MAN 2 MALANG </a></h3>
                                        <span class="thumbnail-ratings">
                                            5.0 <i class="icon-star-ratings-5"></i>
                                        </span>
                                        <span class="type">
                                            <a href="#">SMA </a>  
                                        </span>
                                    </div>
                                    <div class="caption-rs">
                                        <a href="listing.html" class="btn-marker">
                                            <span class="box"><i class="fa fa-map-marker"></i></span>
                                            <span class="title">jl. bandung no.7, klojen,malang </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>                
                        <div class="item">
                            <div class="thumbnail thumbnail-property">
                                <div class="thumbnail-image">
                                    <img src="assets/img/placeholder/logosman3malang.jfif" alt="" />
                                    <a href="listing.html"></a>
                                    <div class="icons">
                                        <a href="https://www.facebook.com/share.php?u=http://test.com&amp;title="><i class="ion-android-share-alt"></i></a>
                                        <a href="#" class='add_to_favorites'><i class="ion-android-favorite"></i></a>
                                        <a href="listing.html"><i class="ion-location"></i></a>
                                        <a href="listing.html"><i class="ion-forward"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="caption-ls">
                                        <h3 class="thumbnail-title"><a href="listing.html">SMAN 3 MALANG </a></h3>
                                        <span class="thumbnail-ratings">
                                            3.0 <i class="icon-star-ratings-3"></i>
                                        </span>
                                        <span class="type">
                                            <a href="#">SMA </a>
                                        </span>
                                    </div>
                                    <div class="caption-rs">
                                        <a href="listing.html" class="btn-marker">
                                            <span class="box"><i class="fa fa-map-marker"></i></span>
                                            <span class="title">JL.sultan agung no.7,klojen, malang </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumbnail thumbnail-property">
                                <div class="thumbnail-image">
                                    <img src="assets/img/placeholder/logosman1mlg.png" alt="" />
                                    <a href="listing.html"></a>
                                    <div class="icons">
                                        <a href="https://www.facebook.com/share.php?u=http://test.com&amp;title="><i class="ion-android-share-alt"></i></a>
                                        <a href="#" class='add_to_favorites'><i class="ion-android-favorite"></i></a>
                                        <a href="listing.html"><i class="ion-location"></i></a>
                                        <a href="listing.html"><i class="ion-forward"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="caption-ls">
                                        <h3 class="thumbnail-title"><a href="listing.html">SMAN 1 MALANG </a></h3>
                                        <span class="thumbnail-ratings">
                                            4.5 <i class="icon-star-ratings-4-5"></i>
                                        </span>
                                        <span class="type">
                                            <a href="#">SMA </a>
                                        </span>
                                    </div>
                                    <div class="caption-rs">
                                        <a href="listing.html" class="btn-marker">
                                            <span class="box"><i class="fa fa-map-marker"></i></span>
                                            <span class="title">JL.tugu no.1,kidul dalem, klojen </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>                
                        <div class="item">
                            <div class="thumbnail thumbnail-property">
                                <div class="thumbnail-image">
                                        <img src="assets/img/placeholder/logosmpn1mlg.jfif" alt="" />
                                    <a href="listing.html">
                                    </a>
                                    <div class="icons">
                                        <a href="https://www.facebook.com/share.php?u=http://test.com&amp;title="><i class="ion-android-share-alt"></i></a>
                                        <a href="#" class='add_to_favorites'><i class="ion-android-favorite"></i></a>
                                        <a href="listing.html"><i class="ion-location"></i></a>
                                        <a href="listing.html"><i class="ion-forward"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="caption-ls">
                                        <h3 class="thumbnail-title"><a href="listing.html">SMPN 1 MALANG </a></h3>
                                        <span class="thumbnail-ratings">
                                            5.0 <i class="icon-star-ratings-5"></i>
                                        </span>
                                        <span class="type">
                                            <a href="#">SMA </a> 
                                        </span>
                                    </div>
                                    <div class="caption-rs">
                                        <a href="listing.html" class="btn-marker">
                                            <span class="box"><i class="fa fa-map-marker"></i></span>
                                            <span class="title">jl.lawu no.12 oro-oro dowo,klojen malang </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>                
                        <div class="item">
                            <div class="thumbnail thumbnail-property">
                                <div class="thumbnail-image">
                                    <img src="assets/img/placeholder/logosditinsanprmata.png" alt="" />
                                    <a href="listing.html"></a>
                                    <div class="icons">
                                        <a href="https://www.facebook.com/share.php?u=http://test.com&amp;title="><i class="ion-android-share-alt"></i></a>
                                        <a href="#" class='add_to_favorites'><i class="ion-android-favorite"></i></a>
                                        <a href="listing.html"><i class="ion-location"></i></a>
                                        <a href="listing.html"><i class="ion-forward"></i></a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <div class="caption-ls">
                                        <h3 class="thumbnail-title"><a href="listing.html">SDIT INSAN PERMATA </a></h3>
                                        <span class="thumbnail-ratings">
                                            3.0 <i class="icon-star-ratings-3"></i>
                                        </span>
                                        <span class="type">
                                            <a href="#">SD/MI </a>
                                        </span>
                                    </div>
                                    <div class="caption-rs">
                                        <a href="listing.html" class="btn-marker">
                                            <span class="box"><i class="fa fa-map-marker"></i></span>
                                            <span class="title">JL.akordion utara no.3 ,tunggulwulung </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>              
                    </div>
                </div>
            </section> <!-- /.section-picks -->
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
                                <li><a href="testimoni.html">Testimoni </a></li>
                                
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
        <!-- Start custom styles  -->
        <script src="assets/libraries/parallax/parallax.js"></script>
        <script src="assets/js/jquery.helpers.js" type="text/javascript"></script>
        <script src="assets/js/custom.js" type="text/javascript"></script>
        <!-- End custom styles  -->
        <script src="assets/js/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="assets/js/moment-timezone-with-data.js" type="text/javascript"></script>
        <script src="assets/js/facebook.js"></script>
    </body>
</html>