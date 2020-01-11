<?php
namespace App\Settings;
use PDO;


class Settings
{
  private $userId='';



  public function setData($value='')
  {
    if ($value) {
      $this->userId=$value;
    }

    // echo $this->profileImg_type;

    return $this;

  }



  public function show()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM  settings WHERE user_id='$this->userId'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function find_user_activation($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM  users WHERE unique_id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        if (array_key_exists("0",$data)) {
          return $data[0];
        }


    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

}



 ?>
