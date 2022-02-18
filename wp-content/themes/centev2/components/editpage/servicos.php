<?php
/**
 * Carousel Posts
 * 
 * Add the component description here...
 * 
 * @package centev
 */
    $title = get_sub_field('section_title');
    $description = get_sub_field('section_desc');
    $link = get_sub_field('section_link') ?? false;
    $posts = get_sub_field('section_posts');
?>

<section class="_carousel-posts bg-cinza py-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="titulo_servs pt-4">
                    <?php Utils::get_template( 'components/title-text', [
                        'title' => $title,
                        'logo' => Utils::get_image_asset( 'mini-logo.svg' ),
                        'class' => "text-center"
                        ] ); ?>
                </div>
                <div class="texto text-left pt-4 pb-4">
                    <p>
                         <?= $description; ?>
                    </p>
                </div>
                <?php if($link): ?>
                    <a 
                        href="<?= $link['url']; ?>" 
                        target="<?= $link['target'] ?? ''; ?>"
                        class="undecorated-link text-center text-white btn btn-card rounded px-5 py-3">
                        <?= $link['title']; ?>
                    </a>    
                <?php endif; ?>
                
            </div> 
           
            <div class="col-lg-8">
                <div class="swiper-container carousel-cr">

                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <?php 
                            $args = [
                                'post_type'      => array('servico', 'curso'),
                                'post__in'       => $posts           
                            ];
    
                            $query = new WP_Query( $args );
                        ?>
                        <?php if( $query->have_posts() ) : ?>
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                <div class="swiper-slide">
                                    <?php Utils::get_template( 'components/card-serv', array(
                                        'img'=> get_field('serv_icon') ?? get_field('curso_icon'),
                                        'sub_title'=> get_the_title(),
                                        'sub_text' => get_field('about_serv') ?? get_field('about_curso'),
                                        'link' => get_the_permalink()
                                    ) ); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                       
                    </div>
                </div>
                <div class="swiper-pagination-cr swiper-pagination pagination-primary mt-5 text-right"></div>
            </div>
        </div>
    </div>
</section>