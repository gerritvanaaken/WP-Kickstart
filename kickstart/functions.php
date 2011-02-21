<?php
function kickstart_widgets_init() {
  register_sidebar(array(
    'name' => 'Widgets',
    'id' => 'widgets',
    'before_widget' => '<div class="box">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>'
  ));  
}
add_action( 'init', 'kickstart_widgets_init' );
add_theme_support('automatic-feed-links');
?>