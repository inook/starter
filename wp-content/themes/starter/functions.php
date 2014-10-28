<?php


// thumbnails
// -------------------------------------------------

add_theme_support( 'post-thumbnails' );

/*
add_image_size( 'thumbnail-index-large', 600, 287, true );
add_image_size( 'thumbnail-index-square', 600, 600, true );
add_image_size( 'thumbnail-evenements', 500, 710, true );
add_image_size( 'thumbnail-gallery', 800, 450, true );
add_image_size( 'thumbnail-fullscreen', 1200 );
*/

// remove junk from head
// -------------------------------------------------

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


// Options
// -------------------------------------------------

 if( is_admin() ){
 	include 'inc/options_page.php';
 }

// Remove comments page
// -------------------------------------------------

if(is_admin()){
add_action('admin_menu', 'remove_menus');
}

function remove_menus () {
global $menu;
	$restricted = array(__('Comments'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}

// Menu(s)
// -------------------------------------------------

function register_my_menus() {
  register_nav_menus(
    array(
      'menu_principal' => __( 'Menu principal' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Breadcrumb
// -------------------------------------------------

function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';

        // Lien page d'accueil
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li><li class="separator"> / </li>';

        // Categorie ou page article
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> / </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> / </li><li>';
                the_title();
                echo '</li>';
            }
        }
        // Page et sous page
        elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
                }
                echo $output;
                echo '<li><strong title="'.$title.'"> '.$title.'</strong></li>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
}

?>
