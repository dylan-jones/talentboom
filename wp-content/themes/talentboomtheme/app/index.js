import 'jquery';

import './scss/style.scss';

import './js/header-scroll.js';
import './js/nav.js';
import './js/slider.js';
import './js/box.js';

import 'bxslider/dist/jquery.bxslider.min.js';

/* GENERAL SCRIPTS*/

$(document).ready(function($) {
  $('.call-to-action').hover(function() {
    $('.call-to-action').addClass('is-active');
  }, function() {
    $('.call-to-action').removeClass('is-active');
  });
});


/* IMAGES */

import aboutHeader from './img/about-header-image.png';
import homeHeader from './img/home-header-image.png';
import homeAbout from './img/home-about-image.png';
import ourtaletHeader from './img/ourtalent-header-image.png';
import candidatesHeader from './img/candidates-header-image.png';
import map from './img/Map_02@2x.png';

import iconFacbook from './img/icon-facebook.svg';
import iconTwitter from './img/icon-twitter.svg';
import iconLinkedin from './img/icon-linkedin.svg';
import iconDuration from './img/duration.svg';
import iconLocation from './img/location.svg';
import iconSearch from './img/search.svg';









