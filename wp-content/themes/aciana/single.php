<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aciana
 */

get_header(); ?>
	<main id="main" class="site-main" role="main">
		<div class="container-fluid">
			<div class="col-max-10 col-center">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'single' ); ?>
				<?php endwhile; // End of the loop. ?>
			</div>
		</div><!-- .container-fluid -->
	</main><!-- #main -->
<?php get_footer(); ?>
