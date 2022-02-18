<?php
/**
 * Book Card
 * 
 * Add the component description here...
 * 
 * @package tri
 */
?>
<?php 
    if ( $query->have_posts() ) : ?>
        
        <?php
        while ( $query->have_posts() ) :
            $query->the_post(); ?>
            <div class="col-lg-4">
                <?php 
                    Utils::get_template( 'components/card-empresas', array(
                        'img' => get_field('emp_logo'), 
                        'link'=> get_field('emp_link'),
                        
                    )); 
                ?>
            </div>
        <?php
        endwhile;
    else: ?>
        <div class="col-12">
            <div class="content text-center not-found mt-6">
                <p> Infelizmente não temos resultado para sua busca! <br> Tente novamente. </p>
            </div>
        </div>
    <?php
    endif;
?>