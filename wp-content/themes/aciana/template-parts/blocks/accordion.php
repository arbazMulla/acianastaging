<?php

/**
 * Block Name: Accordion
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

$section_title = get_field('section_title');
$counter = 1;

$according_title = str_replace(array("'", "\"", "@"), "", htmlspecialchars($section_title));
?>
<div class="<?= $uid; ?> <?= esc_attr($className); ?>">
    <?php if (!empty($according_title)): ?>
        <h2 class="accordion-title">
            <?= $section_title ?>
        </h2>
    <?php endif; ?>
    <div class="accordion accordion-flush" id="accordion-<?= $block['id']; ?>">
        <?php
        if (have_rows('accordion')):
            while (have_rows('accordion')):
                the_row();
                $question = get_sub_field('question');
                $answer = get_sub_field('answer');
                ?>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="flush-heading<?= $counter ?>">
                        <button class="accordion-button collapsed fs-5" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse<?= $counter ?>" aria-expanded="false"
                            aria-controls="flush-collapse<?= $counter ?>">
                            <?= $question ?>
                        </button>
                    </h3>
                    <div id="flush-collapse<?= $counter ?>" class="accordion-collapse collapse"
                        aria-labelledby="flush-heading<?= $counter ?>" data-bs-parent="#accordion-<?= $block['id']; ?>">
                        <div class="accordion-body fw-500 text-500">
                            <?= $answer ?>
                        </div>
                    </div>
                </div>
                <?php $counter++;
            endwhile;
        elseif (show_block_error()): ?>
            <div class="bg-danger my-3 p-3 rounded shadow text-white font-demi">
                No data available
            </div>
        <?php endif; ?>
    </div>
</div>