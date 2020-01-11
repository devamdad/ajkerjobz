<?php

namespace App\Contact;
use PDO;

class Contact
{
    private $userId='';
    private $name='';
    private $email='';
    // private $phone='';
    private $message='';

    private $createAt='';


    public function setData($value='')
    {
        if (array_key_exists("contactSendToUser",$value)) {
            $this->userId=$value['contactSendToUser'];
        }
        if (array_key_exists("name",$value)) {
            $this->name=$value['name'];
        }
        if (array_key_exists("email",$value)) {
            $this->email=$value['email'];
        }
        if (array_key_exists("message",$value)) {
            $this->message=$value['message'];
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
            $query = "INSERT INTO  contacts (user_id, name, email, message, created_at) VALUES (:ui, :n, :e, :m, :ca)";
            $stmt = $pdo->prepare($query);
            $stmt->execute(array(
                'ui' => $this->userId,
                'n' => $this->name,
                'e' => $this->email,
                'm' => $this->message,
                'ca' => $this->createAt

            ));
            $data = $stmt->fetchAll();
            return $data;

        }catch (PDOException $e){
            echo 'Error: '. $e->getMessage();
        }
    }







}



?>
