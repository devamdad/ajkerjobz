
$(document).ready(function () {
  $('.deactive-user').click(function (event) {
    // alert('lol');
    var _this = $(this);
    var rowValue = $(this).attr('data-row');
    if (window.confirm("This user will deactivate !"))
    {
      var dataToSend = { deactivateUserId: rowValue };

      $.post("../php/_active-deactive-user.php", dataToSend, function(data, status){
          if(status === 'success')
          {
            // alert(data);
            location.reload();
          }
        });

    }

  });

  $('.active-user').click(function (event) {
    // alert('lol');
    var _this = $(this);
    var rowValue = $(this).attr('data-row');
    if (window.confirm("Activate this user !"))
    {
      var dataToSend = { activateUserId: rowValue };
      $.post("../php/_active-deactive-user.php", dataToSend, function(data, status){
          if(status === 'success')
          {
            // alert(rowValue);
            location.reload();
          }
        });

    }
  });


});
