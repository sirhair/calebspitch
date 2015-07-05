<?php
/*-----------------------enqueue CSS fields-----------------------*/
function foundation_css(){
	wp_enqueue_style(
		'foundation',
		get_template_directory_uri() . '/css/foundation.css'
		);
}
add_action('wp_enqueue_scripts', 'foundation_css');

function normalize_css(){
	wp_enqueue_style(
		'normalize',
		get_template_directory_uri() . '/css/normalize.css'
		);
}
add_action('wp_enqueue_scripts', 'normalize_css');


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
}
add_action('widgets_init','blank_widgets_init');


?>