<?php

include_once ("../../vendor/autoload.php");
use App\Search\Search;

$indexForFind='';
if(array_key_exists("value",$_GET)){
    $indexForFind ="unique_id";
}else {
  $indexForFind ="user_id";
}

$b = new Search();

$b->setData($_GET);
$data = $b->showSearch();

// echo "<pre>";
// print_r($data);
// die();
if (array_key_exists("0",$data)) {
  foreach($data as $item){
      echo '<div class=" m-t-lg  col-lg-12 col-md-12 col-sm-12 col-xs-12">';
          echo '<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">';
          $image = $b->findImage($item[$indexForFind]);
              echo '<a href="../index.php?user='.$item[$indexForFind].'" target="_blank"><img src="../../admin/assets/images/user/'.$image.'" class="img-responsive" /></a>';
          echo '</div>';
          echo '<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">';
          $name = $b->findName($item[$indexForFind]);
              echo '<h2 class="clear-m">'.$name.'</h2>';
          $location = $b->findLocation($item[$indexForFind]);
              echo '<h3>'.$location.'</h3>';
          $work = $b->findWork($item[$indexForFind]);
              echo '<p><small>'.$work.'</small></p>';
          echo '</div>';
      echo '</div>';
  }
}
else {
  echo '<div class=" m-t-lg  col-lg-12 col-md-12 col-sm-12 col-xs-12">';
      echo '<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">';
          echo '<h2 class="clear-m">Not Found</h2>';
      echo '</div>';
  echo '</div>';
}
