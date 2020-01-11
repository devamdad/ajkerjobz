
$(document).ready(function () {
  $('.delete-experience').click(function (event) {
    // alert('lol');
    var _this = $(this);
    var rowValue = $(this).attr('data-row');
    if (window.confirm("Delete This Experience !"))
    {
      var dataToSend = { contentId: rowValue };
      $.post("../php/_delete-experience.php", dataToSend, function(data, status){
          if(status === 'success')
          {
             _this.parent().parent().remove();
          }
        });

    }
    // else {
    // 	window.location.open('http://www.w3schools.com');
    // }
  });
});
