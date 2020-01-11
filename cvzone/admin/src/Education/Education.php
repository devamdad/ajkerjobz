<?php
namespace App\Education;
use PDO;


class Education
{
  private $id='';
  private $userId='';
  private $title='';
  private $institute='';
  private $result='';
  private $major='';
  private $course_duration='';
  private $education_board='';
  private $passing_year='';
  private $pdo='';
  private $deleteId = '';


  public function __construct(){
    // session_start();
    $this->pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db', "root", "");
  }

  public function setData($data='')
  {

    if (array_key_exists("id", $data)) {
      $this->id=$data['id'];
    }
    if (array_key_exists("user_id",$data)) {
      $this->userId=$data['user_id'];
    }
    if (array_key_exists("userId",$data)) {
      $this->userId=$data['userId'];
    }

    if (array_key_exists("title",$data)) {
      $this->title=$data['title'];
    }
    if (array_key_exists("institute",$data)) {
      $this->institute=$data['institute'];
    }
    if (array_key_exists("result",$data)) {
      $this->result=$data['result'];
    }
    if (array_key_exists("major",$data)) {
      $this->major=$data['major'];
    }
    if (array_key_exists("course_duration",$data)) {
      $this->course_duration=$data['course_duration'];
    }
    if (array_key_exists("education_board",$data)) {
      $this->education_board=$data['education_board'];
    }
    if (array_key_exists("passing_year",$data)) {
      $this->passing_year=$data['passing_year'];
    }
    if (array_key_exists("contentId",$data)) {
      $this->deleteId=$data['contentId'];
    }



    return $this;

  }

  // public function checkdate()
  // {
  //   echo $this->userId;
  // }


  public function addEducation()
  {

    try{

        $query = "INSERT INTO `educations` (`id`, `user_id`, `title`, `institute`, `result`, `passing_year`, `main_subject`, `education_board`, `course_duration`) VALUES (:id, :user_id, :title, :institute, :result, :passing_year, :main_subject, :education_board, :course_duration);";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(array(
          ':id' => NULL,
          ':user_id' => $this->userId,
          ':title' => $this->title,
          ':institute' => $this->institute,
          ':result' => $this->result,
          ':passing_year' => $this->passing_year,
          ':main_subject' => $this->major,
          ':education_board' => $this->education_board,
          ':course_duration' => $this->course_duration,

        ));
        $data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function educationUpdate()
  {
    try{

        $query = "UPDATE `educations` SET `id` = :id, `user_id` = :user_id, `title` = :title, `institute` = :institute, `result` = :result, `passing_year` = :passing_year, `main_subject` = :main_subject, `education_board` = :education_board, `course_duration` = :course_duration WHERE `educations`.`id` = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
              array(
                      ':id' => $this->id,
                      ':user_id' => $this->userId,
                      ':title' => $this->title,
                      ':institute' => $this->institute,
                      ':result' => $this->result,
                      ':passing_year' => $this->passing_year,
                      ':main_subject' => $this->major,
                      ':education_board' => $this->education_board,
                      ':course_duration' => $this->course_duration

                )
          );
          $data = $stmt->fetchAll();
          return $data;


    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }





  public function show_education($value=''){

    try {

          $query = "SELECT * FROM `educations` WHERE deleted_at ='0000-00-00 00:00:00' and user_id ='$value'";
          $stmt = $this->pdo->prepare($query);
          $stmt->execute();
          $data = $stmt->fetchAll();
          return $data;



        } catch(PDOException $e) {
          echo 'Error: ' . $e->getMessage();
        }

  }

  public function singleShow(){


    try {

          $query = "SELECT * FROM `educations` WHERE id=$this->id";
          $stmt = $this->pdo->prepare($query);
          $stmt->execute();
          $data = $stmt->fetch();

          if (empty($data)){
              $_SESSION['errorTitle'] = "Don't try it again else your IP will be block";
              unset($_SESSION['errorTitle']);
              header('location:location:http://localhost/AjkerJob/cvzone/admin/views/layout/add-education.php');
                  }else{
                    return $data;
                  }


        } catch(PDOException $e) {
          echo 'Error: ' . $e->getMessage();
        }

  }







  public function trash(){
          try{

              $query = "UPDATE `educations` SET `deleted_at` = :datetimes WHERE `educations`.`id` = :id;";
              $stmt = $this->pdo->prepare($query);
              $stmt->execute(
                  array(
                      ':id' => $this->deleteId,
                      ':datetimes' => date('Y-m-d h:m:s')
                  ));


                  $data = $stmt->fetchAll();
                  return $data;

          } catch(PDOException $e){
              echo 'Error: '  . $e->getMessage();
          }
      }



}



 ?>
