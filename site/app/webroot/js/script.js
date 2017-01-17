$(window).scroll(function() {
    if($(this).scrollTop() > 70)  /*height in pixels when the navbar becomes non opaque*/ 
    {        
        $('.nav_large').show('slow');
        $('.nav_scroll').hide('slow');
    } else {
        $('.nav_large').hide('slow');
        $('.nav_scroll').show('slow');
    }
});