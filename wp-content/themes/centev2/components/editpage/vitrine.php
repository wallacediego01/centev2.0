<?php
/**
 * Vitrine
 * 
 * Add the component description here...
 * 
 * @package faveni
 */
 
 $slides = get_sub_field('slides'); 
?>

<section id="vitrine" class="_vitrine position-relative">
    
    <div class="swiper-container carousel-vitrine">

        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->            
            <?php foreach ($slides as $key => $slide) : ?>
                <div class="swiper-slide">
                    <div class="slide-bg">
                        <?php if( $slide['is_video']) : ?>
                            <video autoplay muted loop>
                                <source src="<?= $slide['slide_video']['url'] ?>" type="video/mp4">
                                Your browser does not support HTML video.
                            </video>                            
                        <?php else: ?>
                            <img 
                                data-src='<?= $slide['slide_image']['url']; ?>'
                                alt='<?= $slide['slide_image']['alt']; ?>'
                                width='<?= $slide['slide_image']['width']; ?>'
                                height='<?= $slide['slide_image']['height']; ?>' class='lozad'>
                        <?php endif; ?>
                    </div>

                    <div class="slide-content w-100">
                        <div class='container'>
                            <div class='row align-items-center'>
                                <div class='col-lg-8'>
                                    <h2 class=" text-white">
                                        <?= $slide['slide_title']; ?>
                                    </h2>
                                    <div class="desc text-white">
                                        <p>
                                            <?= $slide['slide_description']; ?>
                                        </p>
                                        <?php if($slide['link']): ?>
                                            <a 
                                                href="<?= $slide['link']['url']; ?>" 
                                                target="<?= $slide['link']['target'] ? '_blank' : ''; ?>"
                                                class="btn btn-outline-white rounded py-3 px-5 transition">
                                                <?= $slide['link']['title']; ?>
                                            </a>    
                                        <?php endif; ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
            endforeach; ?>
        </div>
        
    </div>

    <div class="actions">
        <div class='container'>
            <div class='row'>
                <div class='col-12 mb-4'>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="col-12">
                    <div class="ico-mouse mt-6 mb-6 text-left">
                        <a href="#lps">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="58" viewBox="0 0 32 58">
                                <g id="Scroll" transform="translate(-940 -878)">
                                <g id="Retângulo_35" data-name="Retângulo 35" transform="translate(940 878)" fill="none" stroke="#fff" stroke-width="2">
                                <rect width="32" height="58" rx="16" stroke="none"/>
                                <rect x="1" y="1" width="30" height="56" rx="15" fill="none"/>
                                </g>
                                <circle id="Elipse_1" data-name="Elipse 1" cx="4.051" cy="4.051" r="4.051" transform="translate(952.559 912.03)" fill="#fff"/>
                                </g>
                            </svg>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</section>