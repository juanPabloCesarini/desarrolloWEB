$(document).ready(function() {
    $('.arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        },500);
    });
});