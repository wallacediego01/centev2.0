<?php
/**
 * Accordion
 * 
 * Template for collapse questions
 * 
 * @package tri
 */
?>

<div class="_accordion">
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