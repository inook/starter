$( document ).ready(function() {


  // Menu mobile
  // ----------------------
  $( ".nav-button, .hide-content, .nav-close" ).click(function() {

    if( $('body').hasClass('opened') ) {

      $('.site-container').removeClass('opened');
      $('nav').removeClass('opened');
      $('.hide-content').removeClass('opened');

      // Firefox hack
      setTimeout(function() {
        $('body').removeClass('opened');
      },50);

    } else {

      $('.site-container').addClass('opened');
      $('nav').addClass('opened');
      $('.hide-content').addClass('opened');

      // Firefox hack
      setTimeout(function() {
        $('body').addClass('opened');
      },50);
    }

  });
  // End Menu mobile

});
