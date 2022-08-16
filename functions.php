<?php

// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'fonts-googleapis', get_template_directory_uri() . 'https://fonts.googleapis.com' );
	wp_enqueue_style( 'fonts-gstatic', get_template_directory_uri() . 'https://fonts.gstatic.com' );
	wp_enqueue_style( 'fonts', get_template_directory_uri() . 'https://fonts.googleapis.com/css2?family=DM+Sans&family=DM+Serif+Text&display=swap' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css' );


    wp_deregister_script('jquery');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.min.js', true );
});

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );

?>
