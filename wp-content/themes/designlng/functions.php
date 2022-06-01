<?php 

add_action ('wp_enqueue_scripts', 'style_theme');
add_action ('wp_footer', 'scipts_theme');
add_action ('after_setup_theme', 'theme_register_nav_menu');

function style_theme() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
};

function scipts_theme() {
  wp_enqueue_script( 'script',  get_template_directory_uri() . '/assets/js/main.js' );
};

function theme_register_nav_menu () {
  register_nav_menu('main_menu', 'top menu');
};

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
};

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('title-tag');

?>