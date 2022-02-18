<?php
/**
 * Mobile Menu
 *
 * The togglable menu template used for mobile devices
 *
 * @package Horizonte
 */

$fields = get_field('option_header', 'option');
$midias = get_field('option_midias', 'option');

$header = new stdClass;
$header->bg_color = $fields['option_header_bg'];
$header->logo_url = $fields['option_logo']['url'];
$header->logo_alt = $fields['option_logo']['alt'];
$header->logo_wdt = $fields['option_logo']['width'];
$header->logo_hgt = $fields['option_logo']['height'];
$header->link     = $fields['linkdepo'];
$header->bg_menu  = $fields['option_bg_menu_mobile'];
$header->bg_color  = $fields['option_header_bg_mobile'];

?>

<div class="_mobile-menu d-lg-none" id="toggleable-menu">

    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-4 text-lg-center">
                    <!-- LOGO -->
                    <?php Utils::get_template( 'components/logo' , array(
                        'is_h1'=> true,
                        'image_logo' => $header->logo_url,
                        'alt_image'  => $header->logo_alt,
                        'width'      => $header->logo_wdt,
                        'height'     => $header->logo_hgt
                    )); ?>
            </div>
            <div class="col-5">
                <div class="d-flex aling-items-center">
                    <div class="area-wpml pt-2 d-flex justify-content-center">
                            <?= do_shortcode('[wpml_language_switcher]')?>
                    </div>
                    <div class="area-pesquisa pt-4">
                        <?php Utils::get_template( 'components/box-search', ); ?>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <!-- Control button of toggleable menu -->
                <input type="checkbox"  class="d-lg-none" id="open-menu" aria-controls="toggleable-menu" aria-expanded="false">

                <!-- Menu bars -->
                <label for="open-menu" class="menu-icon mt-n6 px-4 pt-6 pb-6 d-inline-block d-lg-none">
                    <span class="menu-bar mx-auto d-block"></span>
                    <span class="menu-bar mx-auto d-block"></span>
                    <span class="menu-bar mx-auto d-block"></span>
                </label>

                 <!-- Overlay menu-mobile -->
                <div class="menu-overlay d-lg-none"></div>

                <!-- MOBILE MENU -->
                <div class="_nav-menu" data-style data-background-image="url(<?= $header->bg_menu != "" ? $header->bg_menu : ""; ?>)" data-background-color="<?= $header->bg_color != "" ? $header->bg_color : ""; ?>">
                    <div class="logo-mobile pt-2 pl-5">
                        <?php Utils::get_template( 'components/logo' , array(
                            'is_h1'=> true,
                            'image_logo' => $header->logo_url,
                            'alt_image'  => $header->logo_alt,
                            'width'      => $header->logo_wdt,
                            'height'     => $header->logo_hgt
                        )); ?>
                    </div>

                    <?php if( has_nav_menu( 'mobile-menu' ) ) : ?>
                        <nav class="mobile-navigation pl-5 pt-4" role="navigation" >
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'    => 'mobile-menu',
                                    'menu_class'        => 'mobile-menu list-unstyled',
                                    'container'         => false
                                    ) );
                            ?>
                        </nav>
                    <?php else: ?>
                        <p>No mobile menu found.</p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

</div><!-- ._menu-mobile -->

