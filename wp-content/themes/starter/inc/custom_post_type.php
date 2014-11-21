<?php

function projets_post() {
  $args = array(
    'labels' => array(
      'name' => __( 'Projets' ),
      'singular_name' => __( 'Projet' )
    ),
    'public'        => true,
    'show_in_menu'  => true,
    'menu_position' => 15,
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true
  );
  register_post_type( 'Projet', $args );
}


add_action( 'init', 'projets_post' );

?>
