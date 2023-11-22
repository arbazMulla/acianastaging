<?php

/**
 * Block Name: Featured list
 *
 * This is the template for a custom block created with Advanced Custom Fields (ACF).
 */


$uid = 'aciana-block-' . $block['id'];

$className = 'aciana-block-' . str_replace('acf/aciana-acf-', '', $block['name']);

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

$mode = get_field('theme');

if ($mode === 'dark') {
    $className .= ' bg-dark text-white ';
}

$colors = get_block_css_colors($block);
?>
<div class="<?= $uid; ?> <?= esc_attr($className); ?>">
    <?php
    if (have_rows('list')):
        while (have_rows('list')):
            the_row();
            $image = get_sub_field('image');
            $text = get_sub_field('text');
            ?>
            <div class="d-flex p-3  mb-3 rounded-3"
                style="<?= !empty($colors['text']) ? 'color:' . $colors['text'] . ';' : '' ?><?= !empty($colors['background']) ? 'background-color:' . $colors['background'] : '' ?>">
                <div class="col-auto">
                    <img class="img-auto img-fluid" src="<?= $image['url']; ?>" alt="<?= $image['title']; ?>"
                        style="width:2rem;height:2rem;" />
                </div>
                <div class="col fw-600 ps-3 align-self-center">
                    <?= $text ?>
                </div>
            </div>
            <?php
        endwhile;
    elseif (show_block_error()): ?>
        <div class="bg-danger my-3 p-3 rounded shadow text-white font-demi">
            No data available
        </div>
    <?php endif; ?>
</div>