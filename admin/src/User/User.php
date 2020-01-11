<?php
namespace App\User;
use PDO;
include '../../db/dbconnection.php';

class User
{
  private $deactivateAdminId='';
  private $activateAdminId='';


  private $createAt='';
  private $updateAt='';
  private $deleteAt='';


  public function setData($value='')
  {


    if (array_key_exists("deactivateUserId",$value)) {
      $this->deactivateUserId=$value['deactivateUserId'];
    }
    if (array_key_exists("activateUserId",$value)) {
      $this->activateUserId=$value['activateUserId'];
    }

    return $this;

  }




  public function index()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "UPDATE  admins SET status = :s, updated_at = :ua WHERE user_id='$this->userId'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          's' => $this->adminStatus,
          'ua' => $this->updateAt

        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function find_users($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  users ";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function activate_user($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "UPDATE  users SET is_active = :i, updated_at = :ua WHERE unique_id='$this->activateUserId'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'i' => 1,
          'ua' => $value
        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function deactivate_user($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "UPDATE  users SET is_active = :i, updated_at = :ua WHERE unique_id='$this->deactivateUserId'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'i' => 0,
          'ua' => $value
        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }





}



 ?>
