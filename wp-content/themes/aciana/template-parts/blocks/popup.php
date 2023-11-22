<?php

/**
 * Block Name: Popup
 *
 * This is the template for a custom block created with Advanced Custom Fields (ACF).
 */


$uid = 'aciana-block-' . $block['id'];

$className = 'aciana-block-' . str_replace('acf/aciana-acf-', '', $block['name']);

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

$main_primary_title = get_field('main_primary_title');
$main_secondary_title = get_field('main_secondary_title');
$image = get_field('image');
$feature_title = get_field('feature_title');
$text = get_field('text');
$popup_text = get_field('popup_text');
$phone_number = get_field('phone_number');
?>


<div class="row">
    <svg display="none" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="768" height="800" viewBox="0 0 768 800">
        <defs>
            <g id="icon-close">
                <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
        </defs>
    </svg>
    <div class="wrapper">
        <img class="modal-toggle" style="width:220px" src="<?php echo $popup_text ?>" alt="">
    </div>
    <div class="modal">
        <div class="modal-overlay modal-toggle"></div>
        <div class="modal-wrapper modal-transition">
            <div class="modal-body">
                <button class="modal-close modal-toggle">
                    <svg class="icon-close icon" viewBox="0 0 32 32">
                        <use xlink:href="#icon-close"></use>
                    </svg>
                </button>
                <div class="modal-content d-flex">
                    <div class="col-6 p-4">
                        <h2 class=""><?php echo $main_primary_title; ?> <span class="text-secondary fw-bold"><?php echo $main_secondary_title; ?> </span></h2>
                        <div class="mb-3">
                            <p class="mb-2 text-500 fw-medium"><?php echo $text ?></p>
                            <input type="text" class="bg-300 py-3 border-0 px-2 rounded" placeholder="Enter your phone number">
                            <!-- Enter phone number & we'll send you a number link -->
                        </div>
                        <div class="mb-3">
                            <p class="mb-2 text-500 fw-medium"><?php echo $feature_title; ?></p>
                        </div>
                        <!-- Download the Docisn app to get amazing features: -->
                        <InnerBlocks allowedBlocks="<?php echo esc_attr(wp_json_encode(array('aciana-acf-featured-list'))); ?>" template="<?php echo esc_attr(wp_json_encode(array(array('acf/aciana-acf-featured-list')))); ?>" />

                    </div>
                    <div class="col-6 pt-4 ps-4 pe-1 d-flex align-items-end">
                        <img class="img-fluid img-responsive" src="<?php echo $image ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>