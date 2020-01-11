<?php

include_once ("../../vendor/autoload.php");
use App\Contact\Contact;



$b = new Contact();

$data = $b->show($_SESSION['userId']);

if (!empty($data)) {
//    echo "<pre>";
//    print_r($row);
//    die();
$firstInbox = $data[0]['id'];
// echo $firstInbox;
// die();
foreach ($data as $row) {
  echo '<a href="inbox.php?id='.$row['id'].'">';
    echo '<div class="mail_list">';
      echo '<div class="left">';
        echo '<i class="fa fa-circle-o"></i>';
      echo '</div>';
      echo '<div class="right">';
        echo '<h3>'.$row['name'].'</h3>';
        $shortMessage = substr($row['message'],0,50);
        echo '<p>'.$shortMessage.'...</p>';
      echo '</div>';
    echo '</div>';
  echo '</a>';
}


    // $name = ;
    // $email = $row['email'];
    // $message =
    // $phone = $row['phone'];

}
else {
  $firstInbox = '';
}



 ?>
