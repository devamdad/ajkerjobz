<?php
session_start();
include_once ("_header.php");

include_once ("../../vendor/autoload.php");
use App\Job\Job;

$b = new Job();


// echo "<pre>";
// print_r($_POST);
// die();

if (isset($_POST)) {
  if (empty($_POST['dhaka']) && empty($_POST['chittagong']) && empty($_POST['rajshahi']) && empty($_POST['khulna']) && empty($_POST['rangpur']) && empty($_POST['sylhet']) && empty($_POST['barisal']) ) {
    $_SESSION['errorMessage']='Select Job Location';
    header("location:".$baseUrl."admin_master/views/layout/post-job.php");
  }
  elseif (empty($_POST['title'])) {
    $_SESSION['errorMessage']='Job Title Empty';
    header("location:".$baseUrl."admin_master/views/layout/post-job.php");
  }
  elseif ($_POST['jobCategory']=='select') {
    $_SESSION['errorMessage']='Select Job Category';
    header("location:".$baseUrl."admin_master/views/layout/post-job.php");
  }
  elseif (empty($_POST['salaryNegotiable']) && empty($_POST['salary'])) {
    $_SESSION['errorMessage']='Input Salary';
    header("location:".$baseUrl."admin_master/views/layout/post-job.php");
  }
  elseif (empty($_POST['descr'])) {
    $_SESSION['errorMessage']='Job Details Empty';
    header("location:".$baseUrl."admin_master/views/layout/post-job.php");
  }else {
    $b->setData($_POST);
    $jobId = $b->create_job_id();
    $insert = $b->index($jobId+1);

    if (empty($insert)) {
      $_SESSION['jobSuccess']="Job Insert Successful";
      header("location:".$baseUrl."admin_master/views/layout/post-job.php");
    }
  }
}


?>
