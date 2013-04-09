$(document).ready(function(){
    $( ".slider").slider({
      orientation: "horizontal",
      range: "min",
      max: 100,
      min: -100,
      value: 0,
      slide: sliding
    });
});

function sliding(){
    var value = $(this).slider('value');
    $(this).parent().find('em').text(value);

    // Colors
    var positive = $(this).css('background-color');
    var negative = $(this).find('.ui-slider-range').css('background-color');
    
    positive = positive.replace('rgb(', '').replace(')', '').split(', ');
    negative = negative.replace('rgb(', '').replace(')', '').split(', ');

    var direction = (parseInt(value) > 0) ? "positive" : "negative";

    console.log(positive, negative, direction);
}

