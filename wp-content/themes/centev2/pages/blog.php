<?php
/**
 * Blog Page
 * 
 * Template for the Blog page
 * 
 * @package centev
 */

the_post();
$slides = [1,21,45,55,77,28,36,47,]
?>

<div id="blog-page" class="page-content">

	<main id="main">
		<?php 
			Utils::get_template( 'components/page-banner', array( 
				'title' => get_the_title()
			)); 
		?>
		<section class="posts pt-8">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="row">
							<?php 
								$paged = (get_query_var('paged')) ?? 1;
								$args = [
									'post_type'      => array('post'),
									'posts_per_page' => 3,
									'paged'          => $paged 
								];
		
								$query = new WP_Query( $args );
								
								if( $query->have_posts() ) : ?>
									<?php while ( $query->have_posts() ) : $query->the_post(); ?>
										<div class="col-lg-4">
											<?php 
												Utils::get_template( 'components/card-blog',array(
													'calendar'    => Utils::get_image_asset( 'icon-calendar.svg' ),
													'bg'          => get_the_post_thumbnail_url(),
													'title'       => get_the_title(),
													'description' => get_the_excerpt(),
													'link' => get_the_permalink()
												)); 
											?>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_query(); 
							?>
							<div class="col-12 my-5">
								<div class="_pagination">
									<?php post_pagination($paged, $query->max_num_pages); ?>
								</div>
							</div>
						</div>
					</div>

					<!-- Sidebar -->
					<div class="col-lg-3">
						<div class="_menu-categorias">
							<div class="top text-white mb-1 py-3 radius">
								<h3 class="text-white h4 m-0 pl-3"> Categorias </h3>
							</div>
							<ul class="list-unstyled mb-0">
								<?php 
									$categories = get_categories();
									foreach($categories as $cat): ?> 
									<li class="mb-1 radius">
										<a href="<?= home_url().'/category/'.$cat->slug ?>" class="undecorated-link text-white py-3 px-3 d-block"> <?= $cat->name; ?> </a>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</secti>
			
	</main>

</div>