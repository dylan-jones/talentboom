$(document).ready(function($) {
  // Home Page Large Boxes
  $('.large-buttons-top .box').hover(function() {
    $(this).toggleClass('active');
  });

  // Candidates Page Large Box Tabs

  $('.box-info .box').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('.box-info .box').removeClass('is-active');
    $('.big-box').removeClass('is-active');

    $(this).addClass('is-active');
    $("#"+tab_id).addClass('is-active');
  })
});