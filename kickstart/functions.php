<?php

// Register Widget area(s)
function kickstart_widgets_init() {
	register_sidebar(array(
		'name' => __('Widgets', 'kickstart'),
		'id' => 'widgets',
		'before_widget' => '<div id="%1$s" class="box %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));  
}
add_action( 'init', 'kickstart_widgets_init' );


// Register Menu location(s)
register_nav_menus( array(
	'main_menu' => __( 'Main Menu', 'kickstart' )
	// ,'footer_menu' => __( 'Footer Menu', 'kickstart' )
) );



function kickstart_scripts_init() {
	// Make sure html5shiv is only included once
	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv-3.7.2.js', array(), '3.7.2' );
	
	// Register jQuery as a dependency of domscript.js
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), '1.11.2' );
	// wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-2.1.3.min.js', array(), '2.1.3' );
	wp_enqueue_script( 'domscript', get_template_directory_uri() . '/js/domscript.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'kickstart_scripts_init' );


function kickstart_styles_init() {
	// Add main stylesheets
	wp_enqueue_style( 'kickstart-style-reset', get_template_directory_uri() . '/css/mini-reset.css' );
	wp_enqueue_style( 'kickstart-style', get_stylesheet_uri() );
	wp_enqueue_style( 'kickstart-style-print', get_template_directory_uri() . '/css/print.css', array(), false, 'print' );
}
add_action( 'wp_enqueue_scripts', 'kickstart_styles_init' );


// Auto-discovery feed in header
add_theme_support('automatic-feed-links');

// Article image support. http://codex.wordpress.org/Post_Thumbnails
add_theme_support('post-thumbnails');
// Add custom image sizes http://codex.wordpress.org/Function_Reference/add_image_size
add_image_size( 'kickstartImageSize', 256, 256, true ); // 256 * 256 pixels, cropped

// Remove generator-tag for security reasons
remove_action('wp_head', 'wp_generator');

// Add editor style
add_editor_style();


?>
