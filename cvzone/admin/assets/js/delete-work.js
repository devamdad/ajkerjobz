
$(document).ready(function () {
  $('.delete-work').click(function (event) {
    // alert('lol');
    var _this = $(this);
    var rowValue = $(this).attr('data-row');
    if (window.confirm("Delete This Work !"))
    {
      var dataToSend = { contentId: rowValue };
      $.post("../php/_delete-work.php", dataToSend, function(data, status){
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
