<?php
namespace App\Category;
use PDO;
include 'db/dbconnection.php';

class Category
{
  private $createAt='';
  private $updateAt='';
  private $deleteAt='';




  public function index()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "UPDATE  users SET status = :s, updated_at = :ua WHERE user_id='$this->userId'";
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

public function show($categoryPerList='',$offset='')
{
  try{
      $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
      $query = "SELECT *  FROM job_categories LIMIT $categoryPerList OFFSET $offset";
      $stmt = $pdo->prepare($query);
      $stmt->execute();
      $data = $stmt->fetchAll();
      return $data;

  }catch (PDOException $e){
      echo 'Error: '. $e->getMessage();
  }
}

public function job_count($value='')
{
  try{
      $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
      $query = "SELECT count(user_id) FROM  users WHERE deleted_at='0000-00-00 00:00:00' and token ='1'";
      $stmt = $pdo->prepare($query);
      $stmt->execute();
      $data = $stmt->fetchAll();
      return $data[0][0];

  }catch (PDOException $e){
      echo 'Error: '. $e->getMessage();
  }
}




  public function request_pending($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT count(user_id) FROM  users WHERE deleted_at='0000-00-00 00:00:00' and token ='1'";
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
