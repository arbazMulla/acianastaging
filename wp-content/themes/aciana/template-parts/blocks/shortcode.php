<?php

/**
 * Block Name: Shortcode
 *
 * This is the template for a custom block created with Advanced Custom Fields (ACF).
 */



$uid = 'aciana-block-' . $block['id'];

$className = 'aciana-block-' . str_replace('acf/aciana-acf-', '', $block['name']);

if (!empty($block['className'])) {
    $className .= sprintf(' %s', $block['className']);
}


$shortcode_text = get_field('shortcode_text');

?>

<div class=" <?= $uid; ?> <?= esc_attr($className); ?>">
    <?php if ($shortcode_text): ?>
        <?= do_shortcode($shortcode_text); ?>
    <?php elseif (show_block_error()): ?>
        <div class="bg-danger my-3 p-3 rounded shadow text-white font-demi">
            No data available
        </div>
    <?php endif; ?>
</div>