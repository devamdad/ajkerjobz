<?php
namespace App\About;
use PDO;


class About
{
  private $userId='';


  public function setData($value='')
  {
    if ($value) {
      $this->userId=$value;
    }

    return $this;

  }


  public function show()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM  abouts WHERE user_id='$this->userId'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function showEmail()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM  users WHERE unique_id='$this->userId'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function showHobbies()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM  hobbies WHERE user_id='$this->userId'";
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
