<?php
/**
 * Template Name: productpage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 *  d that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aciana
 */

get_header(); ?>

<main id="main" class="site-main main-div otherpage" role="main">
    <div class="container-fluid">
        <div class="sub-container">
            <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>

            <?php endwhile; // End of the loop. ?>
        </div><!-- .col-max-# -->
    </div><!-- .container-fluid -->
</main><!-- #main -->
<?php get_footer(); ?>