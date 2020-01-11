
<?php session_start(); ?>
<?php
// include 'php/_functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel | </title>
    <link href="assets/images/ajkerjob-icon.png" rel="icon" type="image/x-icon" />

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Custom Admin Style -->
    <link href="assets/css/Adminstyle.css" rel="stylesheet">


  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">



            <form method="post" action="views/php/_login.php">
              <h3>Login</h3>

                <h2>
                  <?php
                  if (isset($_SESSION['error'])) {
                    echo $_SESSION["error"];
                    unset($_SESSION['error']);
                  }
                  ?>
                </h2>
                <div>
                  <input type="text" class="form-control" placeholder="Username" required="" name="loginUsername"/>
                </div>
                <div>
                  <input type="password" class="form-control" placeholder="Password" required="" name="LoginPassword" />
                </div>
                <div>
                  <input type="submit" value="Log in" class="btn btn-success submit">
                  <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
                </div>

              <div class="clearfix"></div>

              <div class="separator">


                <div class="clearfix"></div>
                <br />

                <div>
                  <h1></i> Ajker Job</h1>
                  <p>©2017 All Rights Reserved. me. Developed By <a href="">Ajker Job</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
