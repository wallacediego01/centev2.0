<?php
/**
 * Accordion
 * 
 * Template for collapse questions
 * 
 * @package tri
 */
$title = get_sub_field('faq_title');
$faq   = get_sub_field('lista');
?>

<div class="_accordion py-5 py-lg-10">
    <div class='container'>
        <div class='row justify-content-center'>
            <div class="col-12">
                <?php 
                    Utils::get_template( 'components/title-text', [
                        'title' => $title,
                        'logo' => Utils::get_image_asset( 'mini-logo.svg' ),
                        'titleClass' => "justify-content-center"
                    ] ); 
                ?>
            </div>
            <div class='col-lg-8 mt-6'>
                <div class="tabs">
                    <?php
                        foreach( $faq as $index => $field ) : ?>
                            <div class="tab mb-2">
                                <input type="checkbox" id="question-<?= $index; ?>" class="inpt-check" name="perguntas">
                                <label class="tab-label mb-0" for="question-<?= $index; ?>"> <?= $field['faq_title']; ?> </label>
                                <div class="tab-content">
                                    <p>
                                        <?= $field['faq_res']; ?> 
                                    </p>
                                </div>
                        </div>
                    <?php    
                        endforeach; 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>