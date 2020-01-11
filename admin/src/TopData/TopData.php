<?php
namespace App\TopData;
use PDO;
include '../../db/dbconnection.php';

class TopData
{
  private $createAt='';
  private $updateAt='';
  private $deleteAt='';

  public function find_total_employers($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT count(user_id) FROM  employers WHERE token='0'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0][0];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function find_total_cvzone($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT count(unique_id) FROM  users WHERE is_active='1'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0][0];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function find_total_jobpost($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT count(job_id) FROM  jobs WHERE job_status='1'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0][0];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function find_deactive_employers($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT count(user_id) FROM  employers WHERE token='1'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0][0];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function find_deactive_cvzone($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT count(unique_id) FROM  users WHERE is_active='0'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0][0];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }
  public function find_hide_jobpost($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT count(job_id) FROM  jobs WHERE job_status='0'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0][0];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }





}



 ?>
