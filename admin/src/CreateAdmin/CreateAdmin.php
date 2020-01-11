<?php
namespace App\CreateAdmin;
use PDO;
include '../../db/dbconnection.php';

class CreateAdmin
{
  private $userId='';
  private $userName='';
  private $email='';
  private $pass='';
  private $conPass='';
  private $adminStatus ='';
  private $token = '1';

  private $createAt='';
  private $updateAt='';
  private $deleteAt='';


  public function setData($value='')
  {
    if (array_key_exists("userName",$value)) {
      $this->userName=$value['userName'];
    }
    if (array_key_exists("email",$value)) {
      $this->email=$value['email'];
    }
    if (array_key_exists("password",$value)) {
      $this->pass=$value['password'];
    }
    if (array_key_exists("confirmPassword",$value)) {
      $this->conPass=$value['confirmPassword'];
    }
    if (array_key_exists("adminStatus",$value)) {
      $this->adminStatus=$value['adminStatus'];
    }
    if (array_key_exists("createAt",$value)) {
      $this->createAt=$value['createAt'];
    }


    return $this;

  }

  public function create_userId($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT MAX(id) from admins";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0][0];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function create_hash($value='')
  {
    $hash_type = "$2y$10$";
    $salt_length = 22;

    $random_string=md5(uniqid(mt_rand(), true));
    $base64_string = base64_encode($random_string);
    $modified_base64_string = str_replace('+','.',$base64_string);
    $salt = substr($modified_base64_string,0,$salt_length);

    $hash = $hash_type.$salt;

    return $hash;

  }

  public function password_encrypt($pass='',$hash='')
  {

    $finalPass = crypt($pass,$hash);
    return $finalPass;

  }


  public function index($user_serial,$pass,$hash)
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "INSERT INTO admins (user_id,user_name,email,user_pass,user_hash,status,token,created_at) Values(:ui,:un,:e,:p,:h,:s,:t,:ca)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'ui' => "user".$user_serial,
          'un' => $this->userName,
          'e' => $this->email,
          'p' => $pass,
          'h' => $hash,
          's' => $this->adminStatus,
          't' => $this->token,
          'ca' => $this->createAt
        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }



}



 ?>
