$.getJSON( "pulls.json", function( data ) {
  var items = [];
  $.each( data, function( key, val ) {
      if(key < 5) {
          items.push( "<div class='pull-request'><a href='" + data[key]['user']['html_url'] + "'><img class='avatar' src='" + data[key]['user']['avatar_url'] + "'></img></a><a href='" + data[key]['html_url'] + "'><h5><img class='mergestatus' src=''>" + data[key]['title'] + "</h5></a>" + "<p>" + data[key]['body'] + "<br />By <a href='" + data[key]['user']['html_url'] + "'>" + data[key]['user']['login'] + "</a></p></div>");
      };
  });
  $( "<ul/>", {
    "class": "my-new-list",
    html: items.join( "" )
  }).appendTo( ".recent-pr" );
});
