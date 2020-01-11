<?php
namespace App\Awards;
use PDO;


class Awards{

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
        $query = "SELECT * FROM  awards WHERE user_id='$this->userId'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }


}
