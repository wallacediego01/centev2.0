<?php
/**
 * Texto E Imagem A Direita
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

<div class="_texto-e-imagem-a-direita py-5 py-lg-10">
    <div class='container'>
        <div class='row align-items-center'>
            <div class='col-lg-6'>
                <?php if(isset($title)): ?>
                    <div class="area-titulor">
                        <?php Utils::get_template( 'components/title-text', array(
                            'title' => $title,
                            'logo' => Utils::get_image_asset( 'mini-logo.svg' ),
                            'titleClass' => isset($titleClass) ? $titleClass : false
                        ) ); ?>
                    </div>
                <?php endif; ?>
                <div class="texto pt-4 pr-2">
                    <p>
                        <?= $text?>
                    </p>

                    <?php if( $link != ""): ?>
                        <a href="<?= $link['url']; ?>" class="btn btn-card rounded px-6 py-2">
                            <?= $link['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="area-image">
                    <img 
                        data-src='<?= $img['url']; ?>'
                        alt='<?= $img['alt']; ?>'
                        width='<?= $img['width']; ?>'
                        height='<?= $img['height']; ?>' class='lozad'>
                </div>
                
            </div>
        </div>
    </div>
</div>