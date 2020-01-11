<?php
namespace App\Post;
use PDO;


class Post
{
  private $userId='';
  private $title='';
  private $category='';
  private $tag='';
  private $description='';
  // private $profileImg='';

  private $createAt='';
  private $updateAt='';
  private $deleteAt='';

  private $updateTitle ='';
  private $updateCategory='';
  private $updateTag ='';
  private $updateDescription='';



  public function setData($value='')
  {
    $this->userId=$_SESSION['userId'];
    if (array_key_exists("title",$value)) {
      $this->title=$value['title'];
    }
    if (array_key_exists("category",$value)) {
      $this->category=$value['category'];
    }
    if (array_key_exists("tag",$value)) {
      $this->tag=$value['tag'];
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
    if (array_key_exists("updateCategory",$value)) {
      $this->updateCategory=$value['updateCategory'];
    }
    if (array_key_exists("updateTag",$value)) {
      $this->updateTag=$value['updateTag'];
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
        $query = "INSERT INTO  posts (user_id, title, description, tags, categories, created_at) VALUES (:ui, :t, :des, :ta, :cat, :ca)";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          'ui' => $this->userId,
          't' => $this->title,
          'des' => $this->description,
          'ta' => $this->tag,
          'cat' => $this->category,
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
        $query = "SELECT * FROM  posts WHERE user_id='$value' and deleted_at ='0000-00-00 00:00:00'";
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
        $query = "SELECT * FROM  posts WHERE id='$value'";
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
        $query = "UPDATE  posts SET title = :t, description = :des, tags = :tg, categories = :ca, updated_at = :ua WHERE id='$value'";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(
          't' => $this->updateTitle,
          'des' => $this->updateDescription,
          'tg' => $this->updateTag,
          'ca' => $this->updateCategory,
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
