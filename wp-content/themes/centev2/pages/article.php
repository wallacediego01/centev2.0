<?php
/**
 * Matricula Page
 * 
 * Template for the Matricula page
 * 
 * @package quick
 */

the_post();
?>

<div id="article-page" class="page-content">

	<main id="main">
        <?php
             Utils::get_template( 'components/page-banner', array( 
			    'title' => "Blog"
            )); 
        ?>

        <section class="post pt-10 pb-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="post__feature-image">
							<?php 
                                echo get_the_post_thumbnail();
                            ?>
						</div>

						<div class="_the-content py-6">
							<h2> <?= get_the_title(); ?> </h2>
							
							<?php the_content(); ?>
							
						</div>
					</div>
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
		</section>

        <?php 

            $categories = get_the_category();
            $category_id = $categories[0]->cat_ID;

			$args = array(
				'post_type'   	 => array( 'post' ),
				'post_status' 	 => array( 'publish' ),
				'cat'    	     => $category_id,
                'post__not_in'   => array( get_the_ID() ),
				'order'       	 => 'DESC',
				'posts_per_page' => 3,
                'orderby'        => 'rand'
			);

    		// The Query
	    	$query = new WP_Query( $args );

            Utils::get_template( 'components/posts-relacionados', [
                'title' => __("Posts Relacionados"),
                'query' => $query,
                'sectionClass' => "bg-white pt-2 mb-8"
            ] ); ?>

	</main>

</div>