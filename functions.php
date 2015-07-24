<?php

function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __( 'primary menu in header' ),
      'footer' => __( 'secondary menu in footer' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


//readmore links
function new_excerpt_more( $more ) {
    return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

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
        'name' => ('Events List Widget'),
        'id' => 'events-list-widget',
        'description' => 'Widget for adding a list of events to the home page',
        'before_widget' => '<div class="eventsWidget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

  register_sidebar ( array (
        'name' => ('Calendar Widget'),
        'id' => 'calendar-widget',
        'description' => 'Widget for adding a mini calendar to the home page',
        'before_widget' => '<div class="calendarWidget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));

  register_sidebar ( array (
        'name' => ('Donate Widget'),
        'id' => 'donate-widget',
        'description' => 'Widget that controls the donate form',
        'before_widget' => '<div class="donateWidget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init','blank_widgets_init');


?>