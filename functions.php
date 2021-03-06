<?php 
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'beauty_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function beauty_scripts() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css' );
}

add_theme_support( 'custom-logo', [
	'height'      => 80,
	'width'       => 80,
	'unlink-homepage-logo' => false, // WP 5.5
] );