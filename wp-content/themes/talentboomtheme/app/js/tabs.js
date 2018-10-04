$(document).ready(function(){
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('is-active');
    $('.tab-content').removeClass('is-active');

    $('.select-info').addClass('hide-it');

    $(this).addClass('is-active');
    $("#"+tab_id).addClass('is-active');
  })
})