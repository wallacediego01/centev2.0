<?php
/**
 * Pagina Inicial Page
 * 
 * Template for the Pagina Inicial page
 * 
 * @package cit
 */

the_post();
?>

<div id="homePage" class="page-home">
	<main id="main">
		<?php Utils::get_template( 'components/vitrine', array(
			'slides' => get_field('slides')
		) ); ?>

	</main>
</div>