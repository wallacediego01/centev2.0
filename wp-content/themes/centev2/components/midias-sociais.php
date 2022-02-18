<?php
/**
 * Midias Sociais
 * 
 * Add the component description here...
 * 
 * @package cit
 */

?>

<div class="_midias-sociais mt-4">
    <ul class="list-unstyled d-flex mb-0 pl-0">
        <?php foreach($midias as $midia): ?> 
            <li class="mr-6">
                <a href="<?= $midia['sociais_url']; ?>" target="_blank" rel="noopener noreferrer" class="undecorated-link">
                    <i class="social-icon-<?= $midia['sociais_midia']['value']; ?>"></i>
                </a>
            </li>    
        <?php endforeach; ?>
    </ul>
</div>