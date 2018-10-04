$(document).ready(function($) {

  var hamburger = document.querySelector(".hamburger");
  var mobileMenu = document.querySelector(".mobile-nav");
  
  hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("is-active");
    mobileMenu.classList.toggle("is-active");
    $('body').toggleClass("menu-active");
  });
});