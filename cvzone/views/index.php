<?php include '../../views/php/_header.php'; ?>
<?php include 'php/_find-user.php'; ?>
<?php

if (isset($_GET['user'])) {
  $userViewId = $_GET['user'];
  include 'php/_find-user-activation.php';
}
else {
  header("location:http://localhost/AjkerJob/cvzone/");
}
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajker Job | <?php echo $userToFindName; ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- <link rel="shortcut icon" href="../assets/images/favicon.ico"> -->

    <!-- CSS | STYLE -->
    <link href="../assets/images/ajkerjob-icon.png" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/linecons.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/colors/brown.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style2.css" />

    <!-- CSS | Google Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,500,600' rel='stylesheet' type='text/css'>

    <noscript>
        <style>
        @media screen and (max-width: 755px) {
            .hs-content-scroller {
                overflow: visible;
            }
        }
        </style>
    </noscript>
</head>

<body>
    <!-- Page preloader -->
    <div id="page-loader">
        <canvas id="demo-canvas"></canvas>
    </div>
    <!-- container -->
    <div id="hs-container" class="hs-container">





      <!-- START : Setting -->
        <?php include 'layout/setting.php';?>
      <!-- END : Setting -->

        <!-- Go To Top Button -->
        <a href="#hs-menu" class="hs-totop-link"><i class="fa fa-chevron-up"></i></a>
        <!-- End Go To Top Button -->

        <!-- hs-content-scroller -->
        <div class="hs-content-scroller">
            <!-- Header -->
            <div id="header_container">
                <div id="header">
                    <div><a class="home"><i class="fa fa-home"></i></a>
                    </div>
                    <div><a href="" class="previous-page arrow"><i class="fa fa-angle-left"></i></a>
                    </div>
                    <div><a href="" class="next-page arrow"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- News scroll -->
                    <div class="news-scroll">
                        <span><i class="fa fa-line-chart"></i>RECENT ACTIVITY : </span>
                        <!-- <ul id="marquee" class="marquee">
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.</li>
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.
                            </li>
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.
                            </li>
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.
                            </li>
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.
                            </li>
                            <li>
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Fusce tincidunt adipiscing,massa.
                            </li>
                        </ul> -->
                    </div>
                    <!-- End News scroll -->
                </div>
            </div>
            <!-- End Header -->

            <!-- hs-content-wrapper -->
            <div class="hs-content-wrapper">

              <!-- About section -->
              <?php include 'layout/about.php';?>
              <!-- End About Section -->


              <!-- Resume section -->
              <?php include 'layout/resume.php';?>
              <!-- End Resume Section -->


              <!-- START : Experience -->
              <?php include 'layout/experience.php';?>
              <!-- END : Experience -->



                <!-- service Section -->
                <?php include 'layout/service.php';?>
                <!-- End service Section -->




                <!-- pricing Section -->
                <?php include 'layout/post.php';?>
                <!-- End pricing Section -->

                <!-- Skills Section -->
                <?php include 'layout/skills.php';?>
                <!-- End Skills Section -->

                <!-- Works Section -->
                <?php include 'layout/works.php';?>
                <!-- End Works Section -->

                <!-- Contact Section -->
                <?php include 'layout/contact.php';?>
                <!-- End Contact Section -->



                </div>
                <!-- End hs-content-wrapper -->
            </div>
            <!-- End hs-content-scroller -->
        </div>
        <!-- End container -->
        <div id="my-panel">
        </div>

    <?php include 'layout/footer.php';?>
