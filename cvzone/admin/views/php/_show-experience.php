<?php

include_once ("../../vendor/autoload.php");
use App\Experience\Experience;


$b = new Experience();

$row = $b->show($_SESSION['userId']);

if (isset($row)) {
  foreach ($row as $value) {
    echo '<tr>';
      echo '<td>';
        echo '<p>'.$value['designation'].'</p>';
      echo '</td>';
      echo '<td>';
        echo $value['company_name'];
      echo '</td>';
      echo '<td>';
        echo $value['start_date'];
      echo '</td>';
      echo '<td>';
        echo $value['end_date'];
      echo '</td>';
      echo '<td>';
        echo $value['company_location'];
      echo '</td>';
      echo '<td>';
        echo '<a href="update-experience.php?id='.$value['id'].'" class="btn btn-success">Update</a>';
      echo '</td>';
      echo '<td>';
        echo '<a  data-row="'.$value['id'].'" class="btn btn-danger delete-experience">Delete</a>';
      echo '</td>';
    echo '</tr>';
  }

}



 ?>
