<?php

/**
 * Desktop menu
 *
 * Menu desktop
 *
 * @package cit
 * @param string $logo_tag -> Tag for logo
 *
 */
 $fields = get_field('option_header', 'option');

 $header = new stdClass;
 $header->bg_color = $fields['option_header_bg'];
 $header->logo_url = $fields['option_logo'];
 $header->link     = $fields['linkdepo']; 
?>
<div class="_desktop-menu d-none d-lg-block" data-style <?= ($header->bg_color) ? "data-background-color='".$header->bg_color."'" : "" ?>>
	<div class="container-fluid px-6">
		<div class="row align-items-center justify-content-between">
                <!-- LOGO -->
                <?php Utils::get_template( 'components/logo' , array(
					'is_h1'=> true,
					'image_logo' => $header->logo_url['url'],
					'alt_image'  => $fields['option_logo']['alt'],
					'width'      => $fields['option_logo']['width'],
					'height'     => $fields['option_logo']['height'],
					'logo_class' => ' text-center'
				)); ?>
				<div class="navigation">
					<?php if (has_nav_menu('main-menu')) : ?>
						<nav class="site-navigation" role="navigation">
							<?php
							wp_nav_menu(array(
								'theme_location'    => 'main-menu',
								'menu_class'        => 'main-menu list-unstyled d-flex justify-content-between align-items-center mb-0',
								'container'         => false
							));
							?>
						</nav>
					<?php else : ?>
						No main menu found.
					<?php endif; ?>
				
				</div>
					<div class="area-wpml d-flex justify-content-end">
						<?= do_shortcode('[wpml_language_switcher]')?>
						<?php Utils::get_template( 'components/box-search', ); ?>
					</div>
						
			</div>
		</div>
	</div>
</div>