<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Calebs Pitch Wordpress/Genesis theme' );

define( 'CHILD_THEME_URL', 'https://github.com/sirhair/calebspitch' );
define( 'CHILD_THEME_VERSION', '0.1' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'add_fonts' );
function add_fonts() {

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );
