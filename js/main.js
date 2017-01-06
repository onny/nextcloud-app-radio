$(window).on('load', function(){

  $('body').on('click', 'tr', function() {
    var sourceUrl = $(this).attr('data-src');
    $("#player").attr("src", sourceUrl);
    $('#player').trigger('play');
  });

  function render_result(data){
    $("tbody > tr").remove();
    $.each(data, function(i, station) {
      $('tbody').append('<tr data-src='+station['url']+' data-id='+station['id']+'>\
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

  function radio_query(type, query){
    switch (type) {
      case 0:
        var url = "https://www.radio-browser.info/webservice/json/stations/search";
        break;
      case 1:
        var url = "https://www.radio-browser.info/webservice/json/stations/topclick/20";
        break;
      case 2:
        var url = "https://www.radio-browser.info/webservice/json/stations/lastchange/20";
        break;
    };
    $.ajax({
      method: "POST",
      url: url,
      data: {
        name: query
      },
      dataType: 'json',
      success: render_result
    });
  };

  function switch_menu(type) {
      $('#app-navigation').find('li').removeClass("active");;
      switch (type) {
        case 0:
          $('li.nav-files').addClass('active');
          radio_query(1);
          break;
        case 1:
          $('li.nav-recent').addClass('active');
          radio_query(2);
          break;
        case 2:
          $('li.nav-favorite').addClass('active');
          break;
      }
  }

  $('#radiosearch').submit(function() {
    var query = $('#radioquery').val();
    radio_query(0, query);
  });

  $('a.nav-icon-files').click(function() {
    switch_menu(0);
  });

  $('a.nav-icon-recent').click(function() {
    switch_menu(1);
  });

  switch_menu(0);
});
