<?php 

add_action ('wp_enqueue_scripts', 'style_theme');

function style_theme() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
};

add_action ('wp_footer', 'scipts_theme');

function scipts_theme() {
  wp_enqueue_script( 'script',  get_template_directory_uri() . '/assets/js/main.js' );
};

add_action ('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu () {
  register_nav_menu('main_menu', 'top menu');
};

add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
};

add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
function add_my_class_to_nav_menu( $classes, $item ) {
	if($item->title == "Оставить отзыв" ){
		$classes[] = 'menu-item--styled';
  };

	return $classes;
};

add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('title-tag');

?>