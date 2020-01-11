<?php
namespace App\Company;
use PDO;
include '../../db/dbconnection.php';

class Company
{
  private $deactivateAdminId='';
  private $activateAdminId='';


  private $createAt='';
  private $updateAt='';
  private $deleteAt='';


  public function setData($value='')
  {


    if (array_key_exists("deactivateAdminId",$value)) {
      $this->deactivateAdminId=$value['deactivateAdminId'];
    }
    if (array_key_exists("activateAdminId",$value)) {
      $this->activateAdminId=$value['activateAdminId'];
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

  public function find_company($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  employers ";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function activate_admin($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "UPDATE  employers SET token = :t, updated_at = :ua WHERE user_id='$this->activateAdminId'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          't' => 0,
          'ua' => $value
        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function deactivate_admin($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "UPDATE  employers SET token = :t, updated_at = :ua WHERE user_id='$this->deactivateAdminId'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          't' => 1,
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
