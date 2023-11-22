<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aciana
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0">
    <meta name="google-site-verification" content="24y4t9otSltZ-JcY8agnQsWY888-DhZh5EgT0yL_Vy8" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site d-flex flex-column justify-content-between h-screen">
        <header class="site-header fixed-top">
            <nav id="site-navigation" class="navbar navbar-expand-lg" aria-label="Main navigation">
                <div class="container position-relative">
                    <?php the_custom_logo(); ?>
                    <div class="d-flex align-items-center d-lg-none">
                        <button class="navbar-toggler p-0 border-0 shadow-none collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="icon-bar rounded-pill"></span>
                            <span class="icon-bar rounded-pill"></span>
                            <span class="icon-bar rounded-pill"></span>
                        </button>
                    </div>
                    <div id="navbarMenu" class="collapse navbar-collapse">
                        <?php
                        if (has_nav_menu('header-primary')) {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'header-primary',
                                    'menu_class' => 'navbar-nav ms-auto',
                                    'depth' => 3,
                                    'container' => 'div',
                                    'container_class' => 'ms-auto',
                                    'container_id' => '',
                                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker' => new WP_Bootstrap_Navwalker(),
                                )
                            );
                        }
                        ?>
                    </div>
                </div>
            </nav>
        </header>