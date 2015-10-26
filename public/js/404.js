

var $cont404 = $('.page-404 .content');
$(window).on('load', function(){
    $cont404.css('height', $(window).height());
});

$(window).on('resize', function(){
    $cont404.css('height', $(window).height());
});

/*Adding Placeholder Support in Older Browsers*/
$(document).ready(function(e) {
    $('input, textarea').placeholder();
});
