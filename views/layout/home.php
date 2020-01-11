
<?php include 'header.php';?>
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
                  <img src="assets/images/ajkerjob-logo.png" alt="" class="img-responsive center-block">
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
                        <li class="active m-l-sm"><a href="#banner">Home</a></li>
												<li class="m-l-sm"><a href="#about">Get Started</a></li>
                        <li class="m-l-sm"><a href="#jobs">Jobs</a></li>
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

    <!-- Banner -->
    <?php include 'banner-home.php';?>
    <!-- Banner -->

    <!-- Start: About -->
		<section >
      <div class="container-fluid about-bg">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
			        <?php include 'about-home.php';?>
          </div>
        </div>
      </div>
		</section>

    <!-- End: About -->

    <!-- Jobs -->
    <?php include 'jobs-list-home.php';?>
    <!-- Jobs -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->



		<!-- JavaScript files placed at the end of the document so the pages load faster
	    ================================================== -->
	    <!-- Jquery and Bootstap core js files -->
	    <script type="text/javascript" src="assets/plugins/jquery.min.js"></script>
	    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

	    <!-- Modernizr javascript -->
	    <script type="text/javascript" src="assets/plugins/modernizr.js"></script>
	    <!-- Isotope javascript -->

	    <!-- Backstretch javascript -->
	    <script type="text/javascript" src="assets/plugins/jquery.backstretch.min.js"></script>

	    <!-- Appear javascript -->
	    <script type="text/javascript" src="assets/plugins/jquery.appear.js"></script>

	    <!-- Initialization of Plugins -->
	    <script type="text/javascript" src="assets/js/template.js"></script>

	    <!-- Custom Scripts -->
	    <script type="text/javascript" src="assets/js/custom.js"></script>
	    <script src="assets/js/jquery-2.1.4.min.js"></script>

		<script src="assets/js/jquery-1.9.1.min.js"></script>
		<script src="assets/js/owl.carousel.js"></script>

		<style>
		    #owl-demo .item img{
		        display: block;
		        width: 100%;
		        height: auto;
						opacity: .80;

		    }
				#owl-demo .item {

						background: #dddddd;

		    }
        #owl-demo .item img {

            opacity: .50;
		    }
		    </style>


		    <script>
		    $(document).ready(function() {
		      $("#owl-demo").owlCarousel({

		      navigation : false,
		      slideSpeed : 300,
		      paginationSpeed : 400,
		      singleItem : true,
					autoPlay : true,
					stopOnHover : true

		      // "singleItem:true" is a shortcut for:
		      // items : 1,
		      // itemsDesktop : false,
		      // itemsDesktopSmall : false,
		      // itemsTablet: false,
		      // itemsMobile : false

		      });
		    });
		    </script>




  </body>
</html>
