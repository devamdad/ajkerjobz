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

<?php if($page_slug == "manage-hobbies") { ?>
  <!-- Extra for Home -->
  <script type="text/javascript" src="../../assets/js/delete-hobbies.js"></script>

<?php }?>

<?php if($page_slug == "manage-facts") { ?>
  <!-- Extra for Home -->
  <script type="text/javascript" src="../../assets/js/delete-facts.js"></script>

<?php }?>

<?php if($page_slug == "inbox") { ?>
  <!-- Extra for Home -->
  <script type="text/javascript" src="../../assets/js/delete-inbox.js"></script>

<?php }?>

<?php if($page_slug == "add-skill" || $page_slug == "add-publication" || $page_slug == "update-publication") { ?>
  <!-- jQuery Tags Input -->
  <script src="../../assets/js/jquery.tagsinput.js"></script>

<?php }?>
<?php if($page_slug == "manage-skill") { ?>

  <script src="../../assets/js/delete-skill.js"></script>

<?php }?>

<?php if($page_slug == "manage-work") { ?>

  <script src="../../assets/js/delete-work.js"></script>

<?php }?>

<?php if($page_slug == "manage-publication") { ?>

  <script src="../../assets/js/delete-publication.js"></script>

<?php }?>

<?php if($page_slug == "manage-service") { ?>

  <script src="../../assets/js/delete-service.js"></script>

<?php }?>

<?php if($page_slug == "manage-experience") { ?>

  <script src="../../assets/js/delete-experience.js"></script>

<?php }?>

<?php if($page_slug == "manage-education") { ?>

  <script src="../../assets/js/delete-education.js"></script>

<?php }?>

<?php if($page_slug == "manage-awards") { ?>

  <script src="../../assets/js/delete-award.js"></script>

<?php }?>

<?php if($page_slug == "add-experience" || $page_slug == "add-education.php" || $page_slug == "update-awards.php") { ?>

  <script src="../../assets/js/jquery.inputmask.bundle.min.js"></script>

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
          left: editorOffset.left + $('#editor').innerWidth() - 35
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

<?php if($page_slug == "add-experience" || $page_slug == "add-education.php" || $page_slug == "update-awards.php") { ?>

  <!-- jquery.inputmask -->
  <script>
    $(document).ready(function() {
      $(":input").inputmask();
    });
  </script>
  <!-- /jquery.inputmask -->

<?php }?>

<?php if($page_slug == "add-skill") { ?>

  <!-- jQuery Tags Input -->
  <script>
    function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
      alert("Changed a tag: " + tag);
    }

    $(document).ready(function() {
      $('#tags_1').tagsInput({
        width: 'auto'
      });
    });
  </script>
  <!-- /jQuery Tags Input -->

<?php }?>


<?php if( $page_slug == "update-publication" || $page_slug == "add-publication") { ?>

  <!-- jQuery Tags Input -->
  <script>
    function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
      alert("Changed a tag: " + tag);
    }

    $(document).ready(function() {
      $('#tags_1').tagsInput({
        width: 'auto'
      });
    });
  </script>
  <!-- /jQuery Tags Input -->

  <script type="text/javascript">
    function wordCountPublication() {
      var maxWord=700;
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

<?php }?>

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
  function wordCount() {
    var maxWord=800;
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

<script type="text/javascript">
  function wordCountHobbies() {
    var maxWord=140;
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

<script type="text/javascript">
  function wordCountSettings() {
    var maxWord=120;
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

<script type="text/javascript">
  function wordCountSkill() {
    var maxWord=200;
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

<script type="text/javascript">
  function wordCountWork() {
    var maxWord=680;
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


<script type="text/javascript">
  function wordCountService() {
    var maxWord=115;
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
    Tech Karigar - Bootstrap Admin Template by <a href="">Ajker Job</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->

      </div>
    </div>
  </body>
</html>
