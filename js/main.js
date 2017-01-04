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
                          <td class="filename">\
                            <a href="#" class="action action-favorite" data-original-title="" title="">\
                              <span class="icon icon-star"></span>\
                              <span class="hidden-visually">Favorite</span>\
                            </a>\
                            <label for="select-files-3">\
                              <div class="thumbnail" style="background-image:url('+station['favicon']+'); background-size: 32px;"></div>\
                            </label>\
                            <a class="name" href="#">\
                              <span class="nametext"><span class="innernametext">'+station['name']+'</span></span>\
                            </a>\
                          </td>\
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
