<?php

include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Search\Search;

if (array_key_exists("contentId",$_POST)) {
  $key = $_POST['contentId'];
  $tbl = '';

  if (array_key_exists("contentKey",$_POST)) {
   $tbl=$_POST['contentKey'];
  }

  $b = new Search();

  $b->show($key,$tbl);
}else {
  header("location:".$baseUrl."cvzone/views/layout/search-result.php?value=".$_POST['key']);
}



 ?>
