<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aciana
 */

?>

<footer class="py-5 bg-secondary-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9 col-xl-8">
                <div class="row">
                    <div class="col-6 col-md-4">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-products',
                                'menu_class' => 'navbar-nav',
                                'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'mb-3',
                                'container_id' => '',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            )
                        );
                        ?>
                    </div>
                    <div class="col-6 col-md-4">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-solutions',
                                'menu_class' => 'navbar-nav',
                                'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'mb-3',
                                'container_id' => '',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            )
                        );
                        ?>
                    </div>
                    <div class="col-6 col-md-3 col-xl-4">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-primary',
                                'menu_class' => 'navbar-nav',
                                'depth' => 2,
                                'container' => 'div',
                                'container_class' => 'mb-3',
                                'container_id' => '',
                                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                'walker' => new WP_Bootstrap_Navwalker(),
                            )
                        );
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <a href="<?= get_site_url() ?>" class="custom-logo-link" rel="home" aria-current="page">
                    <img width="170" height="172" src="<?= get_template_directory_uri() . '/images/aciana-icon.svg' ?>"
                        class="custom-logo" alt="Aciana">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-social',
                        'menu_class' => 'navbar-nav flex-row my-3',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => '',
                        'container_id' => '',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    )
                );
                ?>
            </div>
            <div class="col-12 col-md-6">
                <div class="my-3 text-end">
                    Copyright © aciana Health Systems
                    <?= date("Y"); ?>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>

</html>