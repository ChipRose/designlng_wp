<?php 

add_action ('wp_enqueue_scripts', 'style_theme');
add_action ('wp_footer', 'scipts_theme');

function style_theme() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
};

function scipts_theme() {
  wp_enqueue_script( 'script',  get_template_directory_uri() . '/assets/js/main.js' );
};

?>