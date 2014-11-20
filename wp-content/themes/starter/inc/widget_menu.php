<?php


// Menu Area
// -------------------------------------------------

$args = array(

  'name'          => 'Menu area',
	'id'            => 'menu-1',
	'description'   => '',
  'class'         => '',
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h1>',
	'after_title'   => '</h1>'

);

register_sidebar( $args );

?>
