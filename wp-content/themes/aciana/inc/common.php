<?php

/**
 * Get selected colors from block options
 */
function get_block_css_colors($block) {
    $text_color = null;

    if (array_key_exists('customOverlayTextColor', $block)) {
        $text_color = $block['customOverlayTextColor'];
    } elseif (array_key_exists('overlayTextColor', $block)) {
        $text_color = $block['overlayTextColor'];
    } elseif (array_key_exists('customTextColor', $block)) {
        $text_color = $block['customTextColor'];
    } elseif (array_key_exists('textColor', $block)) {
        $text_color = $block['textColor'];
    } elseif (isset($block['style']['color']['text'])) {
        $text_color = $block['style']['color']['text'];
    }

    $background_color = null;

    if (array_key_exists('customOverlayBackgroundColor', $block)) {
        $background_color = $block['customOverlayBackgroundColor'];
    } elseif (array_key_exists('overlayBackgroundColor', $block)) {
        $background_color = $block['overlayBackgroundColor'];
    } elseif (array_key_exists('customBackgroundColor', $block)) {
        $background_color = $block['customBackgroundColor'];
    } elseif (array_key_exists('backgroundColor', $block)) {
        $background_color = $block['backgroundColor'];
    } elseif (isset($block['style']['color']['background'])) {
        $background_color = $block['style']['color']['background'];
    }

    return array(
        'text' => $text_color,
        'background' => $background_color,
    );
}

/**
 * Get excerpt by given id
 * default limit is 210 characters
 */
function post_excerpt_by_id($id, $char_limit = 210, $delimiter = '') {
    if (!empty($delimiter)) {
        $post_excerpt = explode($delimiter, get_the_excerpt($id), $char_limit);
    } else {
        // forcing excerpt length to default
        $char_limit = 210;
        $post_excerpt = get_the_excerpt($id);
        $post_excerpt = strip_tags($post_excerpt);
        return substr($post_excerpt, 0, $char_limit);
    }

    if (!is_array($post_excerpt)) {
        return;
    }

    if (count($post_excerpt) >= $char_limit) {
        array_pop($post_excerpt);
        $post_excerpt = implode($delimiter, $post_excerpt) . '...';
    } else {
        $post_excerpt = implode($delimiter, $post_excerpt);
    }

    return $post_excerpt;
}

/**
 * Get excerpt from the post loop
 */
function post_excerpt($char_limit = 210, $delimiter = '') {
    return post_excerpt_by_id(get_the_id(), $char_limit, $delimiter);
}

function wp_get_current_url() {
    return home_url($_SERVER['REQUEST_URI']);
}

function is_user_has(array $alowed_capabilities) {
    $user_capabilities = get_userdata(get_current_user_id());
    if (is_array($alowed_capabilities) && is_array($user_capabilities)) {
        return array_intersect($alowed_capabilities, $user_capabilities);
    }
    return false;
}

function show_block_error() {
    $capabilities_to_show_error = array('edit_posts', 'translate_strings');
    foreach ($capabilities_to_show_error as $key => $value) {
        if (current_user_can($value)) {
            return true;
        }
    }
    return false;
}

function count_posts_with_term($taxonomy, $term_slug, $post_type) {
    global $wpdb;
    $term = get_term_by('slug', $term_slug, $taxonomy);

    $count = $wpdb->get_var(
        $wpdb->prepare(
            "SELECT COUNT(*) FROM {$wpdb->posts}
        INNER JOIN {$wpdb->term_relationships}
            ON ({$wpdb->posts}.ID = {$wpdb->term_relationships}.object_id)
        INNER JOIN {$wpdb->term_taxonomy}
            ON ({$wpdb->term_relationships}.term_taxonomy_id = {$wpdb->term_taxonomy}.term_taxonomy_id)
        WHERE {$wpdb->posts}.post_type = %s
            AND {$wpdb->posts}.post_status = 'publish'
            AND {$wpdb->term_taxonomy}.taxonomy = %s
            AND {$wpdb->term_taxonomy}.term_id = %d;",
            $post_type,
            $taxonomy,
            $term->term_id
        )
    );
    return $count;
}

function my_acf_post_id() {
    if (is_admin() && function_exists('acf_maybe_get_POST')):
        return intval(acf_maybe_get_POST('post_id'));
    else:
        global $post;
        return isset($post->ID) ? $post->ID : 0;
    endif;
}


// Function to recursively search for a given key, value pair in array | returns array
function array_search_by_value($array, $search_key, $search_value) {
    if (is_array($array) && count($array) > 0) {
        foreach ($array as $key => $value) {
            if (is_array($value) && count($value) > 0) {
                $result = array_search_by_value($value, $search_key, $search_value);
                if ($result != null) {
                    return $result;
                }
            } elseif ($key == $search_key && $value == $search_value) {
                return $array;
            }
        }
    }

    return null;
}

/**
 * Convert std_object to array
 */

function std_object_to_array($data) {

    if (is_object($data)) {
        $data = get_object_vars($data);
    }

    if (is_array($data)) {
        return array_map(__FUNCTION__, $data);
    } else {
        return $data;
    }
}

/**
 * Sanitize user input
 */
function sanitize_user_input($str) {
    $str = filter_var($str, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $str = filter_var($str, FILTER_UNSAFE_RAW);
    return $str;
}