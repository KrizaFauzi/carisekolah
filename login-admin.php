<?php 

session_start();
require 'function.php';

if (isset($_COOKIE['id'])&& isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($db, "SELECT username FROM registerdv WHERE id = $id ");
    $row = mysqli_fetch_assoc($result);

    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;

    }

    }




if ( isset($_SESSION['login'])) {
  header("location: admin_1.html");
  exit;
}



if (isset($_POST['login'])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM registerdv WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1 ) {
        
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ){
            $_SESSION['login'] = true; 
            if (isset($_POST['remember'])) {
                setcookie('id' , $row['id'] , time() + 60);
                setcookie('key' , hash('sha256', $row['username']),time()+60);
            }
            header ("location: admin_1.html");
            exit;


        }
    }

    $error = true;

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="assets/img/logocs.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900%7COpen+Sans" rel="stylesheet" />
    <link rel="stylesheet" href="assets/libraries/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/libraries/ionicons-2.0.1/css/ionicons.min.css" />

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-img.png" alt="sing up image"></figure>
                       <a href="register-admin.php" class="signup-image-link">Daftarkan akun</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Masuk</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Nama Pengguna"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Kata sandi"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Ingat akun</label>
                            </div>
                            <div class="form-group form-button">
                               
                                <a href="admin_1.html" type="submit" name="signin" id="signin" class="form-submit" value="Log in">Masuk</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>