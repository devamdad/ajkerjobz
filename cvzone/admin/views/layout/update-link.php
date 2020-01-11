
<?php $pg="update-link"; ?>
<!-- Header menue -->
<?php include 'header.php'; ?>
<!-- Header menue -->

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo $baseUrl.'admin/views/layout/home.php'?>" class="site_title"><i class="fa fa-tachometer"></i> <span><?php echo $websiteName;?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="../assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $_SESSION["username"];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- Sidebar menue -->
            <?php include 'sidebar.php'; ?>
            <!-- Sidebar menue -->


          </div>
        </div>

        <!-- top navigation -->
        <?php include 'top-navigation.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Update Social Media Link</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Social Media Link</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <?php include '../php/_update-link.php'; ?>

                  <div class="x_content">
                    <h3 style="text-align:center;"><?php echo $update_link_success; ?></h3>
                    <form   class="form-horizontal form-label-left" method="post" action="">

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="facebook" value="<?php echo $facebook ?>">
                          <span class="form-control-feedback fa fa-facebook"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="twitter" value="<?php echo $twitter ?>">
                          <span class="form-control-feedback fa fa-twitter"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Linkedin
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="linkedin" value="<?php echo $linkedin ?>">
                          <span class="form-control-feedback fa fa-linkedin"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Plus
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="googlePlus" value="<?php echo $googlePlus ?>">
                          <span class="form-control-feedback fa fa-google-plus"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Pinterest
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="pinterest" value="<?php echo $pinterest ?>">
                          <span class="form-control-feedback fa fa-pinterest"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Youtube
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="youtube" value="<?php echo $youtube ?>">
                          <span class="form-control-feedback fa fa-youtube"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Instagram
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="instagram" value="<?php echo $instagram ?>">
                          <span class="form-control-feedback fa fa-instagram"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Flickr
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="flickr" value="<?php echo $flickr ?>">
                          <span class="form-control-feedback fa fa-flickr"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Behance
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="behance" value="<?php echo $behance ?>">
                          <span class="form-control-feedback fa fa-behance"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Dribbble
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="dribbble" value="<?php echo $dribbble ?>">
                          <span class="form-control-feedback fa fa-dribbble"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Codepen
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="codepen" value="<?php echo $codepen ?>">
                          <span class="form-control-feedback fa fa-codepen"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Github
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="github" value="<?php echo $github ?>">
                          <span class="form-control-feedback fa fa-github"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vimeo
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="vimeo" value="<?php echo $vimeo ?>">
                          <span class="form-control-feedback fa fa-vimeo"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Vine
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="vine" value="<?php echo $vine ?>">
                          <span class="form-control-feedback fa fa-vine"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Trip Advisor
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="tripadvisor" value="<?php echo $tripadvisor ?>">
                          <span class="form-control-feedback fa fa-tripadvisor"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Quora
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="quora" value="<?php echo $quora ?>">
                          <span class="form-control-feedback fa fa-quora"></span>
                        </div>
                      </div>

                      <div class="form-group has-feedback">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Stack Overflow
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   class="form-control col-md-7 col-xs-12" name="stackOverflow" value="<?php echo $stackOverflow ?>">
                          <span class="form-control-feedback fa fa-stack-overflow"></span>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="updateLink">Update Social Media Link</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- Footer -->
        <?php include 'footer.php'; ?>
        <!-- Footer -->
