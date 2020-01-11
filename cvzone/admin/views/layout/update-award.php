<?php $page_slug = "update-awards"; ?>
<!-- Header menue -->
<?php include 'header.php'; ?>
<!-- Header menue -->
<?php include "../php/_update-award-view.php"; ?>


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
                        <h3>Award</h3>
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
                                <h2>Update Award</h2>
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
                                <h3 style="text-align:center; color:red" class="text-danger">
                                    <?php
                                    if (isset($_SESSION['errorTitle'])) {
                                        echo $_SESSION['errorTitle'];
                                        unset($_SESSION['errorTitle']);
                                    }

                                    ?>
                                </h3>
                                <h3 style="text-align:center;" class="text-success">
                                    <?php
                                    if (isset($_SESSION['educationSuccess'])) {
                                        echo $_SESSION['educationSuccess'];
                                        unset($_SESSION['educationSuccess']);
                                    }

                                    ?>
                                </h3>
                                <form  action="../php/_update-award.php" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" accept-charset="utf-8">


                                    <div class="form-group">
                                        <label for="title" class="control-label col-md-3 col-sm-3 col-xs-12">Title <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" name="title" value="<?php echo  $shows['title']; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="institute" class="control-label col-md-3 col-sm-3 col-xs-12">Organization <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" name="organization" value="<?php echo  $shows['organization']; ?>" >
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="major" class="control-label col-md-3 col-sm-3 col-xs-12">Location<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control col-md-7 col-xs-12" name="location" value="<?php echo  $shows['location']; ?>" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Year<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="date" class="form-control col-md-7 col-xs-12" name="year" value="<?php echo  $shows['year']; ?>" >
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="result" class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea type="text" class="form-control col-md-7 col-xs-12" name="description"><?php echo  $shows['description']; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" class="form-control col-md-7 col-xs-12" name="id" value="<?php echo $shows['id'];?>" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="hidden" class="form-control col-md-7 col-xs-12" name="user_id" value="<?php echo $shows['user_id'];?>" >
                                        </div>
                                    </div>





                                </div>
                            </div>



                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="submit" class="btn btn-success btn-md" name="">Update</button>
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
