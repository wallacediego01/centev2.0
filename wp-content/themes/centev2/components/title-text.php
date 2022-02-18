<?php
/**
 * Title Text
 * 
 * Add the component description here...
 * 
 * @package carcara
 */
?>

<div class="_title-text <?= isset($class) ? $class : ""; ?>">
    <?php if($title != ""): ?>
        <div class="d-flex <?= isset($titleClass) && $titleClass ? $titleClass : ""; ?>">
            <img src='<?= $logo; ?>' alt='Ícone' width='70' height='50' class='lozad'>
            <h2 class="ml-3"> <?= $title; ?> </h2> 
        </div>   
    <?php endif; ?>

    <?php if(isset($content)): ?>
        <div class="content">
            <p>
                <?= $content; ?>
            </p>
        </div>
    <?php endif; ?>
</div>