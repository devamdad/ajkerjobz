<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ajker Job | Employers</title>
    <link href="assets/images/ajkerjob-icon.png" rel="icon" type="image/x-icon" />



    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/css/custom.css" rel="stylesheet">
    <link href="assets/css/Adminstyle.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

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
                  <input type="password" class="form-control" placeholder="Password" required="" name="loginPassword" />
                </div>
                <div>

                  <input type="submit" value="Log in" class="btn btn-success submit">
                  <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
                </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1></i> Ajker Job</h1>
                  <p>©2016 All Rights Reserved. me. Developed By <a href="">ajkerjob</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="views/php/_create-admin.php" autocomplete="off">
              <h1>Create Account</h1>
              <h2>
                <?php
                if (isset($_SESSION['signupError'])) {
                  echo $_SESSION["signupError"];
                  unset($_SESSION['signupError']);
                }
                ?>
              </h2>
              <h2 style="color:#169F85;">
                <?php
                if (isset($_SESSION['regSuccess'])) {
                  echo $_SESSION["regSuccess"];
                  unset($_SESSION['regSuccess']);
                }
                ?>
              </h2>
              <div>
                <span style="color:red;float:left;" id="errorUsername" class="">User name not available</span>
                <input type="text" id="userNameCheck" class="form-control" placeholder="Username" required="" name="userName"/>
              </div>

              <div>
                <span style="color:red;float:left;" id="errorEmail">Already registerd</span>
                <input type="email" id="emailCheck" class="form-control" placeholder="Email" required="" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
              </div>
              <div>
                <input type="submit" value="Submit" class="btn btn-success submit" id="btnCreateAdmin">
                <!-- <a class="btn btn-default submit" href="">Submit</a> -->
              </div>
              <div class="">
                <input type="hidden"  required class="form-control col-md-7 col-xs-12" name="createAt" value='<?php echo date("Y-m-d")." ".date("h:i:s");?>'>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> Ajker Job</h1>
                  <p>©2017 All Rights Reserved. me. Developed By <a href="">ajkerjob</a></p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
  <!-- jQuery -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function() {

    $("#userNameCheck").keyup(function() {
      // alert("lol");
      var userName = $("#userNameCheck").val();
      if (userName) {
        var dataToSend = { content: userName };
        $.post("views/php/_check-username.php", dataToSend, function(data, status){

            if(status === 'success')
            {
              //  alert(data);
              if (data) {
                 $("#errorUsername").css("display","block")
                 $("#btnCreateAdmin").css({"display": "none"})
              }
              else {
                $("#errorUsername").css("display","none")
                $("#btnCreateAdmin").css({"display":"initial","margin-left": "auto"})
              }


            }

          });

      }
    });

  });

  </script>
  <script type="text/javascript">
  $(document).ready(function() {

    $("#emailCheck").keyup(function() {
      // alert("lol");
      var userName = $("#emailCheck").val();
      if (userName) {
        var dataToSend = { content: userName };
        $.post("views/php/_check-email.php", dataToSend, function(data, status){

            if(status === 'success')
            {
              //  alert(data);
              if (data) {
                $("#errorEmail").css("display","block")
                $("#btnCreateAdmin").css({"display": "none"})
              }
              else {
                $("#errorEmail").css("display","none")
                $("#btnCreateAdmin").css({"display":"initial","margin-left": "auto"})
              }


            }

          });

      }
    });

  });

  </script>

</html>
