<?php
/**
 * Newsletter
 * 
 * Add the component description here...
 * 
 * @package quick
 */
?>

<section class="_newsletter">
    <div class='container'>
        <div class='row d-flex align-items-center'>
            <div class='col-lg-12' data-aos="fade-left">
                <div class="_form">
                    <h4 class="text-white text-center"> <?= $title; ?> </h4>
                    <p class="text-white text-center mb-3"><?= $description; ?> </p>
                    <?= do_shortcode('[contact-form-7 id="'.$form->ID.'" title="Newsletter"]'); ?>
                </div>
            </div>

        </div>
    </div>
</section>

