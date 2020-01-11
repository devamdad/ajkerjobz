<?php

namespace App\Facts;
use PDO;

class Facts
{
    private $userId='';



    public function setData($value='')
    {

      if ($value) {
        $this->userId=$value;
      }


        return $this;

    }

    // public function checkdate()
    // {
    //   echo $this->userId;
    // }




    public function show($value='')
    {
      try{
          $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
          $query = "SELECT * FROM  facts WHERE user_id='$this->userId' and deleted_at='0000-00-00 00:00:00'";
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
