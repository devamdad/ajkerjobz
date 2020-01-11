<?php
namespace App\TopNavigation;
use PDO;
include '../../db/dbconnection-top.php';

class TopNavigation
{
  private $createAt='';
  private $updateAt='';
  private $deleteAt='';



  public function find_employer($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name_top,db_username_top,db_password_top);
        $query = "SELECT * FROM employers WHERE user_name='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0]['user_id'];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function find_company_details($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name_top,db_username_top,db_password_top);
        $query = "SELECT * FROM  employers WHERE user_id='$value' AND deleted_at='0000-00-00 00:00:00'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }






}



 ?>
