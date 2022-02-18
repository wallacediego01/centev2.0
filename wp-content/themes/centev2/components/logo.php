
<div class="site-logo<?= isset($logo_class) ? $logo_class : ""; ?>">
    <a href="<?= home_url('/'); ?>" aria-label="<?php bloginfo('name'); ?>" class="undecorated-link d-block">
        <img src="<?= $image_logo; ?>" alt="<?= $alt_image; ?>" width="<?= $width; ?>" height="<?= $height; ?>" class="lozad transition">
    </a>
</div>