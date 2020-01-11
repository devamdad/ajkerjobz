
<?php $page_slug="home"; ?>

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

          <!-- top tiles -->
          <?php

          include 'top-data-general.php';

          ?>
          <!-- /top tiles -->

          <?php
          $m = date("m");
          $month = array("01"=>"JANUARY","02"=>"FEBRUARY","03"=>"MARCH","04"=>"APRILE","05"=>"MAY","06"=>"JUNE","07"=>"JULY","08"=>"AUGUST","09"=>"SEPTEMBER","10"=>"OCTOBER","11"=>"NOVEMBER","12"=>"DEEMBER")

          ?>

          <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
              <h4 class="p-t-xl">
                Today : <span class="green"><?php echo date("l");?> ,&nbsp;</span><span class="green"><?php echo date("d")." ".$month[$m]." ".date("Y");?>.</span>
              </h4>
              <h4 class="p-b-xl">
                <!-- Last login at : <span class="green">10pm, &nbsp;</span><span class="green">15 December 2016.</span> -->
              </h4>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12">
            <!-- Visitors location Start  -->
            <?php
            // include 'visitor-location.php';
            ?>
            <!-- Visitors location End -->
            </div>
          </div>
        </div>
        <!-- /page content -->


      </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- Footer -->


  </body>
</html>
