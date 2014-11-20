<?php


// Deregister Widget
// -------------------------------------------------

add_action( 'widgets_init', 'my_unregister_widgets' );

function my_unregister_widgets() {
	unregister_widget( 'WP_Widget_Pages' );
	unregister_widget( 'WP_Widget_Calendar' );
  unregister_widget( 'WP_Widget_Recent_Comments' );
  unregister_widget( 'WP_Widget_RSS' );
  unregister_widget( 'WP_Widget_Meta' );
	unregister_widget( 'WP_Widget_Archives' );
	unregister_widget( 'WP_Widget_Categories' );
	unregister_widget( 'WP_Widget_Tag_Cloud' );
}

// Footer area 1
// -------------------------------------------------

$args = array(

  'name'          => 'Footer area 1',
	'id'            => 'footer-1',
	'description'   => '',
  'class'         => '',
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h1>',
	'after_title'   => '</h1>'

);

register_sidebar( $args );

// Footer area 2
// -------------------------------------------------

$args = array(

  'name'          => 'Footer area 2',
  'id'            => 'footer-2',
  'description'   => '',
  'class'         => '',
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
  'before_title'  => '<h1>',
  'after_title'   => '</h1>'

);

register_sidebar( $args );


// Footer area 3
// -------------------------------------------------

$args = array(

  'name'          => 'Footer area 3',
  'id'            => 'footer-3',
  'description'   => '',
  'class'         => '',
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
  'before_title'  => '<h1>',
  'after_title'   => '</h1>'

);

register_sidebar( $args );

// Footer area 4
// -------------------------------------------------

$args = array(

  'name'          => 'Footer area 4',
  'id'            => 'footer-4',
  'description'   => '',
  'class'         => '',
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
  'before_title'  => '<h1>',
  'after_title'   => '</h1>'

);

register_sidebar( $args );


?>
