<?php
/**
 * Header template
 * 
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * 
 * @package cit
 */
$filter = new Filter;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Color for the Android Chrome title bar -->
	<meta name="theme-color" content="#fff">
	<!-- Fonts -->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php $fields = get_field('option_header','option') ?>
	<link rel="icon" href="<?= $fields['favicon']; ?>" />
	
	<?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	
</head>

<body <?php body_class(); ?>>

<!-- HEADER -->
<?php Utils::get_template( 'components/header' ); ?>

<div id="page">
	<div id="content">
	