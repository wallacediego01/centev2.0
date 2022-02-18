<?php
/**
 * Functions
 * 
 * Setup functions and theme definitions
 * 
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package cit
 */

 // General class the project
$classes = [
	'Filter',
	'Utils'
];

foreach ($classes as $key => $class) {
	require get_template_directory() . '/includes/classes/'.$class.'.class.php';
}

// Class utils and static helper functions


// Add ACF fields
require get_template_directory() . '/includes/acf-fields.php';

// Custom post types and taxonomies
require get_template_directory() . '/includes/post-types.php';

// Theme base setup
require get_template_directory() . '/includes/theme-setup.php';

// Custom post types and taxonomies
require get_template_directory() . '/includes/template-manager.php';

// Enqueue styles and scripts
require get_template_directory() . '/includes/enqueues.php';

// Functions which enhance the theme by hooking into WordPress
require get_template_directory() . '/includes/template-functions.php';

// Enqueue styles for the admin panel
require get_template_directory() . '/includes/admin-customization.php';