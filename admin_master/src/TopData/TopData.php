<?php
namespace App\TopData;
use PDO;
include '../../db/dbconnection.php';

class TopData
{
  private $createAt='';
  private $updateAt='';
  private $deleteAt='';


  public function find_employer($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM employers WHERE user_name='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0]['user_id'];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }


  public function find_total_job($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT count(job_id) FROM  jobs WHERE employer_id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0][0];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function find_live_job($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT count(job_id) FROM  jobs WHERE employer_id='$value' AND deleted_at='0000-00-00 00:00:00'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data[0][0];

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function find_last_update($value='')
  {
    $month_array = array('01' =>'Jan' ,'02' =>'Feb','03' =>'Mar','04' =>'Apl','05' =>'May','06' =>'Jun','07' =>'Jul','08' =>'Aug','09' =>'Sep','10' =>'Oct','11' =>'Nov','12' =>'Dec', );
    try{
        $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
        $query = "SELECT * FROM  employers WHERE user_id='$value' AND deleted_at='0000-00-00 00:00:00'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $month = substr($data[0]['updated_at'],5,2);
        $date = substr($data[0]['updated_at'],8,2);
        $finalDate = $date.' '.$month_array[$month];
        return $finalDate;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }




}



 ?>
