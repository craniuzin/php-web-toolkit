var slideSpeed = 0;
var over = false;
var offsetX = false;
$(document).ready(function(){

    var sliderSettings = {
      orientation: "horizontal",
      range: "min",
      max: 100,
      min: -100,
      value: 0,
      slide: sliding,
      create: setMiddleColor,
      change: setValue
    };

    $( "#positive-negative, #intense-subdued").slider(sliderSettings);

    //sliderSettings.max = 70;
    //sliderSettings.min = -70;
    $( "#happy-sad, #angry-serene").slider(sliderSettings);


    /**
     * Open the list of songs for a Genre when clicked
     */
    $('.results').on('click', '.block .name', function(){
        $(this).parent().toggleClass('active',  400);
    });

    $('.results .filter a').click(function(){
        $('.results .filter a.active').removeClass('active');
        $(this).addClass('active');
    });
    
    $(".cloud-tag").tagcloud({type:"list", sizemin:12, sizemax: 24, colormin: '666', colormax: '666'});
    
    $('.big-box .slide-arrow')
    .mousemove(function(event){
        cloudSlide(event.offsetX, $(this).attr('direction'));
    })
    .mouseout(function(){
        $('.cloud-tag').stop(true, false);
        over = false;
    })
    .mouseenter(function(event){
        cloudSlide(event.offsetX, $(this).attr('direction'));
    });
});

function cloudSlide(x, dir){
    offsetX = x;
    over = dir;

    var $cloud = $('.cloud-tag');
    var width = $cloud.width();
    
    var toRight = 430 - width - 80;
    var toLeft = 0;

    var margin = $cloud.css('margin-left').replace('px', '') * 1;
    console.log(margin, toRight);

    if(dir == 'left'){
        if(margin <= toRight + 110){
            $cloud.stop(true, true).animate({'marginLeft': toRight}, 100, 'linear');
            return false;
        }

        $cloud.animate({'marginLeft':'-=100px'}, 200, 'linear', function(){
            checkSliding();
        });
    }
    else if('right'){
        if(margin >= -110){
            $cloud.stop(true, true).animate({'marginLeft': 0}, 100, 'linear');
            return false;
        }

        $cloud.animate({'marginLeft':'+=100px'}, 200, 'linear', function(){
            checkSliding();
        });
    }
}

function checkSliding(){
    if(over !== false){
        cloudSlide(offsetX, over);
    }
}

function setValue(){
    var value = parseInt($(this).slider('value'));
    $(this).parent().find('em').text(value);
    $(this).parent().find(':input').val(value);
}

/**
 * Set the Middle color based on the two opposite colors
 */
function setMiddleColor(){
    // Colors
    var positive = $(this).css('background-color');
    var negative = $(this).find('.ui-slider-range').css('background-color');
    positive = positive.replace('rgb(', '').replace(')', '').split(', ');
    negative = negative.replace('rgb(', '').replace(')', '').split(', ');

    // Mid Values
    var r = Math.round((parseInt(positive[0]) + parseInt(negative[0]) ) / 2);
    var g = Math.round((parseInt(positive[1]) + parseInt(negative[1]) ) / 2);
    var b = Math.round((parseInt(positive[2]) + parseInt(negative[2]) ) / 2);
    var hexColor = '#' + r.toString(16) + g.toString(16) + b.toString(16);
    $(this).parent().find('.ui-slider-handle').css('background', hexColor);
    $(this).data('base', hexColor);
}

/**
 * Gets the default middle color and use it as base to blend the two opposite colors
 * Then uses this new blended color to set it as .ui-slider-handle background
 */
function sliding(){
    var value = parseInt($(this).slider('value'));
    $(this).parent().find('em').text(value);

    // Colors
    var positive = $(this).css('background-color');
    var negative = $(this).find('.ui-slider-range').css('background-color');
    positive = positive.replace('rgb(', '').replace(')', '').split(', ');
    negative = negative.replace('rgb(', '').replace(')', '').split(', ');

    var base     = hexToRgb($(this).data('base'));

    var direction = (value > 0) ? "positive" : "negative";

    var result = new Array();
    if(direction == 'positive'){
        var r = parseInt((base.r - negative[0])/100 * value);
        var g = parseInt((base.g - negative[1])/100 * value);
        var b = parseInt((base.b - negative[2])/100 * value);

        result.push(base.r + r);
        result.push(base.g + g);
        result.push(base.b + b);
    }
    else {
        var r = parseInt((base.r - positive[0])/100 * (-1 * value));
        var g = parseInt((base.g - positive[1])/100 * (-1 * value));
        var b = parseInt((base.b - positive[2])/100 * (-1 * value));

        result.push(base.r + r);
        result.push(base.g + g);
        result.push(base.b + b);
    }

    var hexColor = '#' + result[0].toString(16) + result[1].toString(16) + result[2].toString(16);
    $(this).parent().find('.ui-slider-handle').css('background', hexColor);

    // Move the connected axis
    moveConnected($(this));
}

function moveConnected(obj){
    var id = obj.attr('id');
    var value = parseInt(obj.slider('value'));

    // HAPPY - SAD
    if(id == 'happy-sad'){
        var aux = Math.round(Math.sqrt(Math.pow(value, 2) / 2));

        if(value < 0) aux = aux * -1;

        $('#positive-negative').slider('value', aux);
        $('#intense-subdued').slider('value', aux);
        $('#angry-serene').slider('value', 0);
    }
    // INTENSE - SUBDUED
    else if(id == 'intense-subdued'){
        var aux = Math.round(Math.sqrt(Math.pow(value, 2) / 2));

        if(value < 0) aux = aux * -1;

        $('#positive-negative').slider('value', 0);
        $('#happy-sad').slider('value', aux);
        $('#angry-serene').slider('value', aux);
    }
    else if(id == 'angry-serene'){
        var aux = Math.round(Math.sqrt(Math.pow(value, 2) / 2));

        if(value < 0) aux = aux * -1;

        $('#positive-negative').slider('value', aux * -1);
        $('#intense-subdued').slider('value', aux);
        $('#happy-sad').slider('value', 0);
    }
    else if(id == 'positive-negative'){
        var aux = Math.round(Math.sqrt(Math.pow(value, 2) / 2));

        if(value < 0) aux = aux * -1;

        $('#angry-serene').slider('value', aux * -1);
        $('#intense-subdued').slider('value', 0);
        $('#happy-sad').slider('value', aux);
    }


    console.log(aux);

}

/**
 * Returns a HEX color as a RGB object
 */
function hexToRgb(hex) {
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
        r: parseInt(result[1], 16),
        g: parseInt(result[2], 16),
        b: parseInt(result[3], 16)
    } : null;
}
