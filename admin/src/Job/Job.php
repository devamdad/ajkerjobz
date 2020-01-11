<?php
namespace App\Job;
use PDO;
include '../../db/dbconnection.php';

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





}



 ?>
