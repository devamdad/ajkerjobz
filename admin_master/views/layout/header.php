
<?php session_start();

if (empty($_SESSION['username'])) {
  header("location:../../../admin");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel | Employers</title>
    <link href="../../assets/images/ajkerjob-icon.png" rel="icon" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../assets/css/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../assets/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">


    <?php  if($page_slug == "home") {?>
      <!-- jVectorMap -->
      <link href="../../assets/css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>
    <?php }?>



    <!-- Custom Theme Style -->
    <link href="../../assets/css/custom.min.css" rel="stylesheet">

    <!-- Custom Admin Style -->
    <link href="../../assets/css/Adminstyle.css" rel="stylesheet">

    <?php $websiteName = "Ajker Job"; ?>
