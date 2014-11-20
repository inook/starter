<?php

// SUIVEZ-NOUS Facebook

function social_icon_fn($atts, $content = null) {

  $content .= '<span class="widget-social">';
  $content .= '<a href="'. $atts['url'] .'" title="' . $atts['type'] . '">';

  switch ( $atts['type'] ) :

      case 'twitter' :
         $content .= 'b';
          break;

      case 'facebook' :
          $content .= 'a';
          break;

      case 'google' :
        $content .= 'c';
        break;

      case 'pinterest' :
        $content .= 'd';
        break;

      case 'linkedin' :
        $content .= 'j';
        break;

      case 'vimeo' :
        $content .= 's';
        break;

      case 'dailymotion' :
        $content .= 't';
        break;

      case 'vine' :
        $content .= 'u';
        break;

      case 'flickr' :
        $content .= 'v';
        break;

      case 'rss' :
        $content .= ',';
        break;

  endswitch;

  $content .= '</a>';
  $content .= '</span>';

  return $content;
}

add_shortcode( 'social', 'social_icon_fn' );



?>
