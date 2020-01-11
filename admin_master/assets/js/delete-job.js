
$(document).ready(function () {
  $('.delete-job').click(function (event) {
    // alert('lol');
    var _this = $(this);
    var rowValue = $(this).attr('data-row');
    if (window.confirm("Delete This Job!"))
    {
      var dataToSend = { contentId: rowValue };
      $.post("../php/_delete-job.php", dataToSend, function(data, status){
          if(status === 'success')
          {
            // alert(data);
             _this.parent().parent().remove();
          }
        });

    }

  });
});
