<?php
session_start();


$_SESSION = array();
if (isset($_COOKIE[session_name()])) {
  setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();
// URL should be root url
header("location:../admin_master/");



?>
