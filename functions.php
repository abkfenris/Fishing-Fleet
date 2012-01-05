<?php

// Path constants
define('TEMPLATE_DIR', get_bloginfo('template_directory'));
define('STYLESHEET_DIR', get_bloginfo('stylesheet_directory'));
define('STYLEURL', get_bloginfo('stylesheet_url'));

/* Adding Support for Post Thumbnails (Featured Image) */

if (function_exists( 'add_theme_support' )) {
	add_theme_support ('post-thumbnails');
	if (function_exists( 'add_image_size' )) {
		add_image_size ('front-thumb', 840, 300, true);
		add_image_size ('front-image', 840, 9999);
	}
}


/* Stripping the embedded height & width from Featured Images from http://wordpress.org/support/topic/how-do-you-strip-or-filter-attributes-from-a-posts-tags?replies=1 */

function clean_wp_width_height($string){
	return preg_replace('/\<(.*?)(width="(.*?)")(.*?)(height="(.*?)")(.*?)\>/i', '<$1$4$7>',$string);
}

/* Stripping the embedded height & width from Featured Images from http://wordpress.stackexchange.com/questions/5568/filter-to-remove-image-dimension-attributes */

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

/* Adding a SINGLE menu from http://codex.wordpress.org/Function_Reference/register_nav_menu */


if (function_exists( 'register_nav_menu' )) {
	register_nav_menu( 'primary', 'Primary Menu');
}

/* Adding support for post formats */

if (function_exists( 'add_theme_support' )) {
	add_theme_support( 'post-formats', array( 'aside' , 'video', 'image' , 'quote' ) );
}


/* Adding super fish menu from http://kav.in/wordpress-superfish-dropdown-menu */

function add_our_scripts() {
    if (!is_admin()) {
		// Path to scripts directory
		$scriptdir = get_bloginfo('template_url')."/js/";
		
		// Remove the wordpress inbuilt jQuery
		// wp_deregister_script('jquery');
		
		// Lets use the one from the Google AJAX API instead.
		// wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', false, '1.4.2');
		// Register the Superfish javascript file
		// wp_register_script( 'hoverIntent', $scriptdir.'sf/hoverIntent.js', false, '1.4.8');
		//wp_register_script( 'superfish', $scriptdir.'sf/superfish.js', false, '1.4.8');
		//wp_register_style( 'superfish-css', $scriptdir.'sf/superfish.css', false, '1.4.8');

		
		// Load the scripts and style
		// wp_enqueue_script('jquery');
		//wp_enqueue_script('hoverIntent');
		//wp_enqueue_scripts('superfish');
		// wp_enqueue_style('superfish-css');
		//wp_enqueue_script('hoverintent', TEMPLATE_DIR . '/js/sf/hoverIntent.js', array('jquery') );
		wp_enqueue_script('superfish', TEMPLATE_DIR . '/js/sf/superfish.js', array('jquery', 'hoverIntent') );
		wp_enqueue_script('supersubs', TEMPLATE_DIR . '/js/sf/supersubs.js', array('superfish'));
		wp_enqueue_script('autofocusjs', TEMPLATE_DIR . '/js/sf/js.autofocus.js', array('jquery'));
		
	} //end the !is_admin function
} // end add_our_scripts function

//Add our function to the wp_head. You can also use wp_print_scripts.
//add_action( 'wp_head', 'add_our_scripts',0);
add_action('wp_print_scripts', 'add_our_scripts' );

/**
 * Custom settings initiated at activation.
 */
if ( is_admin() && isset($_GET['activated'] ) && $pagenow == 'themes.php' ) {
	// Large sizes
	update_option('large_size_h', '9999');
	update_option('large_size_w', '840');
	update_option('large_crop', '0');

	// Embed sizes
	update_option('embed_size_h', '9999');
	update_option('embed_size_w', '840');

}

/* Adding the nofotomoto to the img classes by default from http://flav36rs.com/2010/12/05/wordpress-append-image-dimensions-as-class-names/ */

function add_image_class($class){
	$class .= ' nofotomoto';
	return $class;
}
add_filter('get_image_tag_class','add_image_class');

?>