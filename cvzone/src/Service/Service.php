<?php
namespace App\Service;
use PDO;


class Service
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
        $query = "SELECT * FROM  services WHERE user_id='$this->userId'";
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
