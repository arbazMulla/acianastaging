<?php

/**
 * Block Name: Featured slider
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

$autoplay = get_field('autoplay') ?? false;
$autoplaySpeed = get_field('autoplay_speed') ?? 5;

?>

<div class="<?= $uid; ?> <?= esc_attr($className); ?>">
    <div class="row">
        <div class="col-12">
            <div id="carousel-<?= $block['anchor'] ?? $block['id']; ?>">
                <InnerBlocks allowedBlocks="<?php echo esc_attr(wp_json_encode(array('acf/aciana-acf-featured'))); ?>"
                    template="<?php echo esc_attr(wp_json_encode(array(array('acf/aciana-acf-featured')))); ?>" />
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#carousel-<?= $block['anchor'] ?? $block['id']; ?>').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                autoplay: <?= $autoplay ? 'true' : 'false' ?>,
                autoplaySpeed: <?= (int) $autoplaySpeed * 1000 ?>,
            });
        });
    </script>
</div>