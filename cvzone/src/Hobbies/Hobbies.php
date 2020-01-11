<?php
namespace App\Hobbies;
use PDO;

class Hobbies
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


    public function show()
    {
      try{
          $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
          $query = "SELECT * FROM  hobbies WHERE user_id='$this->userId' and deleted_at='0000-00-00 00:00:00'";
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
