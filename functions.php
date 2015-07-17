<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'primary' ),
      'extra-menu' => __( 'footer' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



/*-----------------------enable widgets-----------------------*/

function blank_widgets_init(){
	register_sidebar(array(
		'name' => ('Main Sidebar'),
		'id' =>'main-sidebar',
		'description' => 'Widget for our sidebar on pages',
		'before_widget' => '<div class="widget-sidbar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
		)
	);

	register_sidebar ( array (
        'name' => ('Events Widget'),
        'id' => 'events-widget',
        'description' => 'Widget for adding events to the home page',
        'before_widget' => '<div class="eventsWidget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init','blank_widgets_init');


?>