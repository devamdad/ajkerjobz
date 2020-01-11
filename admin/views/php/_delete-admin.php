<?php
$adminId=$_POST['contentId'];

include '../db/dbconnection.php';

$sql="DELETE FROM tk_admin_tbl where admin_id='$adminId'";
$query = $connection->query($sql);
  if ($query) {
  // $GLOBALS['admin_success']="Successfully Deleted Admin ".$adminId;
  // header("location:add-admin.php");
  }else{
  mysql_error();
  }

 ?>
