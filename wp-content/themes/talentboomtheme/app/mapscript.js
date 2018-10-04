$(document).ready(function() {

  //var tabsItem = $('.pin-locations div');

  $('.pin-locations a').hover(function(){
    var loc_id = $(this).attr('data-loc');

    $(".pin-"+loc_id).addClass('is-active');
  }, function() {
    $(".pin").removeClass('is-active');
  });

});