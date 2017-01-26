$(window).scroll(function() {
	if ($( document ).width() > 768) {
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

//imprimir 
/*var popup;  
function closePrint () {     
    if ( popup ) {
        popup.close();     
    } 
}  
popup = window.open( $('#img_imprimir').attr('src') ); 
popup.onbeforeunload = closePrint; 
popup.onafterprint = closePrint; 
popup.focus(); // Required for IE 
popup.print();*/