<?php

include_once ("../../vendor/autoload.php");
use App\Post\Post;


$b = new Post();

$row = $b->show($_SESSION['userId']);

if (isset($row)) {
  foreach ($row as $value) {
    echo '<tr>';
      echo '<td>';
        echo '<p>'.$value['title'].'</p>';
      echo '</td>';
      echo '<td>';
        echo $value['categories'];
      echo '</td>';
      echo '<td>';
        echo $value['tags'];
      echo '</td>';
      echo '<td>';
        echo '<a href="update-publication.php?id='.$value['id'].'" class="btn btn-success">Update</a>';
      echo '</td>';
      echo '<td>';
        echo '<a  data-row="'.$value['id'].'" class="btn btn-danger delete-publication">Delete</a>';
      echo '</td>';
    echo '</tr>';
  }

}



 ?>
