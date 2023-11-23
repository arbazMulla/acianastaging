<?php

/**
 * Block Name: Image Content Box
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

$content_box = get_field('image_content_box');
$main_image = get_field('main_image');
?>

<div class="<?= $uid; ?> <?= esc_attr($className); ?>">
    <div class="container">
        <div class="row">
            <?php
            if ($content_box) :
                foreach ($content_box as $content) :
                    $image = $content['image'];
                    $title = $content['title'];
                    $description = $content['description'];


            ?>
                    <div class="content-box d-flex" id="">
                        <div class="col-6">
                            <div class="d-flex align-items-center p-4 m-4">
                                <span class="bar"></span>
                                <div class="contents d-flex gap-3">
                                    <div class="col-2">
                                        <img class="img-responsive " src="<?php echo  $image; ?>" alt="">
                                    </div>
                                    <div class="col-8">
                                        <h2 class="p-0 mb-2 text-secondary "><?php echo $title; ?></h2>
                                        <p class="mb-2 text-600"><?php echo $description; ?></p>
                                        <InnerBlocks allowedBlocks="<?php echo esc_attr(wp_json_encode(array('aciana-acf-button'))); ?>" template="<?php echo esc_attr(wp_json_encode(array(array('acf/aciana-acf-button')))); ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6  d-flex align-items-center">
                            <div class="image-column">
                                <img style="width:450px;" class="img-responsive img-fluid" src="<?php echo  $main_image; ?>" alt="">
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function($) {
        jQuery('.container .row').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            vertical: true,
            arrows: false,
            autoplay: true,
            pauseOnHover: false,
        });
    });
</script>