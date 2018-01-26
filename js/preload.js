$(window).on('load', function() { // makes sure the whole site is loaded
  $('#preload-image').fadeOut(); // will first fade out the loading animation
  $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
  $('body').css({'overflow':'visible'});
})
