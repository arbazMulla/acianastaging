<?php

/**
 * aciana functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package aciana
 *
 * Javascript packages and versions
 *
 * JQuery - v3.6.3
 * Bootstrap - v5.3.0
 * Slick.js - v1.8.1
 *
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '2.0');
}

if (!function_exists('aciana_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function aciana_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on aciana, use a find and replace
         * to change 'aciana' to the name of your theme in all the template files.
         */
        load_theme_textdomain('aciana', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        // add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        // add_image_size('blog-thumb', '600', '414', true);

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'header-primary' => 'Header Primary',
                'footer-primary' => 'Footer Primary',
                'footer-products' => 'Footer Products',
                'footer-solutions' => 'Footer Solutions',
                'footer-social' => 'Footer Social',
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support(
            'post-formats',
            array(
                'aside',
                'image',
                'video',
                'quote',
                'link',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'aciana_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 250,
                'width' => 250,
                'flex-width' => true,
                'flex-height' => true,
            )
        );

        /**
         * Registering and adding editor-styles
         */
        add_theme_support('editor-styles');

        /**
         * Register Custom Navigation Walker
         */
        require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
    }
endif; // aciana_setup
add_action('after_setup_theme', 'aciana_setup');


function aciana_editor_styles() {
    add_editor_style(array('/css/all.css', '/css/editor.css'));
}
add_action('admin_init', 'aciana_editor_styles');

function aciana_admin_scripts($hook) {
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), filemtime(get_template_directory() . '/js/jquery.min.js'), true);
    wp_enqueue_script('aciana_admin_script', get_template_directory_uri() . '/js/editor.js', array('jquery'), filemtime(get_template_directory() . '/js/editor.js'), true);
}
add_action('admin_enqueue_scripts', 'aciana_admin_scripts', 99, 1);

function aciana_scripts() {
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i|Raleway:400,400i,500,500i,600,600i,700,700i');
    wp_enqueue_style('aciana-styles', get_template_directory_uri() . '/css/all.min.css', array(), filemtime(get_template_directory() . '/css/all.min.css'));

    wp_deregister_script('wp-embed');
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), filemtime(get_template_directory() . '/js/jquery.min.js'), true);

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), filemtime(get_template_directory() . '/js/bootstrap.min.js'));
    wp_enqueue_script('aciana-scripts', get_template_directory_uri() . '/js/custom.js', array('jquery'), filemtime(get_template_directory() . '/js/custom.js'));
}
add_action('wp_enqueue_scripts', 'aciana_scripts', 99, 1);

/**
 * Enqueue scripts and styles.
 */
// function aciana_scripts() {
//     wp_enqueue_style('aciana', get_template_directory_uri() . '/assets/css/app.min.css');
//     wp_enqueue_script('aciana', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), '20130115', true);
//     wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);

//     if (is_singular() && comments_open() && get_option('thread_comments')) {
//         wp_enqueue_script('comment-reply');
//     }
// }
// add_action('wp_enqueue_scripts', 'aciana_scripts');

/**
 * Implement the Custom Header feature.
 */
/* Common utility functions */
require_once get_template_directory() . '/inc/common.php';

/* Create custom blocks using ACF plugin. */
require_once get_template_directory() . '/inc/block-functions.php';


require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Custom Functions file.
 */
require get_template_directory() . '/inc/custom-functions.php';
