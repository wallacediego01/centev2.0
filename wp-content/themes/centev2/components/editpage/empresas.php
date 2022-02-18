<?php
/**
 * Eco
 * 
 * Add the component description here...
 * 
 * @package centev
 */
$title = get_sub_field('sect_title');
$posts = get_sub_field('posts');
?>

<div class="_caroussel-ecossistema py-10 mt-10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="logo_branca text-center pb-2">
                    <img src='<?=Utils::get_image_asset( 'mini-logo-branca.svg' ); ; ?>' alt='Ícone' width='78' height='55' class='lozad'>
                </div>
                <div class="area-title pb-2">
                    <h2 class="text-center text-white">
                        <?= $title; ?>
                    </h2>
                </div>
            </div>
            
            <div class="col-12">
                <div class="swiper-container carousel-eco">

                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->            
                        <?php 
                            $args = [
                                'post_type'      => array('empresa'),
                                'post__in'       => $posts           
                            ];
    
                            $query = new WP_Query( $args );
                            
                            if( $query->have_posts() ) : ?>
                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                    <div class="swiper-slide">
                                        <?php 
                                            Utils::get_template( 'components/card-empresas', array(
                                                'img'  => get_field('emp_logo'),
                                                'link' => get_field('emp_link')
                                            )); 
                                        ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <?php wp_reset_query(); 
                        ?>                            
                    </div>
                </div>

                <div class="swiper-pagination-eco mt-5 text-center"></div>
            </div>                                   
        </div>
    </div>
</div>