var data = $('#temperatura').html();
var auto_refresh = setInterval(
function ()
{
  $.ajax
  ({
      url: 'leer_temperatura.php',
      data: data,
      success: function(data)
            {
          $('#temperatura').html(data);
            }
     })
}, 1);
