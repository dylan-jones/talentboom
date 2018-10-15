$(document).ready(function() {

  //var tabsItem = $('.pin-locations div');

  $('.pin-locations .pin').hover(function(){
    $(this).addClass('is-active');
  }, function() {
    $(".pin").removeClass('is-active');
  });

});