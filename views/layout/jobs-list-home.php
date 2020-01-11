<!--:::::: START : JOBS :::::::-->
  <section >
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 jobs" id="jobs">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h1>Category Job Listing</h1>
              <?php include 'views/php/_jobs-list-home.php'; ?>



            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <h1>Spotlight Jobs</h1>
              <?php include 'views/php/_show-spotlight-job.php'; ?>

          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <a href="<?php echo $baseUrl.'views/layout/all-jobs.php'?>" class="btn btn-primary m-l-sm">More Job's</a>
          </div>



        </div>
      </div>
  </section>
<!--:::::: END : JOBS :::::::-->
