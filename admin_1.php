<?php
$conn = mysqli_connect("localhost","root","","carisekolah");

if (!$conn) {
    echo "koneksi gagal" . mysql_connect_error();
}


 session_start();

 
 if($_SESSION['level']==""){
  header("location:multilevel/index.php");
 }

 $get1 = mysqli_query($conn,"SELECT * FROM loginmulti");
 $count1 = mysqli_num_rows($get1);

 $get2 = mysqli_query($conn,"SELECT * FROM tb_sekolah");
 $count2 = mysqli_num_rows($get2); 

 $get3 = mysqli_query($conn,"SELECT * FROM testimoni");
 $count3 = mysqli_num_rows($get3);
 


 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Halaman Developer</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
                            <a href="admin_2.php"><i class="nav-icon ion-android-clipboard"></i><span class="nav-label">Daftar sekolah </span></a>
                        </li>       
                        <li>
                            <a href="admin_3.php"><i class="ion-email"></i><span class="nav-label">Daftar berita</span></a>
                        </li>                 
                        <li>
                            <a href="admin_5.php"><i class="nav-icon ion-android-star"></i><span class="nav-label">Testimoni</span></a>
                        </li>                             
                        <li>
                            <a href="multilevel/keluar.php"><i class="nav-icon ion-android-exit"></i><span class="nav-label">keluar </span></a>
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
                    <div class="section-shortcut">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                <div class="box-shortcut" style = "width:300px;">

                                    <div class="box-shortcut-body" >
                                        <span class="count color-green"><?=$count2;?></span><span class="title">jumlah sekolah</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                <div class="box-shortcut">
                                    <div class="box-shortcut-body"><span class="count color-yellow"><?=$count1;?></span><span class="title">jumlah akun</span></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                <div class="box-shortcut">
                                    <div class="box-shortcut-body"><span class="count color-red"><?=$count3;?></span><span class="title">ulasan</span></div>
                                </div>
                        </div>
                    </div>
                    <div class="row swap-md-down">
                        <div class="col-lg-9 swap-bottom">
                            <div class="section-reviews">
                                <div class="section-header">
                                    <h2 class="title">
                                        Akun yang telah terdaftar
                                    </h2>
                                </div>
                <div class="card-body">
                    <table class="table" style="width: 10000px; background-color: floralwhite;">
                        <thead>
                                 <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">gmail</th>
                                    <th scope="col">Sebagai</th>
                                </tr>
                            <tbody>
                            <?php
                                $no = 1;
                                $query = mysqli_query($conn,"SELECT * FROM loginmulti");
                                while ($dt = mysqli_fetch_assoc($query)) {
                            ?>
                            
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $dt['username']; ?></td>
                                    <td><?= $dt['gmail']; ?></td>
                                    <td><?= $dt['level']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>


                            </tbody>
                        </thead>
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