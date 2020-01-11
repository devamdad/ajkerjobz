<?php
namespace App\Login;
use PDO;
include '../../db/dbconnection.php';

class Login
{
  private $username='';
  // private $userId='';
  private $email='';
  private $password='';
  private $token='qwerty';
  private $userRole='2';
  private $isActive='1';

  private $loginUsername='';
  private $loginPassword='';


  public function setData($value='')
  {

    if (array_key_exists("loginUsername",$value)) {
      $this->loginUsername=$value['loginUsername'];
    }
    if (array_key_exists("loginPassword",$value)) {
      $this->loginPassword=$value['loginPassword'];
    }


    return $this;

  }


  public function findUser()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM employers WHERE user_name='$this->loginUsername' or email='$this->loginUsername'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function generate_pass($hash)
  {
    $finalPass = crypt($this->loginPassword,$hash);
    return $finalPass;
  }

  public function check_username($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  employers WHERE user_name='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();

        if (array_key_exists(0,$data)) {
          echo $data[0]['user_id'];
        }



    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function check_email($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  employers WHERE email='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();

        if (array_key_exists(0,$data)) {
          echo $data[0]['user_id'];
        }



    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

}



 ?>
