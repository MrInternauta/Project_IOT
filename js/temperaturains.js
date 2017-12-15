var data = $('#temperaturains').html();
var auto_refresh = setInterval(
function ()
{
  $.ajax
  ({
      url: 'ins_temperatura.php',
      data: data,
      success: function(data)
            {
          $('#temperaturains').html(data);
            }
     })
}, 1);
