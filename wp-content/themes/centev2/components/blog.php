<?php
/**
 * Blog
 * 
 * Add the component description here...
 * 
 * @package centev
 */
$slides = [1,121,13,11,2,5,5]
?>
<section class="_blog py-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="titulo_blog pt-4 pb-6" data-aos="fade-right">
                    <div>
                        <?php Utils::get_template( 'components/title-text', [
                            'title' => "Blog",
                            'logo'  => Utils::get_image_asset( 'mini-logo.svg' ),
                        ] ); ?>
                    </div>
                </div>
            </div>

            <div class="col-12"data-aos="fade-left" >
                <div class="swiper-container carousel-blog">

                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->            
                        <?php 
                            $args = [
                                'post_type'      => array('post'),
                                'posts_per_page' => -1,
                                'p'              => $posts           
                            ];
    
                            $query = new WP_Query( $args );
                            
                            if( $query->have_posts() ) : ?>
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <div class="swiper-slide">
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
                    </div>
                </div>

                <div class="swiper-pagination-blog mt-5 text-center"></div>
            </div>
        </div>
    </div>
</section>