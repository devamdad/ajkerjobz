<?php

namespace App\Contact;
use PDO;

class Contact
{
    private $userId='';
    private $name='';
    private $email='';
    private $phone='';
    private $message='';

    private $deleteAt='';


    public function setData($value='')
    {
        $this->userId=$_SESSION['userId'];
        if (array_key_exists("title",$value)) {
            $this->title=$value['title'];
        }
        if (array_key_exists("item",$value)) {
            $this->itemNumber=$value['item'];
        }
        if (array_key_exists("icon",$value)) {
            $this->icon=$value['icon'];
        }
        if (array_key_exists("postDate",$value)) {
            $this->createAt=$value['postDate'];
        }

        if (array_key_exists("updateTitle",$value)) {
            $this->updateTitle=$value['updateTitle'];
        }
        if (array_key_exists("updateItem",$value)) {
            $this->updateItemNumber=$value['updateItem'];
        }
        if (array_key_exists("updateIcon",$value)) {
            $this->updateIcon=$value['updateIcon'];
        }
        if (array_key_exists("updateDate",$value)) {
            $this->updateAt=$value['updateDate'];
        }


        return $this;

    }



    public function show($value='')
    {
      try{
          $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
          $query = "SELECT * FROM  contacts WHERE user_id='$value' and deleted_at='0000-00-00 00:00:00'";
          $stmt = $pdo->prepare($query);
          $stmt->execute();
          $data = $stmt->fetchAll();
          return $data;

      }catch (PDOException $e){
          echo 'Error: '. $e->getMessage();
      }
    }

    public function showInboxBody($value='')
    {
      try{
          $pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db','root','');
          $query = "SELECT * FROM  contacts WHERE id='$value' and deleted_at='0000-00-00 00:00:00'";
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
