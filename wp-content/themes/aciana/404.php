<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package aciana
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">
		<div class="container-fluid">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><span>404</span><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'millasays' ); ?></h1>
				</header><!-- .page-header -->

				
			</section><!-- .error-404 -->
		</div><!-- .container-fluid -->
	</main><!-- #main -->
	

<?php get_footer(); ?>
