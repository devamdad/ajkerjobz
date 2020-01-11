<?php
namespace App\Job;
use PDO;
if (file_exists("db/dbconnection.php")) {
  include_once 'db/dbconnection.php';
}else {
  include_once '../../db/dbconnection.php';
}


class Job
{
  private $deactivateJob='';
  private $activateJob='';


  private $createAt='';
  private $updateAt='';
  private $deleteAt='';


  public function setData($value='')
  {


    if (array_key_exists("deactivateJob",$value)) {
      $this->deactivateJob=$value['deactivateJob'];
    }
    if (array_key_exists("activateJob",$value)) {
      $this->activateJob=$value['activateJob'];
    }

    return $this;

  }

  public function find_job($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  jobs WHERE deleted_at='0000-00-00 00:00:00' ";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function find_employer($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  employers WHERE token='0' AND user_id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function find_category($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  job_categories WHERE  category_id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function activate_job($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "UPDATE  jobs SET job_status = :j, updated_at = :ua WHERE job_id='$this->activateJob'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'j' => 1,
          'ua' => $value
        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function deactivate_job($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "UPDATE  jobs SET job_status = :j, updated_at = :ua WHERE job_id='$this->deactivateJob'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'j' => 0,
          'ua' => $value
        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function find_spotlight_job($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  jobs WHERE deleted_at='0000-00-00 00:00:00' AND job_status='1' ORDER BY created_at DESC LIMIT 12 ";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function find_all_job($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  jobs WHERE deleted_at='0000-00-00 00:00:00' AND job_status='1' ORDER BY created_at DESC";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function find_category_job($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  jobs WHERE deleted_at='0000-00-00 00:00:00' AND job_status='1' AND job_category='$value' ORDER BY created_at DESC";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function find_job_details($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  jobs WHERE deleted_at='0000-00-00 00:00:00' AND job_id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
}



 ?>
