$(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      console.log($(window).scrollTop())
    var $beforeBanner = 569;
    var $afterBanner = 570;
    if ($(window).scrollTop() > $beforeBanner) {
      $('#nav_bar').addClass('navbar-fixed');
    }
    if ($(window).scrollTop() < $afterBanner) {
      $('#nav_bar').removeClass('navbar-fixed');
    }
  });
});
