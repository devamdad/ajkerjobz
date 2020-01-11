<?php
namespace App\Login;
use PDO;


class Login
{
  private $username='';
  // private $userId='';
  private $email='';
  private $password='';
  private $token='qwerty';
  private $userRole='2';
  private $isActive='0';

  private $loginUsername='';
  private $loginPassword='';
  private $createAt = '';

  public function setData($value='')
  {
    if (array_key_exists("username",$value)) {
      $this->username=$value['username'];
    }
    if (array_key_exists("password",$value)) {
      $this->password=$value['password'];
    }
    if (array_key_exists("email",$value)) {
      $this->email=$value['email'];
    }
    if (array_key_exists("loginUsername",$value)) {
      $this->loginUsername=$value['loginUsername'];
    }
    if (array_key_exists("LoginPassword",$value)) {
      $this->loginPassword=$value['LoginPassword'];
    }
    if (array_key_exists("postDate",$value)) {
      $this->createAt=$value['postDate'];
    }

    return $this;

  }

  public function createUser()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT MAX(id) FROM users";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $temp = $data[0][0];
        $temp = $temp+1;
        return "user".$temp;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }

  }

  public function checkUsername()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM users WHERE username='$this->username'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function checkEmail()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM users WHERE email='$this->email'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function index($userId)
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "INSERT INTO  users (unique_id,username,email,password,token,is_active,user_role,created_at) VALUES (:ui,:un,:e,:p,:t,:i,:ur,:ca)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'ui' => $userId,
          'un' => $this->username,
          'e' => $this->email,
          'p' => $this->password,
          't' => $this->token,
          'i' => $this->isActive,
          'ur'=> $this->userRole,
          'ca'=> $this->createAt
        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function findUser()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM users WHERE username='$this->loginUsername' or email='$this->loginUsername'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function insertAbout($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "INSERT INTO  abouts (user_id) VALUES (:ui)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'ui' => $value
        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function insertSetting($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "INSERT INTO  settings (user_id,featured_img,created_at) VALUES (:ui, :fi, :ca)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'ui' => $value,
          'fi' => "user.png",
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
