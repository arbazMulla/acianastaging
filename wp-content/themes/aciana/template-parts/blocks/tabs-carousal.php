<?php

/**
 * Block Name: Tabs Carousal
 *
 * This is the template for a custom block created with Advanced Custom Fields (ACF).
 */

$uid = 'aciana-block-' . $block['id'];

$className = 'aciana-block-' . str_replace('acf/aciana-acf-', '', $block['name']);

if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
?>

<style>

</style>

<div class="<?= $uid; ?> <?= esc_attr($className); ?>">
    <div class="container">
        <div class="row">
            <div class="py-5">
                <?php
                if (have_rows('tabs_carousal')) :
                    $counter = 0;
                ?>

                    <div class="slidercontainer p-4 m-2">
                        <?php
                        while (have_rows('tabs_carousal')) :
                            the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                            $main_image = get_sub_field('main_image');
                        ?>
                            <div class="slide d-flex" onclick="showSlide(<?php echo $counter; ?>)">
                                <div class="col-6">
                                    <div class="contentBar d-flex gap-4 mb-5">
                                        <div class="col-2">
                                            <img class="img-responsive" src="<?php echo  $image; ?>" alt="">
                                        </div>
                                        <div class="col-8">
                                            <h3 class="mb-3 p-0 fw-400 " id="title"><?php echo $title; ?></h3>
                                            <div class="text-left mt-2 mb-3 text-600 contentBox">
                                                <?php echo $content; ?>
                                                <InnerBlocks />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="content d-flex align-items-center justify-content-end">
                                        <div>
                                            <img style="400px" src="<?php echo $main_image
                                                                    ?>" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php
                            $counter++;
                        endwhile;
                        ?>
                    </div>

            </div>
        <?php
                endif;
        ?>
        </div>
    </div>
</div>
</div>

<script>
    const slides = document.querySelectorAll('.slide');
    let currentIndex = 0;
    updateUI();

    function showSlide(index) {
        currentIndex = index;
        updateUI();
    }

    function updateUI() {
        slides.forEach((slide, i) => {
            const paragraphs = slide.querySelectorAll('.contentBar .contentBox');

            const image = slide.querySelectorAll('.content > div');
            const contentBar = slide.querySelector('.contentBar');

            if (i === currentIndex) {
                slide.classList.add('active');
                paragraphs.forEach(paragraph => {
                    paragraph.style.display = 'block';
                });
                image.forEach(i => {
                    i.style.display = 'block';
                });
                contentBar.classList.add('active');

            } else {
                slide.classList.remove('active');
                paragraphs.forEach(paragraph => {
                    paragraph.style.display = 'none';
                });
                image.forEach(i => {
                    i.style.display = 'none';
                });
                contentBar.classList.remove('active');
            }
        });
    }

    let total = slides.length;
    setInterval(() => {
        currentIndex = (currentIndex + 1) % total;
        updateUI();
    }, 5000);
</script>