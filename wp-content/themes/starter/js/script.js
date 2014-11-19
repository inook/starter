$( document ).ready(function() {




  // Menu mobile
  // ----------------------
  $( ".nav-mobile-bt" ).click(function() {

    if( $('.nav-mobile').hasClass('opened') ) {
      $('body, .site-container, .nav-mobile').removeClass('opened');
    } else {
      $('body, .site-container, .nav-mobile').addClass('opened');
    }

  });
  // End Menu mobile

});
