$(document).ready( function() {
    moodmapcircle = moodmapDraw('mappicker');
});


/**
 * Starts the ColorPicker widget
 *
 * @param string elemID The ID of the html element that will hold the ColorPicker widget
 *
 * @result ColorPicker Widget Object
 */
function moodmapDraw(elemID){
    var parentElem = $('#'+elemID).parent();
    var moodmapcircle = Raphael.colorpicker(parentElem.offset().left, parentElem.offset().top , 222, "#eee",elemID);

    moodmapcircle.cpicon.attr('stroke-opacity',0);

    return moodmapcircle;
}
var QueryHandle = null;
/**
 * This is the callback method for when the user drops the picker on the color-map
 *
 * @param string x Coordinate X of the picker inside the color-map
 * @param string y Coordinate Y of the picker inside the color-map
 * @param string item ColorPicker widget object
 */
function mappicker_ondrop(x,y,item) {

    // Will make the X and Y to be 0,0 when at center
    x = Math.round(x) - 111;
    y = (Math.round(y) - 111) * -1;

    // Show Loading Icon
    $('.results .list').hide();
    $('.loading-list').css('display','block');

    // Cancel the running Ajax query before making another
    if(QueryHandle != null) QueryHandle.abort();
    QueryHandle = $.post('ajax/search.php', {'x' : Math.round(x), 'y' : Math.round(y)}, function(data){
        var obj = JSON.parse(data);

        if(obj.media.length == 0){
            $('.loading-list').hide();
            $('.results .list').show().html( kite('#results-empty', null) );
            return null;
        }
        var list = {};
        list.genres = {};

        $.each(obj.media, function(i, song){
            var genre = song.genre;
            var slug = slugify(genre);
            var title = song.title;
            var artist = song.artists[0].name;
            var duration = song.duration.toString();

            // Check if there is a block for the current Genre, if not, create it
            if(list['genres'][slug] == undefined){
                list['genres'][slug] = {};
                list['genres'][slug].name = genre;
                list['genres'][slug].slug = slug;
                list['genres'][slug].songs = []
            }
            list['genres'][slug].songs.push({'artist' : artist, 'title' : title, 'duration' : duration.toHHMMSS()});
        });

        var tmplData = {};
        tmplData.genres = [];
        $.each(list.genres, function(i, val){
            tmplData.genres.push(val);
        });

        $('.loading-list').hide();
        $('.results .list').show().html( kite('#results-tmpl', tmplData) );

    });

}

/**
 * Transform text into a URL slug: spaces turned into dashes, remove non alnum
 * @param string text
 */
function slugify(text) {
    text = text.replace(/[^-a-zA-Z0-9,&\s]+/ig, '');
    text = text.replace(/-/gi, "_");
    text = text.replace(/\s/gi, "-");
    text = text.toLowerCase();
    return text;
}

/**
 * Convert a numeric String into time formatted as HH:MM:SS
 */
String.prototype.toHHMMSS = function () {
    sec_numb    = parseInt(this);
    var hours   = Math.floor(sec_numb / 3600);
    var minutes = Math.floor((sec_numb - (hours * 3600)) / 60);
    var seconds = sec_numb - (hours * 3600) - (minutes * 60);

    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}
    var time    = minutes+':'+seconds;
    return time;
}
