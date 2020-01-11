<?php

include_once ("../../vendor/autoload.php");
use App\Work\Work;


$b = new Work();

$row = $b->show($_SESSION['userId']);

if (isset($row)) {
  foreach ($row as $value) {
    echo '<tr>';
      echo '<td>';
        echo '<img src="../../assets/images/work/'.$value['img'].'" class="" style="width:100px;height:100px;">';
      echo '</td>';
      echo '<td>';
        echo $value['title'];
      echo '</td>';
      echo '<td>';
        echo $value['category'];
      echo '</td>';
      echo '<td>';
        echo '<a href="update-work.php?id='.$value['id'].'" class="btn btn-success">Update</a>';
      echo '</td>';
      echo '<td>';
        echo '<a  data-row="'.$value['id'].'" class="btn btn-danger delete-work">Delete</a>';
      echo '</td>';
    echo '</tr>';
  }

}



 ?>
