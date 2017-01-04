$(window).on('load', function(){

  $('body').on('click', 'tr', function() {
    var sourceUrl = $(this).attr('src');
    $("#player").attr("src", sourceUrl);
    $('#player').trigger('play');
  });

  function show_result(data){
    $("tbody > tr").remove();
    $.each(data, function(i, station) {
      $('tbody').append('<tr src='+station['url']+'>\
                          <td width=60px align=center><img class=fav width=20px height=20px src='+OC.imagePath('radio','fav.png')+'></td>\
                          <td width=60px align=center><img width=40px height=40px src='+station['favicon']+'></td>\
                          <td>'+station['name']+'</td>\
                          <td width=60px align=center><a href="'+station['homepage']+'" target="_blank"><img class=homepage width=20px height=20px src='+OC.imagePath('radio','homepage.png')+'></a></td>\
                        </tr>');
    });
  }

  function search(query){
    $.ajax({
      method: "POST",
      url: 'https://www.radio-browser.info/webservice/json/stations/search',
      data: {
        name: query
      },
      dataType: 'json',
      success: show_result
    });
  };

  $('#radiosearch').submit(function() {
    var query = $('#radioquery').val();
    search(query);
  });
});
