<?php $page_slug = "manage-awards"; ?>
<!-- Header menue -->
<?php include 'header.php'; ?>
<!-- Header menue -->
<?php include '../php/_manage-awards.php';?>





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
                        <h3>Awards</h3>
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
                                <h2>Manage Awards</h2>
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

                                <div class="manage-table">
                                	<table class="table table-striped">
									    <thead>

                                          <tr class="success">
									        <th>Title</th>
									        <th>Institute</th>
									        <th>Delete/Update</th>
									      </tr>


									    </thead>
									    <tbody>
									   <?php foreach($awards as $award): ?>
                          <tr>
	                          <td><?php echo $award['title']; ?></td>
                            <td><?php echo $award['organization']; ?></td>
                            <td><a href="update-award.php?id=<?php echo $award['id']; ?>" class="btn btn-success">UPDATE</a>
                            <a class="btn btn-danger delete-award" data-row="<?php echo $award['id'] ?>">DELETE</a>
                          </td>
	                       </tr>
                    <?php endforeach; ?>


									    </tbody>
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
