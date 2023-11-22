<?php

/**
 * Block Name: Feature
 *
 * This is the template for a custom block created with Advanced Custom Fields (ACF).
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

$featured_image = get_field('featured_image');
$image_position = get_field('image_position') ?? 'left';
?>

<div class="<?= $uid; ?> <?= esc_attr($className); ?>">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 <?= $image_position === 'right' ? 'order-lg-2 text-lg-end' : ''; ?>">
                <img class="img-auto img-fluid" src="<?= $featured_image['url']; ?>"
                    alt="<?= $featured_image['title']; ?>" />
            </div>
            <div class="col-12 col-lg-6">
                <InnerBlocks />
            </div>
        </div>
    </div>
</div>