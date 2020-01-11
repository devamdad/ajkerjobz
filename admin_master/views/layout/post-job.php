
<?php $page_slug = "post-job" ?>
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
                    <h2>Post Job</h2>
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

                    <form  action="../php/_post-job.php" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data" accept-charset="utf-8">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Job Category<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                          <select class="form-control col-md-7 col-xs-12" name="jobCategory">
                            <?php include '../php/_show-job-categories.php'; ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Job Title<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  class="form-control col-md-7 col-xs-12" name="title" value="" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email"  class="form-control col-md-7 col-xs-12" name="email" value="" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Salary<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 job-salary">
                          <input type="number"  class="form-control col-md-7 col-xs-12" name="salary" id="jobSalary" value="">
                          <input type="checkbox" name="salaryNegotiable" id="jobSalaryNegotiable" value="yes" class="">
                          <label class="clear-m" >&nbsp;Negotiable</label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Job Location<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <ul class="to_do">
                            <li>
                              <p>
                                <input type="checkbox" class="" value="Dhaka" name="dhaka"> Dhaka </p>
                            </li>
                            <li>
                              <p>
                                <input type="checkbox" class="" value="Chittagong" name="chittagong"> Chittagong</p>
                            </li>
                            <li>
                              <p>
                                <input type="checkbox" class="" value="Rajshahi" name="rajshahi"> Rajshahi</p>
                            </li>
                            <li>
                              <p>
                                <input type="checkbox" class="" value="Khulna" name="khulna"> Khulna</p>
                            </li>
                            <li>
                              <p>
                                <input type="checkbox" class="" value="Rangpur" name="rangpur"> Rangpur</p>
                            </li>
                            <li>
                              <p>
                                <input type="checkbox" class="" value="Sylhet" name="sylhet"> Sylhet</p>
                            </li>
                            <li>
                              <p>
                                <input type="checkbox" class="" value="Barisal" name="barisal"> Barisal</p>
                            </li>
                          </ul>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="postDate" value="<?php echo date("Y-m-d")." ".date("h:i:s")?>"  name="postDate">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden"  value="<?php echo $employer ?>"  name="emlpoyers">
                        </div>
                      </div>

                      <div class="form-group">
                        <h4>Job Details</h4>
                        <div class="x_content">
                          <div id="alerts"></div>
                          <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
                            <div class="btn-group">
                              <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                              <ul class="dropdown-menu">
                              </ul>
                            </div>

                            <div class="btn-group">
                              <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                <li>
                                  <a data-edit="fontSize 5">
                                    <p style="font-size:17px">Huge</p>
                                  </a>
                                </li>
                                <li>
                                  <a data-edit="fontSize 3">
                                    <p style="font-size:14px">Normal</p>
                                  </a>
                                </li>
                                <li>
                                  <a data-edit="fontSize 1">
                                    <p style="font-size:11px">Small</p>
                                  </a>
                                </li>
                              </ul>
                            </div>

                            <div class="btn-group">
                              <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                              <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                              <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                              <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                            </div>

                            <div class="btn-group">
                              <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                              <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                              <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                              <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                            </div>

                            <div class="btn-group">
                              <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                              <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                              <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                              <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                            </div>

                            <div class="btn-group">
                              <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                              <div class="dropdown-menu input-append">
                                <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                <button class="btn" type="button">Add</button>
                              </div>
                              <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                            </div>

                            <div class="btn-group">
                              <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                              <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                            </div>

                            <div class="btn-group">
                              <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                              <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                            </div>
                          </div>

                          <div id="editor" class="editor-wrapper" name="content" oninput="wordCount()"></div>

                          <textarea name="descr" id="descr" style="display:none;"></textarea>

                          <br />
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success btn-md btn-round" name="" onclick="textEditor()">Post Job</button>
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
