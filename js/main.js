$(document).ready(function () {
  var url = "http://sheetsu.com/apis/b4817d23";

  $.ajax({
    url: url,
    dataType: "json",
    success: function(data) {
      console.log(data);
      var diver = $('<h1>').text(data.result[0].diver);
      var location = $('<p>').text(data.result[0].location);
      var date = $('<p>').text(data.result[0].date);

      $('.result')
        .append(diver)
        .append(location)
        .append(date)
    },
  });
});
