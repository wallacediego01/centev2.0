<?php
/**
 * Search Page
 * 
 * Template for the Search page
 * 
 * @package tri
 */
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type'   	 => array( 'post', 'curso', 'servico', 'empresa', 'evento' ),
        'post_status' 	 => array( 'publish' ),
        's'              => get_search_query(),
        'order'       	 => 'DESC',
        'posts_per_page' => 10,
		'paged'          => $paged 
    );

    // The Query
    $query = new WP_Query( $args );


?>

<div id="search-page" class="page-content">

	<main id="main">
		<!-- Page Header -->
        <?php Utils::get_template( 'components/page-banner', array( 
			'title' => get_search_query()
						
		) ); ?>

		<!-- Posts listing -->
		<div class="post-list">
			<div class='container'>
				<div class='row justify-content-center'>
					<?php 
						if ( $query->have_posts() ) :
							while ( $query->have_posts() ) : $query->the_post(); 
								$post_type = get_post_type();
								
								switch ($post_type) {
									case 'servico':
										Utils::get_template( 'components/search-front', array(
											'title'=> get_the_title(),
											'link' => get_the_permalink(),
											'desc' => get_field('serv_more_infos'),
										) );
									break;
									case 'curso':
										Utils::get_template( 'components/search-front', array(
											'title'=> get_the_title(),
											'link' => get_the_permalink(),
											'desc' => get_field('curso_more_infos'),
										) );
									break;
									case 'evento':
										Utils::get_template( 'components/search-front', array(
											'title'=> get_the_title(),
											'link' => get_the_permalink(),
											'desc' => get_field('event_more_infos'),
										) );
									break;
									case 'empresa':
										Utils::get_template( 'components/search-front', array(
											'title'=> get_the_title(),
											'link' => get_the_permalink(),
											'desc' => get_field('emp_link'),
										) );
									break;
									case 'post':
										Utils::get_template( 'components/search-front', array(
											'title'=> get_the_title(),
											'link' => get_the_permalink(),
											'desc' => get_the_excerpt(),
										) );
									break;
								}
							?>
							
							<?php
							endwhile;

						else: ?> 
							<div class="col-12 text-center py-5">
								<h2> Nenhum resultado foi encontrado para sua busca. <br> Por favor, tente novamente! </h2>
							</div>
						<?php
						endif;
					?>
					<?php wp_reset_query(); ?>

				<div class="col-12 my-5">
					<div class="_pagination">
						<?php post_pagination($paged, $query->max_num_pages); ?>
					</div>
				</div>

				</div>
			</div>
		</div>
	</main>

</div>