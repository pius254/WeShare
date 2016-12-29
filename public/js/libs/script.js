$(function(){

  var topoffset = 43;

  var isTouch = 'ontouchstart' in document.documentElement;

  //fullscreen
    var wheight = $(window).height();//get height of the window
    $('.fullheight').css('height',wheight);

  //resize
  $(window).resize(function(){
    var wheight = $(window).height();
    $('.fullheight').css('height', wheight);
  });

  //WOW animations
  var wow = new WOW({
      //disabled for mobile
      mobile: false
  });
  wow.init();

});

//Smooth scroll
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });

  //hightlight navigation on scroll
  $('body').scrollspy({ target: '.navbar-collapse' });