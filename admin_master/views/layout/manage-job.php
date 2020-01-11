
<?php $page_slug = "manage-job" ?>
<?php include_once ("../php/_header.php"); ?>
<!-- Header menue -->
<?php include 'header.php'; ?>
<!-- Header menue -->

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">



      <!-- top navigation -->
      <?php include 'top-navigation.php'; ?>
      <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Job's Post Manager</h3>
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
                    <h2>Manage Job's Post</h2>
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
                  <div class="x_content">
                    <h3 style="text-align:center;" class="text-danger">
                      <?php
                      if (isset($_SESSION['errorMessage'])) {
                        echo $_SESSION['errorMessage'];
                        unset($_SESSION['errorMessage']);
                      }

                        ?>
                    </h3>
                    <h3 style="text-align:center;" class="text-success">
                      <?php
                      if (isset($_SESSION['jobSuccess'])) {
                        echo $_SESSION['jobSuccess'];
                        unset($_SESSION['jobSuccess']);
                      }

                      ?>
                    </h3>

                    <div class="col-md-12 col-sm-12 col-md-12 col-xs-12">
                      <table>
                        <tr>
                          <td class="col-lg-4 col-md-4 col-sm-4 col-xs-4 clear-p">Job Title</td>
                          <td class="col-lg-3 col-md-3 col-sm-3 col-xs-3 clear-p">Posting Date</td>
                          <td class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></td>
                          <td class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></td>
                        </tr>
                        <?php include '../php/_show-manage-job.php'; ?>
                      </table>
                    </div>


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
