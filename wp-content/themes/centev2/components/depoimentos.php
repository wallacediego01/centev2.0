<?php
/**
 * Depoimentos
 * 
 * Add the component description here...
 * 
 * @package quick
 */
?>

<div class="_depoimentos" data-style data-background-image="url(<?= $bg_image['url']; ?>)">
    <?php 
        Utils::get_template( 'components/carousel-depoimentos', array(
            'isVideo' => true,
            'isTitle' => true,
            'title'   => get_field('depo_title'),
            'class'   => "pt-10",
            'isBtn'   => false,
            'id'      => 'depoimentos',
            'desc'    => ""
        ) );
        
        $link = get_field('depo_link');
        Utils::get_template( 'components/carousel-depoimentos', array(
            'isVideo' => false,
            'isTitle' => false,
            'isBtn'   => true,
            'btn_url' => $link['url'],
            'btn_label' => $link['title'],
            'class'   => "pb-0 pb-lg-10 pt-5",
        ) );
    ?>
</div>