<?php

include_once ("../../vendor/autoload.php");
use App\Contact\Contact;

if (array_key_exists("id",$_GET)) {
  $showInboxId = $_GET['id'];
}
else {
  $showInboxId = $firstInbox;
}



$b = new Contact();

$row = $b->showInboxBody($showInboxId);

if (!empty($row)) {
  //  echo "<pre>";
  //  print_r($row);
  //  die();

  $monthArray  = array('-01-' => 'JAN', '-02-' => 'FEB', '-03-' => 'MAR', '-04-' => 'APR', '-05-' => 'MAY', '-06-' => 'JUN', '-07-' => 'JUL', '-08-' => 'AUG', '-09-' => 'SEP', '-10-' => 'OCT', '-11-' => 'NOV', '-12-' => 'DEC');

    $inboxId = $row[0]['id'];
    $name = $row[0]['name'];
    $email = $row[0]['email'];
    $message = $row[0]['message'];
    $date = $row[0]['created_at'];
    $year = substr($date,0,4);
    $m = substr($date,4,4);
    $month = $monthArray[$m];
    $day = substr($date,8,-8);
    $time = substr($date,10,-3);

    $finalDate = $time.", ".$day." ".$month." ".$year;

    $phone = $row[0]['phone'];

}
else {
  $inboxId = '';
  $name = '';
  $email = '';
  $message = '';
  $date = '';


  $finalDate = '';

  $phone = '';

}



 ?>
