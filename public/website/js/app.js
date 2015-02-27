$(function() {
    $('.scrollto, .gototop').bind('click',function(event){
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500,'easeInOutExpo');
        event.preventDefault();
    });
    $('.dropdown-menu').hover(function(){
        $(this).prev('.dropdown-toggle').addClass('hover');
    },function() {
        $(this).prev('.dropdown-toggle').removeClass( "hover" );
    });
});
$(function() {
    var eHeight = [];
    $('	.hp-benifits').each(function() {
        eHeight.push($(this).outerHeight());
    });
    $('.hp-benifits').promise().done(function(){
        maxHeight = Math.max.apply(Math,eHeight);
        $(this).css('height',maxHeight);
    });
});