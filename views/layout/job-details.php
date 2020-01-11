<?php session_start(); ?>
<?php include '../php/_header.php'; ?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>AjkerJob</title>
		<meta name="description" content="">
		<meta name="author" content="ajkerjob.com">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
		<link href="<?php echo $baseUrl."assets/images/ajkerjob-icon.png"?>" rel="icon" type="image/x-icon" />

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

		<!-- Bootstrap core CSS -->
		<link href="<?php echo $baseUrl.'assets/bootstrap/css/bootstrap.css'?>" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="<?php echo $baseUrl.'assets/fonts/font-awesome/css/font-awesome.css'?>" rel="stylesheet">

		<!-- Plugins -->
		<link href="<?php echo $baseUrl.'assets/css/animations.css'?>" rel="stylesheet">

		<link href="<?php echo $baseUrl.'assets/css/owl.carousel.css'?>" rel="stylesheet">
    <link href="<?php echo $baseUrl.'assets/css/owl.theme.css'?>" rel="stylesheet">


		<!-- Worthy core CSS file -->
		<link href="<?php echo $baseUrl.'assets/css/style.css'?>" rel="stylesheet">

		<!-- Custom css -->
		<link href="<?php echo $baseUrl.'assets/css/custom.css'?>" rel="stylesheet">
	</head>

  <body class="no-trans">
    <!-- scrollToTop -->
    <div class="scrollToTop" style="color:red;"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
    <header class="header fixed clearfix navbar navbar-fixed-top">
      <div class="container">
        <div class="row">

				<!-- header-left start -->
          <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
            <div class="header-left clearfix">
              <!-- logo -->
              <div class="logo smooth-scroll"></div>
              <!-- name-and-slogan -->
              <div class="site-name-and-slogan smooth-scroll">
                <div class="site-name">
                  <img src="<?php echo $baseUrl.'assets/images/ajkerjob-logo.png'?>" alt="" class="img-responsive center-block">
                  <!-- <a href="">BD GLOBAL CONSULTANCY</a> -->
                </div>
              </div>
            </div>
          </div>
				<!-- header-left end -->

				<!-- header-right start -->
					<div class="col-md-9 p-t-xl mobile-menu col-xs-12">
            <div class="header-right clearfix">
              <!-- main-navigation start -->
              <div class="main-navigation animated">

								<!-- navbar start -->
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <!-- Toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle mobile-menu-btn" data-toggle="collapse" data-target="#navbar-collapse-1" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">

												<li class="m-l-sm"><a href="<?php echo $baseUrl?>">Home</a></li>
												<li class="m-l-sm"><a href="#jobList">Job Details</a></li>
                        <li class="m-l-sm"><a href="#footerContact">Contact Us</a></li>
                      </ul>
                    </div>

                  </div>
                </nav>
                <!-- navbar end -->
              </div>
              <!-- main-navigation end -->
            </div>
            <!-- header-right end -->
          </div>

        </div>
      </div>
    </header>
    <!-- header end -->


		<?php include '../php/_job-details.php';?>



    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->



		<!-- JavaScript files placed at the end of the document so the pages load faster
	    ================================================== -->
	    <!-- Jquery and Bootstap core js files -->
	    <script type="text/javascript" src="<?php echo $baseUrl.'assets/plugins/jquery.min.js'?>"></script>
	    <script type="text/javascript" src="<?php  echo $baseUrl.'assets/bootstrap/js/bootstrap.min.js'?>"></script>

	    <!-- Modernizr javascript -->
	    <script type="text/javascript" src="<?php echo $baseUrl.'assets/plugins/modernizr.js'?>"></script>
	    <!-- Isotope javascript -->

	    <!-- Backstretch javascript -->
	    <script type="text/javascript" src="<?php echo $baseUrl.'assets/plugins/jquery.backstretch.min.js'?>"></script>

	    <!-- Appear javascript -->
	    <script type="text/javascript" src="<?php echo $baseUrl.'assets/plugins/jquery.appear.js'?>"></script>

	    <!-- Initialization of Plugins -->
	    <script type="text/javascript" src="<?php echo $baseUrl.'assets/js/template.js'?>"></script>

	    <!-- Custom Scripts -->
	    <script type="text/javascript" src="<?php echo $baseUrl.'assets/js/custom.js'?>"></script>
	    <script src="<?php echo $baseUrl.'assets/js/jquery-2.1.4.min.js'?>"></script>

		<script src="<?php echo $baseUrl.'assets/js/jquery-1.9.1.min.js'?>"></script>
		<script src="<?php echo $baseUrl.'assets/js/owl.carousel.js'?>"></script>




  </body>
</html>
