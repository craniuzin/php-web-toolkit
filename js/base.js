$(document).ready(function(){
    $( ".slider").slider({
      orientation: "horizontal",
      range: "min",
      max: 100,
      min: -100,
      value: 0,
      slide: function(){
        var value = $(this).slider('value');
        $(this).parent().find('em').text(value);
      }
    });
});

