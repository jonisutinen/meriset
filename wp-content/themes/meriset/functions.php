<?php

function load_stylesheets() {
    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

add_theme_support('menus');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	    // file does not exist... return an error.
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        // file exists... require it.
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
	'main-menu' => __( 'Päävalikko', 'THEMENAME' ),
) );



?>