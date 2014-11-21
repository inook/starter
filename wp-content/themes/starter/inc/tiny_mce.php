<?php

// Add STYLE
function my_theme_add_editor_styles() {
  add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );

// Add FROMATS button
function my_mce_buttons_2( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
add_filter('mce_buttons_2', 'my_mce_buttons_2');


// FORMATS button settings
function my_mce_before_init_insert_formats( $init_array ) {


  $style_formats = array(

    array(
      'title' => 'Couleur',
      'selector' => 'h1, h2, h3, h4, h5, h6, p',
      'classes' => 'color',
      'wrapper' => false,

    ),
    array(
      'title' => 'Blanc',
      'selector' => 'h1, h2, h3, h4, h5, h6, p',
      'classes' => 'blanc',
      'wrapper' => false,

    ),

    /*
    array(
      'title' => 'Titre 1',
      'block' => 'h1',
      'wrapper' => false,

    ),
    array(
      'title' => 'Sous titre',
      'block' => 'blockquote',
      'classes' => 'sub-title',
      'wrapper' => true,
    )
    */

  );


  $init_array['style_formats'] = json_encode( $style_formats );

  return $init_array;

}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

?>
