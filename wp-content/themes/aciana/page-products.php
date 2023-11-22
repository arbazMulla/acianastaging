<?php

/**
 * Template Name: Product
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aciana
 */

get_header(); ?>

<?php while (have_posts()) : the_post();
    $p_id = $post->ID; ?>
    <main id="main" class="site-main" role="main">
        <div class="product-single-main">
            <div class="container-fluid">
                <div class="col-max-10 col-center">
                    <div class="row page-banner">
                        <div class="col-xs-12 col-md-7">
                            <a href="<?php echo get_permalink(2); ?>" class="go-back animate-it"><i class="icon-angle-left"></i>Back to home</a>
                            <?php the_title('<h1 class="page-title animate-it">', '</h1>'); ?>
                            <div class="animate-it">
                                <?php the_content(); ?>
                            </div>
                        </div><!-- .col -->
                        <div class="col-xs-12 col-md-5 animate-it">
                            <?php the_post_thumbnail('full'); ?>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .col-max-# -->
                <?php if (have_rows('page_content')) : ?>
                    <?php while (have_rows('page_content')) : the_row(); ?>
                        <?php if (get_row_layout() == 'main_content') : ?>
                            <div class="col-max-10 col-center" animate-it>
                                <div class="page-main-content">
                                    <h3><?php the_sub_field('title'); ?></h3>
                                    <?php the_sub_field('content'); ?>
                                </div><!-- .page-main-content -->
                            </div><!-- .col-max-# -->
                        <?php
                        elseif (get_row_layout() == 'banner_content') :
                            $b_image = get_sub_field('b_image');
                            $col = 12;
                            $class = '';
                            if ($b_image) {
                                $col = '8';
                                $class = ' image-fix';
                            }
                        ?>
                            <div class="col-max-10 col-center">
                                <div class="text-banner-main<?php echo $class; ?>">
                                    <div class="row">
                                        <?php if ($b_image) { ?>
                                            <div class="col-xs-12 col-md-4 animate-it">
                                                <div class="text-banner-main-image">
                                                    <img src="<?php echo $b_image['url']; ?>" alt="<?php echo $b_image['title']; ?>">
                                                </div>
                                            </div><!-- .col -->
                                        <?php } ?>
                                        <div class="col-xs-12 col-md-<?php echo $col; ?> animate-it">
                                            <div class="text-banner-main-content">
                                                <?php the_sub_field('content'); ?>
                                            </div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div><!-- .text-banner-main -->
                            </div><!-- .col-max-# -->
                        <?php endif; ?>
                        <?php if (get_row_layout() == 'fact_sheet') : ?>
                            <div class="flex-row page-bottom-block">

                                <div class="col-xs-12 col-md-6 flex-item">
                                    <div class="our-features">
                                        <div class="our-features-in animate-it">
                                            <?php if (get_sub_field('benefits')) { ?>
                                                <h2 class="font-exo">Our Features</h2>
                                                <?php the_sub_field('features') ?>
                                            <?php } ?>
                                        </div><!-- .our-features-in -->
                                        <ul class="list-inline">
                                            <li class="animate-it"><a href="#schedule-demo-popup" class="button button-red open-demo-popup">Schedule a demo<i class="icon-arrow-right"></i></a></li>
                                            <li class="animate-it"><a href="<?php echo get_permalink(11); ?>" class="button button-blue">Request info<i class="icon-arrow-right"></i></a></li>
                                        </ul>
                                    </div><!-- .our-features -->
                                </div><!-- .col -->

                                <div class="col-xs-12 col-md-6 flex-item">
                                    <div class="fact-sheet flex-inner">
                                        <?php if (have_rows('fact_sheet')) : ?>
                                            <div class="fact-sheet-main animate-it">
                                                <h3>Fact sheet</h3>
                                                <div class="row">
                                                    <?php while (have_rows('fact_sheet')) : the_row(); ?>
                                                        <div class="col-xs-6">
                                                            <div class="fact-sheet-item">
                                                                <span class="font-exo"><?php the_sub_field('value'); ?></span>
                                                                <p><?php the_sub_field('description'); ?></p>
                                                            </div>
                                                        </div><!-- .col -->
                                                    <?php endwhile; ?>
                                                </div><!-- .row -->
                                            </div><!-- .fact-sheet-main -->
                                        <?php endif; ?>
                                        <?php if (get_sub_field('benefits')) { ?>
                                            <div class="fact-sheet-main animate-it">
                                                <h3>Benefits</h3>
                                                <?php the_sub_field('benefits'); ?>
                                            </div><!-- .fact-sheet-main -->
                                        <?php } ?>
                                    </div><!-- .fact-sheet -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php
                $args = array(
                    'post_type'      => 'page',
                    'posts_per_page' => -1,
                    'post_parent'  => 44,
                    'orderby'   => 'menu_order',
                    'order'  => 'ASC',
                    'post__not_in' => array($p_id),
                );
                $solutions = new WP_Query($args);
                if ($solutions->have_posts()) :
                ?>

                    <div class="container other-solution-items">
                        <div class="section-head animate-it">
                            <h2 class="section-title animate-it">Other products that might interest you…</h2>
                        </div>
                        <div class="solution-carousel carousel-flex animate-it">
                            <?php while ($solutions->have_posts()) : $solutions->the_post(); ?>
                                <div class="solution-carousel-item flex-inner">
                                    <a class="product-grid-item flex-inner" href="<?php the_permalink(); ?>">
                                        <span class="home-solution-thumb"><?php the_post_thumbnail(); ?></span>
                                        <?php the_title('<h3>', '</h3>'); ?>
                                    </a>
                                </div><!-- .solution-carousel-item -->
                            <?php endwhile; ?>
                        </div><!-- .solution-carousel -->
                    </div><!-- .home-solution-items -->
                <?php endif;
                wp_reset_postdata(); ?>
            </div><!-- .container-fluid -->
        </div><!-- .product-single-main -->
        <div class="get-intouch-banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 animate-it">
                        <?php
                        printmeta('git_title', '<h3 class="font-exo">%s</h2>', '', 2);
                        printmeta('git_description', '<p>%s</p>', '', 2);
                        ?>
                    </div><!-- .col -->
                    <div class="col-xs-12 col-sm-4 animate-it">
                        <a href="<?php echo get_permalink(11); ?>" class="button button-white">Get in touch<i class="icon-arrow-right"></i></a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .get-intouch-banner -->
    </main><!-- #main -->
<?php endwhile; // End of the loop. 
?>
<div id="schedule-demo-popup" class="form-pop-modal mfp-hide">
    <div class="form-pop-modal-in entry-content">
        <h2>Schedule a demo</h2>
        <?php echo do_shortcode('[gravityform id=2 title=false description=true ajax=true tabindex=49]'); ?>
    </div>
</div>
<?php get_footer(); ?>