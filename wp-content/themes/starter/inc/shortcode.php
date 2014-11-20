<?php

// Remove empty p from shortcode
function shortcode_empty_paragraph_fix( $content ) {

  $array = array (
  '<p>[' => '[',
  ']</p>' => ']'
);

$content = strtr( $content, $array );

return $content;
}

add_filter( 'the_content', 'shortcode_empty_paragraph_fix' );

// ROW
function row_fn($atts, $content = null) {
  $content = do_shortcode($content);
  return '<div class="row">'. $content .'</div>';
}
add_shortcode( 'row', 'row_fn' );


// Large-11
function col_eleven_fn($atts, $content = null ){	$content = do_shortcode($content);return '<div class="columns large-11">'. $content .'</div>'; }
add_shortcode( 'col-11', 'col_eleven_fn' );

// Large-10
function col_ten_fn($atts, $content = null ){	$content = do_shortcode($content);return '<div class="columns large-10">'. $content .'</div>'; }
add_shortcode( 'col-10', 'col_ten_fn' );

// Large-9
function col_nine_fn($atts, $content = null ){	$content = do_shortcode($content);return '<div class="columns large-9">'. $content .'</div>'; }
add_shortcode( 'col-9', 'col_nine_fn' );

// Large-8
function col_height_fn($atts, $content = null ){	$content = do_shortcode($content);return '<div class="columns large-8">'. $content .'</div>'; }
add_shortcode( 'col-8', 'col_height_fn' );

// Large-7
function col_seven_fn($atts, $content = null ){	$content = do_shortcode($content);return '<div class="columns large-7">'. $content .'</div>'; }
add_shortcode( 'col-7', 'col_seven_fn' );

// Large-6
function col_six_fn($atts, $content = null ){	$content = do_shortcode($content);return '<div class="columns large-6">'. $content .'</div>'; }
add_shortcode( 'col-6', 'col_six_fn' );

// Large-5
function col_five_fn($atts, $content = null ){	$content = do_shortcode($content);return '<div class="columns large-5">'. $content .'</div>'; }
add_shortcode( 'col-5', 'col_five_fn' );

// Large-4
function col_four_fn($atts, $content = null ){	$content = do_shortcode($content);return '<div class="columns large-4">'. $content .'</div>'; }
add_shortcode( 'col-4', 'col_four_fn' );

// Large-3
function col_three_fn($atts, $content = null ){  $content = do_shortcode($content);return '<div class="columns large-3">'. $content .'</div>'; }
add_shortcode( 'col-3', 'col_three_fn' );

// Large-2
function col_two_fn($atts, $content = null ){  $content = do_shortcode($content);return '<div class="columns large-2">'. $content .'</div>'; }
add_shortcode( 'col-2', 'col_two_fn' );

// Large-1
function col_one_fn($atts, $content = null ){  $content = do_shortcode($content);return '<div class="columns large-1">'. $content .'</div>'; }
add_shortcode( 'col-1', 'col_one_fn' );

?>
