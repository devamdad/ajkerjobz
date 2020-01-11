<?php
namespace App\Awards;
use PDO;


class Awards{

	private $id = '';
	private $user_id = '';
	private $title = '';
	private $organization = '';
	private $location = '';
	private $year = '';
	private $description = '';
	private $pdo = '';
	private $contentId ='';


	public function __construct(){
    	$this->pdo = new PDO('mysql:host=localhost;dbname=ajkerjob_db', "root", "");
	}


	public function setData($data=""){

		if (array_key_exists('id', $data)) {
			$this->id = $data['id'];
		}
		if (array_key_exists('user_id', $data)) {
			$this->user_id = $data['user_id'];
		}
		if (array_key_exists('title', $data)) {
			$this->title = $data['title'];
		}
		if (array_key_exists('organization', $data)) {
			$this->organization = $data['organization'];
		}
		if (array_key_exists('location', $data)) {
			$this->location = $data['location'];
		}
		if (array_key_exists('year', $data)) {
			$this->year = $data['year'];
		}
		if (array_key_exists('contentId', $data)) {
			$this->deleteId = $data['contentId'];
		}
		if (array_key_exists('description', $data)) {
			$this->description = $data['description'];
		}

		return $this;



	}

	public function addAwards()
  {

    try{

        $query = "INSERT INTO `awards` (`id`, `user_id`, `title`, `organization`, `description`, `location`, `year`) VALUES (:id, :user_id, :title, :organization, :description, :location, :year);";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(array(
          ':id' => NULL,
          ':user_id' => $this->user_id,
          ':title' => $this->title,
          ':organization' => $this->organization,
          ':description' => $this->description,
          ':location' => $this->location,
          ':year' => $this->year

        ));
				$data = $stmt->fetchAll();
        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

  public function show_awards($value=''){

    try {

          $query = "SELECT * FROM `awards` WHERE deleted_at ='0000-00-00 00:00:00' and user_id='$value'";
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

          $query = "SELECT * FROM `awards` WHERE id='$this->id'";
          $stmt = $this->pdo->prepare($query);
          $stmt->execute();
					$data = $stmt->fetchAll();
	        return $data[0];



        } catch(PDOException $e) {
          echo 'Error: ' . $e->getMessage();
        }

  }


  public function AwardUpdate()
  {
    try{

        $query = "UPDATE `awards` SET `id` = :id, `user_id` = :user_id, `title` = :title, `organization` = :organization, `description` = :description, `location` = :location, `year` = :year WHERE `awards`.`id` = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute(
              array(
                      ':id' => $this->id,
                      ':user_id' => $this->user_id,
                      ':title' => $this->title,
                      ':organization' => $this->organization,
                      ':description' => $this->description,
                      ':location' => $this->location,
                      ':year' => $this->year

                )
          );
					$data = $stmt->fetchAll();
	        return $data;

    }catch (PDOException $e){
        echo 'Error: '. $e->getMessage();
    }
  }

	public function trash(){
          try{

              $query = "UPDATE `awards` SET `deleted_at` = :datetimes WHERE `awards`.`id` = :id;";
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
