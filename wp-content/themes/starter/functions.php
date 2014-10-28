<?php


// thumbnails
// -------------------------------------------------

add_theme_support( 'post-thumbnails' );

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

// Remove jquery from header
// -------------------------------------------------

if( !is_admin()){
wp_deregister_script('jquery');
wp_register_script('jquery', (""), false, '');
wp_enqueue_script('jquery');
}

// Remove admin bar
// -------------------------------------------------

add_filter('show_admin_bar', '__return_false');

// Options
// -------------------------------------------------

 if(is_admin()){
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


// WPML multilangue
// -------------------------------------------------

define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
define('ICL_DONT_LOAD_NAVIGATION_CSS', true);
define('ICL_DONT_LOAD_LANGUAGES_JS', true);

function wpml_languages(){
	$languages = icl_get_languages('skip_missing=1&orderby=code&order=desc');
  	if(1 < count($languages)){
    	foreach($languages as $l){
			if (!$l['active']) {
    			$langs[] = '<a href="'.$l['url'].'">'.$l['language_code'].'</a>';
			} else {
    			$langs[] = '<a href="'.$l['url'].'" class="menu_langue_active">'.$l['language_code'].'</a>';
			}
		}
		echo '<span id="language">';
		echo join(' - ', $langs);
		echo '</span>';
		echo '<span class="menu_top_divider"></span>';
  }
}

?>