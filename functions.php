<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts',
function () {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');

	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
} );
?>