<?php

/**
 * Block Name: Article width content
 *
 * This is the template for a custom block created with Advanced Custom Fields (ACF).
 */


$uid = 'aciana-block-' . $block['id'];

$className = 'aciana-block-' . str_replace('acf/aciana-acf-', '', $block['name']);
if (!empty($block['className'])) {
    $className .= sprintf(' %s', $block['className']);
}

if (!empty($block['align'])) {
    $className .= sprintf(' align%s', $block['align']);
}

$mode = get_field('theme');

if ($mode === 'dark') {
    $className .= ' bg-dark text-white ';
}

$vertical_padding = get_field('vertical_padding');

?>
<div class="<?= $uid; ?> <?= esc_attr($className); ?>">
    <div class="article-width py-<?= $vertical_padding; ?>">
        <InnerBlocks />
    </div>
</div>