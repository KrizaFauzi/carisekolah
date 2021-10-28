
<?php
session_start();
session_unset();
session_destroy();
setcookie('username', '',0, '/');
setcookie('gmail', '',0, '/');
header('location:index.php');
?>