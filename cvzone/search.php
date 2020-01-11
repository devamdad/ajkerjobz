<?php include '../views/php/_header.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ajkerjob | Search CV</title>
  </head>
  <link href="assets/images/ajkerjob-icon.png" rel="icon" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/colors/brown.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/search.css">


  <body>
    <section class="search-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="text-center title"><a href="<?php echo $baseUrl?>">Ajker Job</a></h1>
            <h3 class="text-center">Search CV</h3>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search-box">
            <form class="form-horizontal col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2" action="views/php/_search.php" method="post" autocomplete="off">
              <div class="form-group  has-feedback">

                <input type="text" class="form-control" id="searchKey" placeholder="Search CV" name="key" />
                <span class="fa fa-search form-control-feedback" aria-hidden="true"></span>
              </div>
              <div class="search-option bg-info" id="search-option">
                <h3 id="sugetion"></h3>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-sm-offset-2 col-md-offset-2 clear-p">
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="" value="searchName"> Search By Name
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="" value="searchWork"> Search By Work
                </label>
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="" value="searchLocation"> Search By Location
                </label>
              </div>
            </form>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


          </div>


        </div>
      </div>
    </section>



    <section class="footer-section" id="footerArea">
      <div class="container-fluid">
        <div class="row">
          <div class="footer">
            <p class="p-h-xl pull-left">Terms &amp; Condition</p>
            <p class="p-h-xl pull-right">All right reserved by &copy; ajkerjob</p>
          </div>
        </div>
      </div>
    </section>



  </body>

  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/search.js"></script>



  <script type="text/javascript">
    $(document).ready(function() {

      if (typeof window.innerWidth != 'undefined') {
      var viewPortHeight = window.innerHeight
      }

      $('#footerArea').css("margin-top", viewPortHeight-(330) );


      $("#searchKey").keyup(function() {
        // alert("lol");
        var searchValue = $("#searchKey").val();
        if (searchValue) {
          if ($('input[name=inlineRadioOptions]:checked')){
              var contentKey = $('input[name=inlineRadioOptions]:checked').val();
              var dataToSend = { contentId: searchValue, contentKey: contentKey};
          }else{
            var dataToSend = { contentId: searchValue };
          }


          $.post("views/php/_search.php", dataToSend, function(data, status){
              if(status === 'success')
              {
                //  alert(data);
                 $("#search-option").css("display","block")
                   $("#search-option").html(data)
              }
            });

        }
        else {
          $("#search-option").css("display","none")
        }
      });

    });
  </script>



</html>
