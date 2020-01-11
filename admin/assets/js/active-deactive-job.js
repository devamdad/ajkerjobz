
$(document).ready(function () {
  $('.deactive-job').click(function (event) {
    // alert('lol');
    var _this = $(this);
    var rowValue = $(this).attr('data-row');
    if (window.confirm("This job post will deactivate !"))
    {
      var dataToSend = { deactivateJob: rowValue };

      $.post("../php/_active-deactive-job.php", dataToSend, function(data, status){
          if(status === 'success')
          {

            location.reload();
          }
        });

    }

  });

  $('.active-job').click(function (event) {
    // alert('lol');
    var _this = $(this);
    var rowValue = $(this).attr('data-row');
    if (window.confirm("Activate this job post !"))
    {
      var dataToSend = { activateJob: rowValue };
      $.post("../php/_active-deactive-job.php", dataToSend, function(data, status){
          if(status === 'success')
          {
            // alert(rowValue);
            location.reload();
          }
        });

    }
  });


});
