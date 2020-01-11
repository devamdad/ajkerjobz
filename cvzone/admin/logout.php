<?php
session_start();

include 'views/php/_header.php';



$_SESSION = array();
if (isset($_COOKIE[session_name()])) {
  setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();
// URL should be root url
header("location:".$baseUrl."admin/");



?>
