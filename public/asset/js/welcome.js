console.log("Loaded the loader script!");

$(document).ready( () => {
    
    var hoverTimeout;
    $('.cell-row').hover(function() {
        var buttonBox = $(this).find('finished_work');
        $(this).find('form').css( "visibility", "visible" );
        console.log(buttonBox);
    }, function(){
        $(this).find('form').css( "visibility", "hidden" );
    });    

});