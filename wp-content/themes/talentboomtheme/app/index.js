import 'jquery';

import './scss/style.scss';

import './js/header-scroll.js';
import './js/nav.js';
import './js/slider.js';
import './js/box.js';
import './js/tabs.js';

import 'bxslider/dist/jquery.bxslider.min.js';

/* GENERAL SCRIPTS*/

$(document).ready(function($) {
  $('.call-to-action').hover(function() {
    $('.call-to-action').addClass('is-active');
  }, function() {
    $('.call-to-action').removeClass('is-active');
  });
});
