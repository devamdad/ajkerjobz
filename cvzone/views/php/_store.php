<?php
session_start();
include '_header.php';
include_once ("../../vendor/autoload.php");
use App\Login\Login;

$b = new Login();

if (isset($_POST)) {
  if (strlen($_POST['password'])<8) {
    $_SESSION['error']="Invalid input";
    header("location:".$baseUrl."cvzone/login.php#toregister");
  }
  else {
    if ($_POST['password']!==$_POST['password_con']) {
      $_SESSION['error']="Invalid input";
      header("location:".$baseUrl."cvzone/login.php#toregister");
    }
    else {
      if (preg_match("/[^a-zA-Z0-9 _]+/",$_POST['username'])) {
        $_SESSION['error']="Invalid input";
        header("location:".$baseUrl."cvzone/login.php#toregister");
      }
      else {
        $data = $_POST;
        $email = $data['email'];
        $data['email'] = filter_var($email, FILTER_SANITIZE_EMAIL);
        $b->setData($data);

        $checkUsername = $b->checkUsername();
        if (!empty($checkUsername)) {
          $_SESSION['error']="Username taken";
          header("location:".$baseUrl."cvzone/login.php#toregister");
        }else {
          $checkEmail=$b->checkEmail();
          if (!empty($checkEmail)) {
            $_SESSION['error']="Email already exist";
            header("location:".$baseUrl."cvzone/login.php#toregister");
          }
          else {
            $userId=$b->createUser();
//            echo $userId;
//            die();
              $b->insertAbout($userId);
              $b->insertSetting($userId);
            if (!empty($userId)) {
              $insert=$b->index($userId);
              if (empty($insert)) {
                $_SESSION['success']="Registration Successfull<br/>Your account will active in 3 hours";
                header("location:".$baseUrl."cvzone/login.php#toregister");
              }
            }
          }
        }



      }

    }

  }
}


// $b->setData($_POST);


 ?>
