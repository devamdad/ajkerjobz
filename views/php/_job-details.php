<!--:::::: START : JOBS :::::::-->
  <section >
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " id="jobList">
            <div class="col-lg-12 col-md-12 col-sm-12 job-details">
              <h1>Job Details</h1>
              <?php include '../php/_show-job-details.php'; ?>
              <div class="col-lg-12 col-md-12 col-sm-12 clear-p">
                <div class="col-lg-3 col-md-3 col-sm-3 clear-p">
                  <img src="<?php echo $baseUrl.'admin_master/assets/images/employers/'.$employerImage?>" alt="">
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                  <p><?php echo $employerDetails;?></p>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 clear-p m-t-md">
                <h4>Job Title</h4>
                <p><?php echo $jobTitle;?></p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 clear-p m-t-md">
                <h4>Job Description</h4>
                <?php echo $jobDescription;?>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 clear-p m-t-md">
                <h4>Salary : <span class=""> <?php echo $jobSalary.'/-';?></span></h4>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 clear-p m-t-md">
                <h4>Job Location : <span class=""> <?php echo $jobLocation;?></span></h4>
              </div>
              <div class="job-details-footer-line"></div>
              <div class="col-lg-12 col-md-12 col-sm-12 clear-p m-t-md">
                <h4>Apply Instructions</h4>
                <p>Qualified candidates are requested to apply to <span class="txt-blue"><?php echo $jobEmail;?></span> on or before June 15, 2017.</p>
              </div>

            </div>



        </div>
      </div>
  </section>
<!--:::::: END : JOBS :::::::-->
