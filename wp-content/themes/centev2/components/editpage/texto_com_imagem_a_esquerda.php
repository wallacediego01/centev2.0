<?php
/**
 * Texto E Imagem A Esquerda
 * 
 * Add the component description here...
 * 
 * @package centev
 */
$title = get_sub_field("titulo");
$text  = get_sub_field("texto");
$link  = get_sub_field("link") ?? "";
$img   = get_sub_field("imagem");
?>

<div class="_texto-e-imagem-a-esquerda py-5 py-lg-10">
    <div class='container'> 
        <div class='row align-items-center'>
            <div class="col-lg-6">
                <div class="area-image">
                    <img 
                        data-src='<?= $img['url']; ?>'
                        alt='<?= $img['alt']; ?>'
                        width='<?= $img['width']; ?>'
                        height='<?= $img['height']; ?>' class='lozad'>
                </div>
            </div>
            <div class='col-lg-6'>
                <?php if(isset($title)): ?>
                    <div class="area-titulo text-center">
                        <?php Utils::get_template( 'components/title-text', array(
                            'title' => $title,
                            'logo' => Utils::get_image_asset( 'mini-logo.svg' ),
                        ) ); ?>
                    </div>
                <?php endif; ?>
                <div class="texto pt-4 pr-2">
                    <p class="mb-0">
                        <?= $text?>
                    </p>

                    <?php if($link != ""): ?>
                        <a href="<?= $link['url']; ?>" class="btn btn-card rounded">
                            <?= $link['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>            
        </div>
    </div>
</div>