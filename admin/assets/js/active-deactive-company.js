
$(document).ready(function () {
  $('.deactive-employer').click(function (event) {
    // alert('lol');
    var _this = $(this);
    var rowValue = $(this).attr('data-row');
    if (window.confirm("This employer will deactivate !"))
    {
      var dataToSend = { deactivateAdminId: rowValue };

      $.post("../php/_active-deactive-employer.php", dataToSend, function(data, status){
          if(status === 'success')
          {
            // alert(data);
            window.open("http://localhost/AjkerJob/admin/views/layout/manage-company.php", "_parent");
          }
        });

    }

  });

  $('.active-employer').click(function (event) {
    // alert('lol');
    var _this = $(this);
    var rowValue = $(this).attr('data-row');
    if (window.confirm("Activate this employer !"))
    {
      var dataToSend = { activateAdminId: rowValue };
      $.post("../php/_active-deactive-employer.php", dataToSend, function(data, status){
          if(status === 'success')
          {
            // alert(data);
            window.open("http://localhost/AjkerJob/admin/views/layout/manage-company.php", "_parent");
          }
        });

    }
  });


});
