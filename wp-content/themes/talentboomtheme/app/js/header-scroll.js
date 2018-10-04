$(window).on( "scroll", function() {
  if ( $(window).scrollTop() >= 30 ) {
    $( '.header' ).addClass("scrolling");
  }else{
    $( '.header' ).removeClass("scrolling");
  }
});