
<?php $page_slug = "add-experience" ?>
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
                        <img src="../../assets/images/img.jpg" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?php echo $_SESSION['username'];?></h2>
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
                        <h3>Experience Manager</h3>
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
                                <h2>Add Experience</h2>
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
                                    if (isset($_SESSION['errorExperience'])) {
                                        echo $_SESSION['errorExperience'];
                                        unset($_SESSION['errorExperience']);
                                    }

                                    ?>
                                </h3>
                                <h3 style="text-align:center;" class="text-success">
                                    <?php
                                    if (isset($_SESSION['experienceSuccess'])) {
                                        echo $_SESSION['experienceSuccess'];
                                        unset($_SESSION['experienceSuccess']);
                                    }

                                    ?>
                                </h3>
                                <form  action="../php/_add-experience.php" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" accept-charset="utf-8">


                                    <!-- <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Date (yr/mm/dd) <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text"  readonly="readonly" class="form-control col-md-7 col-xs-12" name="" value="" id="newsDate" >
                                      </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Designation <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" name="designation" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Company Name<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text"  class="form-control col-md-7 col-xs-12" name="companyName" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Start Date</label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" data-inputmask="'mask': '9999-99-99'" name="startsDate">

                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-3">End Date</label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" class="form-control" data-inputmask="'mask': '9999-99-99'" name="endDate">

                                      </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Company Location<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text"  class="form-control col-md-7 col-xs-12" name="companyLocation" >

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" id="postDate" value="<?php echo date("Y-m-d")." ".date("h:i:s")?>"  name="postDate">
                                        </div>
                                    </div>




                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="submit" class="btn btn-success btn-md" name="">Save Experience</button>
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
