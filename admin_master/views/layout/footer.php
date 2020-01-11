<!-- jQuery -->
<script src="../../assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../assets/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../assets/js/fastclick.js"></script>
<!-- NProgress -->
<script src="../../assets/js/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="../../assets/js/custom.min.js"></script>

<?php if($page_slug == "home" || $page_slug =="change-date") { ?>
  <!-- Extra for Home -->
  <script type="text/javascript" src="../../assets/js/date.js"></script>

<?php }?>


<?php if($page_slug == "create-admin") { ?>
<!--
  <script type="text/javascript" src="../../assets/js/check-username.js"></script>
  <script type="text/javascript" src="../../assets/js/check-email.js"></script> -->

<?php }?>

<?php if($page_slug == "update-admin") { ?>
  <script type="text/javascript" src="../../assets/js/check-email.js"></script>
<?php }?>

<?php if($page_slug == "manage-job") { ?>
  <script type="text/javascript" src="../../assets/js/delete-job.js"></script>
<?php }?>



<!-- bootstrap-wysiwyg -->
<script src="../../assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="../../assets/js/jquery.hotkeys.js"></script>
<script src="../../assets/js/prettify.js"></script>






<!-- bootstrap-wysiwyg -->
<script>
  $(document).ready(function() {
    function initToolbarBootstrapBindings() {
      var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
          'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
          'Times New Roman', 'Verdana'
        ],
        fontTarget = $('[title=Font]').siblings('.dropdown-menu');
      $.each(fonts, function(idx, fontName) {
        fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
      });
      $('a[title]').tooltip({
        container: 'body'
      });
      $('.dropdown-menu input').click(function() {
          return false;
        })
        .change(function() {
          $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
        })
        .keydown('esc', function() {
          this.value = '';
          $(this).change();
        });

      $('[data-role=magic-overlay]').each(function() {
        var overlay = $(this),
          target = $(overlay.data('target'));
        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
      });

      if ("onwebkitspeechchange" in document.createElement("input")) {
        var editorOffset = $('#editor').offset();

        $('.voiceBtn').css('position', 'absolute').offset({
          top: editorOffset.top,
          left: editorOffset.left + $('').innerWidth() - 35
        });
      } else {
        $('.voiceBtn').hide();
      }
    }

    function showErrorAlert(reason, detail) {
      var msg = '';
      if (reason === 'unsupported-file-type') {
        msg = "Unsupported format " + detail;
      } else {
        console.log("error uploading file", reason, detail);
      }
      $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
        '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
    }

    initToolbarBootstrapBindings();

    $('#editor').wysiwyg({
      fileUploadError: showErrorAlert
    });


    window.prettyPrint;
    prettyPrint();
  });
</script>
<!-- /bootstrap-wysiwyg -->


<script type="text/javascript">
  $(document).ready(function () {
    $('input[name=salaryNegotiable]').click(function () {
      if ($(this).is(":checked")) {
        $("#jobSalary").css("display","none")
      }
      else if ($(this).is(":not(:checked)")) {
        $("#jobSalary").css("display","block")
      }
    });

  });
</script>


<script type="text/javascript">
  function textEditor() {
    var content = document.getElementById('editor').innerHTML;
    // alert(content);
    var finalContent = content.replace("'", "-");
    document.getElementById('descr').innerHTML=finalContent;
    // alert(content);
  }
</script>

<script type="text/javascript">
  function wordCountProfile() {
    var maxWord=400;
    var word=document.getElementById('editor').innerHTML;
    var ln = word.length;
    var subWord =word.slice(0,4);
    var subWord2 =word.slice(ln-4,ln);
    if (subWord=='<br>') {
      word = word.substr(5, ln);
    }
    if (subWord2=='<br>') {
      word = word.substr(0, ln-4);
    }
    // alert(word);
    var ln = word.length;
    if (ln==0) {
      document.getElementById('wordRemaining').innerHTML=maxWord+" More word's";
    }
    else if (ln>maxWord) {
      var finalString = document.getElementById('editor').innerHTML;
      // document.getElementById('editor').disabled = true;
      finalString = finalString.substr(0,maxWord)
      document.getElementById('editor').innerHTML=finalString;
      document.getElementById('wordRemaining').innerHTML="0  word";
    }
    else {
      var remainWord=maxWord-ln;

      if (remainWord>=1) {
        document.getElementById('wordRemaining').innerHTML=remainWord+" More word's";
      }
      if (remainWord==0) {
        document.getElementById('wordRemaining').innerHTML="0  word";

      }
      if (remainWord<0) {
        document.getElementById('editor').disabled = true;
      }

    }

  }
</script>





<script type="application/javascript">
    $(document).ready(function () {

      var fullDate = new Date();
      var date = fullDate.getDate();
      if (date<10) {
        date = date.toString();
        date = '0'+date;
      }
      else {
        date = date.toString();
      }


      // finding month
      var month  = fullDate.getMonth();
      month = month +1;
      if (month<10) {
        month = month.toString();
        month = '0'+month;
      }
      else {
        month = month.toString();
      }
      // alert(month);


// finding year
      var year = fullDate.getYear();
        year = year.toString();
      var yearSlice = year.slice(1);


      var Daydate = yearSlice+'/'+month+'/'+date;
      var PostDate = yearSlice+month+date;

      document.getElementById('newsDate').value = Daydate;
      document.getElementById('postDate').value = PostDate;


    });
</script>




<!-- footer content -->
<footer>
  <div class="pull-right">
    Website - Bootstrap Admin Template by <a href=""><?php echo $websiteName ?></a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->

      </div>
    </div>
  </body>
</html>
