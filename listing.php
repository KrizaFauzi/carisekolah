<?php
require 'function.php';


$id = $_GET["id"];

$jbm = query("SELECT * FROM tb_sekolah WHERE id = $id")[0];



$bsk = query("SELECT * FROM tb_berita WHERE nama_sekolah = 'smpn 7 malang' ");




?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Nama Sekolah </title>
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
        <link rel="stylesheet" href="assets/css/admin-local.css" />
        <link rel="stylesheet" href="assets/css/admin-local-media.css" />
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
            <div class="container container-palette top-bar affix-menu top-bar-color top-bar-white">
                <div class="container-top">
                    <div class="clearfix">
                        <div class="pull-left logo"><a href="index.php">C</a></div>
                        <div class="pull-left">
                            <div class="local-form">
                            </div>
                        </div> 
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
        </header><!-- /.header -->
        <main class="main container container-palette"> 
            <div class="widget container container-palette listing-gallery">
                <div class="container">
                    <div class="content">
                        <div class="row-s">
                            <div class="col-sm-4"><a href="img/<?= $jbm["gambar_1"];?>" class="image-cover-div" ><img src="img/<?= $jbm["gambar_1"];?>" alt="" /></a></div>
                            <div class="col-sm-4"><a href="img/<?= $jbm["gambar_2"];?>" class="image-cover-div"><img src="img/<?= $jbm["gambar_2"];?>" alt="" /></a></div>
                            <div class="col-sm-4"><a href="img/<?= $jbm["gambar_3"];?>" class="image-cover-div" ><img src="img/<?= $jbm["gambar_3"];?>" alt="" /></a></div>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="widget container container-palette widget-listing-title">
                <div class="container wb">
                    <div class="options">
                        <div class="type-box"><img src="img/<?= $jbm["logo"];?>" style="width: 120px;" alt="" /></div>
                        <div class="options-body">
                            <h1 class="title"><?= $jbm["nama_sekolah"]; ?></h1>
                            <div class="types">
                            <?= $jbm["kategori"];?>
                            </div>
                        </div>
                    </div>
                    <div class="actions">    
                        <a href="<?= $jbm["maps"];?>" class="btn btn-custom-s btn-custom-default"><i class="ion-location"></i>Lokasi</a>  
                        <a class="btn btn-custom-s btn-custom-default" href="https://www.facebook.com/share.php?u=http://test.com&amp;title=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="ion-share"></i>Bagikan</a>  
                    </div>
                </div>
            </div> 
            <div class="container container-palette widget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9" >
                            <div class="widget-styles">
                                <textarea  class="form-control" rows="20" disabled style="background-color: white;"><?= $jbm["deskripsi"];?></textarea>
                            </div>   
                            <div class="widget-styles">
                                <div class="header content t-left"><h2>BERITA TERBARU SEKOLAH</h2></div>
                                <ul class="list-reviews">
                                    <li class="content-box"> 
                                           <table class="table-panel footable table-listings"> 
                                                <?php $i=1; ?>
                                                <?php foreach ($bsk as $row) : ?>                                                                                    
                                                    <tr>
                                                        <td><?= $i ?></td>
                                                        <td data-title="Preview" data-breakpoints="xs" data-type="html" class="preview">
                                                            <a href="berita.php?id=<?= $row["id"];?>" class="link">
                                                               <img class="image-preview preview-95x88"  src="img/<?= $row["berita_1"]; ?>" alt="">
                                                            </a>
                                                        </td>
                                                        <td class="preview-mobile" data-type="html">
                                                            <div>
                                                                <a href="berita.php?id=<?= $row["id"];?>"  class="listing-link"><?= $row["judul"]; ?> </a>
                                                            </div>
                                                            <div>
                                                                <span class="listing-tags tags">
                                                                    <?= $row["asal"];?>  ·  <?= $row["isi_berita"];?>
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td data-title="Address" data-breakpoints="xs" data-type="html" class="location-cell">
                                                           
                                                        </td>
                                                        <td data-title="" data-breakpoints="xs" data-type="html">
                                                            
                                                        </td>
                                                    </tr>
                                                <?php $i++; ?>
                                                <?php endforeach; ?>
                                        </table>
                                    </li>
                                </ul>
                                <div class="caption-title t-left content" id="write_review"></div>
                                
                            </div>
                        </div>
                        <div class="col-sm-3">
                                <div class="content-box">
                                    <ul class="list-contact">
                                        <li class="icon address"><a href="<?= $jbm["maps"];?>"><?= $jbm["alamat"];?></li></a>
                                        <li class="icon address"><?= $jbm["provinsi"];?></li>                                        <li class="icon earth"><a href="mailto:<?= $jbm["email"];?>"><?= $jbm["email"];?></li></a>
                                        <li class="icon phone"><?= $jbm["no_sekolah"];?></li>
                                        <li class="icon clock multi"><div class="title">jam masuk</div>
                                            <ul>
                                                <li class="fill column"><span>Senin :</span> <span><?= $jbm["senin"];?></span></li>
                                                <li class="fill column"><span>Selasa :</span> <span><?= $jbm["selasa"];?></span></li>
                                                <li class="fill column"><span>Rabu :</span> <span><?= $jbm["rabu"];?></span></li>
                                                <li class="fill column"><span>Kamis :</span> <span><?= $jbm["kamis"];?></span></li>
                                                <li class="fill column"><span>Jumat :</span> <span><?= $jbm["jumat"];?></span></li>
                                                <li class="fill column"><span>Sabtu :</span> <span><?= $jbm["sabtu"];?></span></li>
                                                <li class="fill column"><span>Minggu :</span> <span><?= $jbm["minggu"];?></span></li>
                                               
                                                
                                            </ul>
                                        </li>
                                        <li class="ion-university"><div class="title">Jurusan</div>
                                            <ul>
                                                <li class="fill column"><?= $jbm["jurusan"];?></li>
                                            </ul>
                                        </li>
                                        <li class="icon earth"><a href="<?= $jbm["ofc_web"];?>">Website Official Sekolah</a></li>
                                    </ul>
                                </div>
                            </div>
                           

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
        <script src="assets/js/jquery.helpers.js" type="text/javascript"></script>
        <!-- Start picker  -->
        <script type="text/javascript" src="assets/libraries/select-picker-auhau/dist/picker.min.js"></script>
        <!-- End picker  -->
        <!-- Start custom styles  -->
        <script src="assets/js/jquery.helpers.js" type="text/javascript"></script>
        <script src="assets/js/custom.js" type="text/javascript"></script>
        <!-- End custom styles  -->
        <script src="assets/js/moment-with-locales.min.js" type="text/javascript"></script>
        <script src="assets/js/moment-timezone-with-data.js" type="text/javascript"></script>
        <script src="assets/js/facebook.js"></script>
    </body>
</html>