
$(document).ready(function () {
  $('.delete-inbox').click(function (event) {
    // alert('lol');
    var _this = $(this);
    var rowValue = $(this).attr('data-row');
    if (window.confirm("Delete This Email!"))
    {
      var dataToSend = { contentId: rowValue };
      $.post("../php/_delete-inbox.php", dataToSend, function(data, status){
          if(status === 'success')
          {
             window.open("http://localhost/cvzone/admin/views/layout/inbox.php", "_parent");
          }
        });

    }
    // else {
    //
    // }
  });
});
