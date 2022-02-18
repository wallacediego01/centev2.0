<?php
/**
 * Redes Sociais
 * 
 * Add the component description here...
 * 
 * @package quick
 */
?>

<div class="_redes-sociais d-none d-xl-block">
        <ul class="list-unstyled mb-0 pl-0">
            <?php foreach($midias as $midia): ?> 
                 <li class="py-2 ml-3">
                    <a href="<?= $midia['sociais_url']; ?>" target="_blank" rel="noopener noreferrer" class="undecorated-link">
                        <i class="social-icon-<?= $midia['sociais_midia']['value']; ?>"></i>
                    </a>
                 </li>    
            <?php endforeach; ?>
        </ul>
</div>