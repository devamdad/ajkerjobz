<?php
namespace App\Employer;
use PDO;
include '../../db/dbconnection.php';

class Employer
{
  private $employerId='';
  private $profileDetails='';

  private $updateAt='';


public function setData($value=''){
  if (array_key_exists("emlpoyers",$value)) {
    $this->employerId=$value['emlpoyers'];
  }
  if (array_key_exists("descr",$value)) {
    $this->profileDetails=$value['descr'];
  }

  if (array_key_exists("updateDate",$value)) {
    $this->updateAt=$value['updateDate'];
  }

  return $this;
}

public function update_without_image()
{
  try{
      $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
      $query = "UPDATE  employers SET details = :d,updated_at = :ua WHERE user_id='$this->employerId'";
      $stmt = $pdo->prepare($query);
      $stmt->execute(array(
        'd' => $this->profileDetails,
        'ua' => $this->updateAt

      ));
      $data = $stmt->fetchAll();
      return $data;

  }catch (PDOException $e){
      echo 'Error: '. $e->getMessage();
  }
}

public function update_with_image($values='')
{
  try{
      $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
      $query = "UPDATE  employers SET image = :i,details = :d,updated_at = :ua WHERE user_id='$this->employerId'";
      $stmt = $pdo->prepare($query);
      $stmt->execute(array(
        'i' => $values,
        'd' => $this->profileDetails,
        'ua' => $this->updateAt

      ));
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
      $pdo = new PDO('mysql:host=localhost;dbname='.db_name,db_username,db_password);
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
