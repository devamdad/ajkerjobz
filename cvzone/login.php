<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Ajker Job | User Registration</title>
        <link href="assets/images/ajkerjob-icon.png" rel="icon" type="image/x-icon" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/login-style.css" />
		<link rel="stylesheet" type="text/css" href="assets/css/animate-custom.css" />
    </head>
    <body>
        <div class="container">

            <header>
                <h1>Login and Registration For User</h1>
                <h1 style="color:red;"><?php

                if (isset($_SESSION['error'])) {
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);
                }

                 ?></h1>
                 <h1 style="color:green;"><?php

                 if (isset($_SESSION['success'])) {
                   echo $_SESSION['success'];
                   unset($_SESSION['success']);
                 }

                  ?></h1>

            </header>
            <section>
                <div id="container_demo" >

                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="views/php/_login.php"  method="post" >
                                <h1>Log in</h1>
                                <p>
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="loginUsername" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p>
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="LoginPassword" required="required" type="password" placeholder="eg. X8df!90O" />
                                </p>
                                <p class="keeplogin">
                									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                									<label for="loginkeeping">Keep me logged in</label>
                								</p>
                                <p class="login button">
                                    <input type="submit" value="Login" />
								                </p>

                                <p class="change_link">
                									Not a member yet ?
                									<a href="#toregister" class="to_register">Join us</a>
                								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="views/php/_store.php"  method="post">
                                <h1> Sign up </h1>
                                <p>
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username <span style="color:red;">*</span></label>
                                    <input id="username1" name="username" required="required" type="text" placeholder="mysuperusername690"  onchange="usernameValid()"/>
                                    <span style="color:red;" id="errorUsername"></span>
                                </p>
                                <p>
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email <span style="color:red;">*</span></label>
                                    <input id="email" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/>
                                </p>
                                <p>
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password <span style="color:red;">*</span></label>
                                    <input id="password1" name="password" required="required" type="password" placeholder="eg. X8df!90O" onchange="validation()"/>
                                    <span style="color:red;" id="errorPassLn"></span>
                                </p>

                                  <input type="hidden" name="postDate"  value="<?php echo date("Y-m-d")." ".date("h:i:sa");?>">

                                <p>
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password <span style="color:red;">*</span></label>
                                    <input id="password_confirm" name="password_con" required="required" type="password" placeholder="eg. X8df!90O" oninput="passConfirm()"/>
                                    <span style="color:red;" id="errorPassCnf"></span>
                                </p>
                                <p class="signin button">
                									<input type="submit" value="Sign up"/>
                								</p>
                                <!-- <p class="change_link">
                									Already a member ?
                									<a href="#tologin" class="to_register"> Go and log in </a>
                								</p> -->
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </body>
    <script src="assets/js/validation.js" charset="utf-8"></script>
</html>
