<?php

//COOKIES
// setcookie('user_name','Admin Góc Làm Web',time()+(86400*30),"/");

//SESSION
session_start();
$_SESSION['color']='Xanh';
echo $_SESSION['color'];

$_SESSION['color']='RED';
$s=isset($_SESSION['color']) ? $_SESSION['color']:'';
echo $s;

session_unset();
session_destroy();
$s=isset($_SESSION['color']) ? $_SESSION['color']:'';
echo $s;

?>