<?php

/**
 * Default Block
 *
 * This is the template for a custom block created with Advanced Custom Fields (ACF).
 *
 * This is the default template as a fallback option.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


$uid = 'aciana-block-' . $block['id'];

$className = 'aciana-block-' . str_replace('acf/aciana-acf-', '', $block['name']);

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

?>

<div class="<?= $uid; ?> <?= esc_attr($className); ?>">
    <?php if (show_block_error()): ?>
        <div class="bg-danger my-3 p-3 rounded shadow text-white font-demi">

            Template for
            <?= $block['blockName'] ?> block is not available. <br />
            Displaying default template.
        </div>
    </div>
<?php endif; ?>
</div>