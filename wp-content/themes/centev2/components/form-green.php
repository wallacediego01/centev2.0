<?php
/**
 * Form Green
 * 
 * Add the component description here...
 * 
 * @package centev
 */
?>

<div class="_form-green mt-8">
    <div class="box-form w-100 h-100 pt-6 px-3 ">
        <?php if(isset($logo)): ?>
            <div class="area-logo text-white text-center pb-2">
                <img src='<?= $logo; ?>' alt='<?= ""; ?>' width='<?= ""; ?>' height='<?= ""; ?>' class='lozad'>
            </div>
        <?php endif; ?>
        <h3 class="title-form title text-white text-center">
            <?=$title?>
        </h3>
        <div class="_form">
            <?= do_shortcode('[contact-form-7 id="'. $form_id .'" title="Formulário de serviços"]'); ?>
        </div>        
    </div>
</div>