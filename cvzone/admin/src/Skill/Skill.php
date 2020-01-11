<?php
namespace App\Skill;
use PDO;


class Skill
{
  private $userId='';
  private $title='';
  private $level='';
  private $experience='';
  private $experienceArea='';
  private $description='';
  // private $profileImg='';

  private $createAt='';
  private $updateAt='';
  private $deleteAt='';

  private $updateTitle ='';
  private $updateLevel='';
  private $updateExperience ='';
  private $updateExperienceArea='';
  private $updateDescription='';



  public function setData($value='')
  {
    $this->userId=$_SESSION['userId'];
    if (array_key_exists("title",$value)) {
      $this->title=$value['title'];
    }
    if (array_key_exists("level",$value)) {
      $this->level=$value['level'];
    }
    if (array_key_exists("experience",$value)) {
      $this->experience=$value['experience'];
    }
    if (array_key_exists("tag",$value)) {
      $this->experienceArea=$value['tag'];
    }
    if (array_key_exists("descr",$value)) {
      $this->description=$value['descr'];
    }
    if (array_key_exists("postDate",$value)) {
      $this->createAt=$value['postDate'];
    }

    if (array_key_exists("updateTitle",$value)) {
      $this->updateTitle=$value['updateTitle'];
    }
    if (array_key_exists("UpdateLevel",$value)) {
      $this->updateLevel=$value['UpdateLevel'];
    }
    if (array_key_exists("UpdateExperience",$value)) {
      $this->updateExperience=$value['UpdateExperience'];
    }
    if (array_key_exists("updateTag",$value)) {
      $this->updateExperienceArea=$value['updateTag'];
    }
    if (array_key_exists("updateDescr",$value)) {
      $this->updateDescription=$value['updateDescr'];
    }
    if (array_key_exists("updateDate",$value)) {
      $this->updateAt=$value['updateDate'];
    }

    // echo $this->profileImg_type;

    return $this;

  }




  public function index()
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "INSERT INTO  skills (user_id, title, description, level, experience, experience_area, created_at) VALUES (:ui, :t, :des, :l, :e, :ea, :ca)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'ui' => $this->userId,
          't' => $this->title,
          'des' => $this->description,
          'l' => $this->level,
          'e' => $this->experience,
          'ea' => $this->experienceArea,
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
        $query = "SELECT * FROM  skills WHERE user_id='$value' and deleted_at ='0000-00-00 00:00:00'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function showUpdate($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "SELECT * FROM  skills WHERE id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function update($value='')
  {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
        $query = "UPDATE  skills SET title = :t, description = :des, level = :l, experience = :e, experience_area = :ea, updated_at = :ua WHERE id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          't' => $this->updateTitle,
          'des' => $this->updateDescription,
          'l' => $this->updateLevel,
          'e' => $this->updateExperience,
          'ea' => $this->updateExperienceArea,
          'ua' => $this->updateAt

        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }



}



 ?>
