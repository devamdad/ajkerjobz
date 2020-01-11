<?php
session_start();



// include 'db/dbconnection.php';
// $adminId=$_SESSION["login_admin"];
// $date=date("Y-m-d");
// $sql="UPDATE tk_admin_tbl SET last_login='{$date}' where admin_id='$adminId'";
//
// $query = $connection->query($sql);
// if ($query) {
//   $_SESSION = array();
//   if (isset($_COOKIE[session_name()])) {
//     setcookie(session_name(), '', time()-42000, '/');
//
//
//   }
//   session_destroy();
//   // URL should be root url
//   header("location:http://localhost/Admin/");
//
// }

$_SESSION = array();
if (isset($_COOKIE[session_name()])) {
  setcookie(session_name(), '', time()-42000, '/');
}
session_destroy();
// URL should be root url
header("location:../admin/");



?>
