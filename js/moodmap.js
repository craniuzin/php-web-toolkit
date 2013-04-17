function moodmapDraw(x , y){

    var moodmapcircle = Raphael.colorpicker($('#mpcontent').offset().left, $('#mpcontent').offset().top , 222, "#eee",'mappicker');

    moodmapcircle.cpicon.attr('stroke-opacity',0);

    if(x !== undefined){
        moodmapcircle.setHS(x,y);
    }
    return moodmapcircle;
}

function mappicker_ondrop(x,y,item) {

    $('#playlistid').html('<div class="clearfix rf-main-loader"></div>');

    // Will make the X and Y to be 0,0 when at center
    x = Math.round(x) - 111;
    y = (Math.round(y) - 111) * -1;

    console.log(x, y);

    $('#playlistid').html('<div class="rf-main-loader"></div>');
    $('#playlistid').load('ajax/moodslist_table.php',{ 'x': Math.round(x), 'y':  Math.round(y)});
    $.post('ajax/search.php', {'x' : Math.round(x), 'y' : Math.round(y)}, function(data){
        var obj = JSON.parse(data);
        this.list = {};
        
        $.each(obj.media, function(i, song){
            var genre = song.genre;
            var title = song.title;
            var artist = song.artists[0].name;

            this[genre].value = {"artist" : artist, "title" : title};
        });
        
    });

}

$(document).ready( function() {
    moodmapcircle = moodmapDraw();
});

