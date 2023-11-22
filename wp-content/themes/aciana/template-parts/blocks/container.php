<?php

/**
 * Block Name: Container
 *
 * This is the template for a custom block created with Advanced Custom Fields (ACF).
 */


$uid = 'aciana-block-' . $block['id'];

$className = 'aciana-block aciana-block-' . str_replace('acf/aciana-acf-', '', $block['name']);

if (!empty($block['className'])) {
    $className .= sprintf(' %s', $block['className']);
}

if (!empty($block['align'])) {
    $className .= sprintf(' align%s', $block['align']);
}

$mode = get_field('theme');
$vertical_padding = get_field('vertical_padding');

if ($mode === 'dark') {
    $className .= ' bg-dark text-white ';
}

$colors = get_block_css_colors($block);
$ribbon_backround = get_field('ribbon_backround') ?? false;

$ribbon_style = !empty($colors['background']) ? 'background-color:' . $colors['background'] : '';
$wrapper_style = !empty($colors['text']) ? 'color:' . $colors['text'] . ';' : '';

if (!$ribbon_backround) {
    $wrapper_style .= $ribbon_style;
}

?>

<div class="<?= $uid; ?> <?= esc_attr($className); ?>" style="<?= $wrapper_style; ?>">
    <div
        class="container py-<?= $vertical_padding; ?> <?= $ribbon_backround ? 'position-relative ps-3 ps-md-5' : ''; ?>">
        <?php if ($ribbon_backround) { ?>
            <div class="ribbon_bg position-absolute m-auto top-0 bottom-0 start-0  z-n1" style="<?= $ribbon_style; ?>">
            </div>
        <?php } ?>
        <InnerBlocks />
    </div>
</div>