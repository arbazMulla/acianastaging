<?php

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
}

/**
 * Print the meta data after checking it's existence
 * @param  String $metakey  Post meta key
 * @param  Sting $template  Template
 * @return String           Meta value in template
 */
function printmeta($metakey, $template, $return = false, $post_id = null) {
    if (!$post_id) {
        global $post;
        $post_id = $post->ID;
    }
    
    if (get_field($metakey, $post_id)) {
        $value = get_field($metakey, $post_id);
        if ($return) return sprintf($template, $value);
        else echo sprintf($template, $value);
    }
}
function printimage($metakey,$size="thumbnail",$return = false, $post_id = null) {
    if (!$post_id) {
        global $post;
        $post_id = $post->ID;
    }
    
    if (get_field($metakey, $post_id)) {
        $image = get_field($metakey, $post_id);
        $imgesrc = sprintf('<img src="%s" alt="%s">', $image['sizes'][$size],$image['title']);
        if ($return) return $imgesrc;
        else echo $imgesrc;
    }
}


/**
 * Print the snippet afer  checking it's existence
 * @param  String $metakey  Post meta key
 * @param  Sting  $template  Template
 * @return String           Meta value in template
 */
function checkprint($value, $template) {
    if (isset($value)) {
        echo sprintf($template, $value);
    }
}



/**
 * To get images from theme
 * @return String HTML
 */
function get_image($location, $print = true) {
    $image = get_template_directory_uri() . '/images/' . $location;
    if ($print) echo $image;
    else return $image;
}

/**
 * Seperate number and string
 * @return Array number and character.
 */
function num_string($str) {
    $matches = preg_split('/(?<=[0-9])(?=[a-z]+)/i', $str);
    return $matches;
}




/**
 * Test Printing
 */
function tp($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}


/**
 * Print active menu
 * @param  String $slug Page Slug
 * @return [type] [description]
 */
function getactmenu($slug) {
    global $post;
    if ($post->post_name == $slug) {
        echo 'active';
    }
}


/**
 * Prevent the subscribers  from accessing backend.
 */
function nen_redirect_admin(){
    if ( ! defined('DOING_AJAX') && ! current_user_can('edit_posts') ) {
        wp_redirect( site_url() );
        exit;       
    }
}
add_action( 'admin_init', 'nen_redirect_admin' );
/**
 * Adds svg upload support
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




/**
 * Remove admin bar for subscribers
 */
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}


add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='button button-red gform_button' id='gform_submit_button_{$form['id']}'><span>{$form['button']['text']}<i class='icon-arrow-right'></i></span></button>";
}