<?php
namespace App\About;
use PDO;


class About
{
  private $userId='';
  private $title='';
  private $phone='';
  private $bio='';
  private $createAt='';
  private $updateAt='';
  private $deleteAt='';


  public function setData($value='')
  {
    $this->userId=$_SESSION['userId'];
    if (array_key_exists("title",$value)) {
      $this->title=$value['title'];
    }
    if (array_key_exists("phone",$value)) {
      $this->phone=$value['phone'];
    }
    if (array_key_exists("descr",$value)) {
      $this->bio=$value['descr'];
    }
    if (array_key_exists("postDate",$value)) {
      $this->createAt=$value['postDate'];
    }


    return $this;

  }




  public function index()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "UPDATE  abouts SET title = :t, phone = :p, bio = :b, created_at = :ca WHERE user_id='$this->userId'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          't' => $this->title,
          'p' => $this->phone,
          'b' => $this->bio,
          'ca' => $this->createAt
        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function show($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM  abouts WHERE user_id='$value'";
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
