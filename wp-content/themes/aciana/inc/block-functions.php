<?php

// Add Custom Blocks Panel in Gutenberg
function aciana_acf_block_categories($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'aciana-acf-blocks',
                'title' => 'Aciana | ACF Blocks',
            )
        )
    );
}
add_filter('block_categories', 'aciana_acf_block_categories', 10, 2);

add_action('acf/init', 'aciana_acf_init');
function aciana_acf_init()
{

    // check function exists
    if (function_exists('acf_register_block')) {

        // Using brand logo svg as icon
        $block_icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 425.02734 149.13867"><polygon points="276.81641 2.29004 230.89648 2.29004 203.81982 40.59814 176.74365 2.29004 130.61377 2.29004 180.75488 73.2168 128.7417 146.84863 174.66016 146.84863 203.81396 105.63184 232.7666 146.84863 278.90723 146.84863 226.67676 73.21436 276.81641 2.29004"/><path d="M403.24121,21.42236C389.17676,7.60791,369.9502,0,349.10352,0c-20.8584,0-40.12012,7.60693-54.2373,21.41943-14.11816,13.81348-21.89355,32.65234-21.89355,53.04541,0,42.57129,32.72949,74.67383,76.13086,74.67383,43.2832,0,75.92383-32.10254,75.92383-74.67383,0-20.40479-7.7373-39.24219-21.78613-53.04248Zm-18.03027,53.04248c0,21.41602-15.52246,37.56543-36.10742,37.56543s-36.10645-16.14941-36.10645-37.56543c0-21.29639,15.52246-37.35596,36.10645-37.35596s36.10742,16.05957,36.10742,37.35596Z"/><path d="M122.27734,52.6001c0-28.68164-23.15088-50.31006-53.85059-50.31006H0V38.14941H68.42676c8.00098,0,14.03467,6.2124,14.03467,14.45068,0,8.49414-5.90234,14.65918-14.03467,14.65918H0v79.58936H38.56738v-43.93652h21.62646l25.40479,43.93652h43.14307l-30.09766-52.08301c14.83887-9.02246,23.6333-24.6377,23.6333-42.16553Z"/></svg>';

        // Shortcode
        acf_register_block(
            array(
                'name' => 'aciana-acf-shortcode',
                'category' => 'aciana-acf-blocks',
                'title' => 'Shortcode (with preview)',
                'description' => 'Shortcode with editor preview',
                'render_callback' => 'aciana_acf_block_template',
                'icon' => 'layout',
                'mode' => 'preview'
            )
        );

        // Template - Button
        acf_register_block(
            array(
                'name' => 'aciana-acf-button',
                'category' => 'aciana-acf-blocks',
                'title' => 'Button (Theme style)',
                'description' => 'Theme style button',
                'render_callback' => 'aciana_acf_block_template',
                'icon' => 'layout',
                'mode' => 'preview'
            )
        );

        // Template - Container width
        acf_register_block_type(
            array(
                'name' => 'aciana-acf-container',
                'category' => 'aciana-acf-blocks',
                'title' => 'Container',
                'description' => 'Display a grid of posts.',
                'icon' => 'align-full-width',
                'mode' => 'preview',
                'supports' => array(
                    'align' => true,
                    'mode' => false,
                    'jsx' => true,
                    'color' => true
                ),
                'render_callback' => 'aciana_acf_block_template',
            )
        );

        // Template - Article width content
        acf_register_block(
            array(
                'name' => 'aciana-acf-article-width-content',
                'category' => 'aciana-acf-blocks',
                'title' => 'Article width container',
                'description' => 'Article width content',
                'mode' => 'preview',
                'supports' => array(
                    'align' => true,
                    'mode' => false,
                    'jsx' => true
                ),
                'render_callback' => 'aciana_acf_block_template',
                'icon' => 'layout',
            )
        );

        // Featured (Content & Image)
        acf_register_block(
            array(
                'name' => 'aciana-acf-featured',
                'category' => 'aciana-acf-blocks',
                'title' => 'Featured (Content & Image)',
                'description' => 'Section with content and image side by side',
                'render_callback' => 'aciana_acf_block_template',
                'icon' => 'layout',
                'mode' => 'preview',
                'supports' => array(
                    'align' => true,
                    'mode' => false,
                    'jsx' => true
                ),
                'post_types' => array('page'),
            )
        );

        // Featured slider
        acf_register_block(
            array(
                'name' => 'aciana-acf-featured-slider',
                'category' => 'aciana-acf-blocks',
                'title' => 'Featured Slider',
                'description' => 'Slider of featured blocks',
                'render_callback' => 'aciana_acf_block_template',
                'icon' => 'layout',
                'mode' => 'preview',
                'supports' => array(
                    'align' => true,
                    'mode' => false,
                    'jsx' => true
                ),
                'post_types' => array('page'),
                'enqueue_assets' => function () {
                    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), filemtime(get_template_directory() . '/js/slick.min.js'), true);
                },
            )
        );

        // Featured list
        acf_register_block(
            array(
                'name' => 'aciana-acf-featured-list',
                'category' => 'aciana-acf-blocks',
                'title' => 'Featured list',
                'description' => 'Display a list of text and icons/images',
                'render_callback' => 'aciana_acf_block_template',
                'icon' => 'layout',
                'mode' => 'preview',
                'supports' => array(
                    'color' => true
                )
            )
        );

        // register an accordion
        acf_register_block(
            array(
                'name' => 'aciana-acf-accordion',
                'category' => 'aciana-acf-blocks',
                'title' => 'Accordion',
                'description' => 'Display a list of collapsible/expandable rows.',
                'render_callback' => 'aciana_acf_block_template',
                'icon' => 'layout',
                'mode' => 'preview'
            )
        );

        // register an Tabs
        acf_register_block(
            array(
                'name' => 'aciana-acf-tabs',
                'category' => 'aciana-acf-blocks',
                'title' => 'Tabs',
                'description' => 'Display a list of data in vertical pills',
                'render_callback' => 'aciana_acf_block_template',
                'icon' => 'layout',
                'mode' => 'preview'
            )
        );

        // register a Text field
        acf_register_block(
            array(
                'name' => 'aciana-acf-text',
                'category' => 'aciana-acf-blocks',
                'title' => 'Text',
                'description' => 'Paragraph text',
                'render_callback' => 'aciana_acf_block_template',
                'icon' => 'layout',
                'mode' => 'preview',
            )
        );

        // Popup
        acf_register_block(
            array(
                'name' => 'aciana-acf-popup',
                'category' => 'aciana-acf-blocks',
                'title' => 'Popup',
                'description' => 'Create a dynamic popup',
                'render_callback' => 'aciana_acf_block_template',
                'icon' => 'layout',
                'mode' => 'preview',
                'allowed_blocks' => array('featured-list'),
                'supports' => array(
                    'jsx' => true,
                ),
                'enqueue_assets' => function () {
                    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), filemtime(get_template_directory() . '/js/custom.js'), true);
                    wp_enqueue_style('component', get_template_directory_uri() . '/css/component.scss');
                },
            )
        );
    }
}

function aciana_acf_block_template($block)
{

    // convert slug name ("acf/aciana-acf-testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/aciana-acf-', '', $block['name']);

    // template parts from within the "template-parts/blocks" folder
    $block_template = get_theme_file_path("/template-parts/blocks/{$slug}.php");

    // fallback to default block template
    $default_template = get_theme_file_path("/template-parts/blocks/default.php");

    // checking if block template exists
    if (!file_exists($block_template)) {
        $block_template = $default_template;
    }

    // Including template for custom block
    include($block_template);
}


// Post type Select Box Filter
function aciana_get_post_type($field)
{
    $args = array(
        'public' => true,
    );

    $post_types = get_post_types($args);

    $exclude_types = array(
        'attachment',
        'page'
    );

    foreach ($exclude_types as $exclude_type) {
        unset($post_types[$exclude_type]);
    }

    $choices = array();

    foreach ($post_types as $post_type) {
        $display_name = str_replace(array('-', '_'), " ", $post_type);
        $choices[$post_type] = ucwords($display_name);
    }

    $field['choices'] = $choices;

    return $field;
}

add_filter('acf/load_field/name=post_type', 'aciana_get_post_type');
