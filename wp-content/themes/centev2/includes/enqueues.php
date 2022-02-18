<?php
/**
 * Enqueues
 * 
 * Enqueue scripts and styles
 * 
 * For more info: https://developer.wordpress.org/reference/functions/wp_enqueue_script/, https://developer.wordpress.org/reference/functions/wp_enqueue_style/
 * 
 * @package cit
 */

function my_enqueues() {

	// Replace jQuery for a newer version
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/libs/jquery-3.6.0.min.js', array(), null, true);
	// wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/libs/popper.min.js', array(), null, true);
	// wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/libs/bootstrap-4.0.0.min.js', array(), null, true);

	// Remove Gutemberg styles
	wp_dequeue_style( 'wp-block-library' );

	// Remove unnecessary scripts
	wp_deregister_script( 'wp-embed' );

	// Scripts and Styles
	// The file version is based on the its last modified time, making sure the browser get the new file only when it has changed
	// $template_name is defined at the template-manager.php file 
	global $template_name; 
	
	if ( isset( $template_name ) ) {
		// Theme scripts & styles
		$css_path = "/assets/css/dist/{$template_name}.dist.css";
		$js_path = "/assets/js/dist/{$template_name}.dist.js";
		wp_enqueue_style( 'my-styles', get_template_directory_uri() . $css_path, array(), filemtime( get_template_directory($css_path) ) );
		wp_enqueue_script( 'my-scripts', get_template_directory_uri() . $js_path . "#defer", array('jquery'), filemtime( get_template_directory($js_path) ), true );
	} else {
		echo 'Template not set';
	}
}
add_action( 'wp_enqueue_scripts', 'my_enqueues' );