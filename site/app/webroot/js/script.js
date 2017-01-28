$(window).scroll(function() {
	if ($( document ).width() > 769) {
        if($(this).scrollTop() > 70)  /*height in pixels when the navbar becomes non opaque*/ 
        {        
            $('.nav_large').show('slow');
            $('.nav_scroll').hide('slow');
        } else {
            $('.nav_large').hide('slow');
            $('.nav_scroll').show('slow');
        }
    }
});

//script voltar ao topo
$(function () {
  $.scrollUp();
});

$('.form-nav').on("submit", function(e) {    
    if ($("#search-nav").val() == "") {
        e.preventDefault();
    } 
});

$('.form-large').on("submit", function(e) {    
    if ($("#search-large").val() == "") {
        e.preventDefault();
    } 
});
