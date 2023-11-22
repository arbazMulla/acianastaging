<?php

/**
 * Block Name: Text
 *
 * This is the template for a custom block created with Advanced Custom Fields (ACF).
 */


$uid = 'aciana-block-' . $block['id'];

$className = 'aciana-block-' . str_replace('acf/aciana-acf-', '', $block['name']);

if (!empty($block['className'])) {
    $className .= sprintf(' %s', $block['className']);
}

$font_size = get_field('font_size');
$text = get_field('text');

?>
<p class=" <?= $uid; ?> <?= esc_attr($className); ?> <?= $font_size; ?>">
    <?= $text; ?>
</p>