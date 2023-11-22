<?php
/**
 * Template Name: Contact
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
	<main id="main" class="site-main" role="main">
		<div class="container-fluid">
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="page-head">
						<a href="<?php echo get_permalink(2);?>" class="go-back"><i class="icon-angle-left"></i>Back to home</a>
					</div><!-- .page-head -->
					<div class="col-xs-12 col-md-8">
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header animate-it">
								
								<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
							</header><!-- .entry-header -->

							<div class="entry-content animate-it">
								<?php the_content(); ?>
								<?php
									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aciana' ),
										'after'  => '</div>',
									) );
								?>
							</div><!-- .entry-content -->

							<footer class="entry-footer animate-it">
								<?php edit_post_link( esc_html__( 'Edit', 'aciana' ), '<span class="edit-link">', '</span>' ); ?>
							</footer><!-- .entry-footer -->
						</article><!-- #post-## -->

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>
					</div><!-- .col -->
					<div class="col-xs-12 col-md-4">
						<div class="contact-address animate-it">
							<?php 
								$c_image = get_field('contact_image');
								if($c_image){
									echo '<img src="'.$c_image['url'].'" alt="'.$c_image['title'].'"/>';
								}

								the_field('address');
								printmeta('direction_link', '<a href="%s" target="_blank" class="get-dir-link read-more">GET DIRECTIONS <i class="icon-arrow-right"></i></a>');
							?>
						</div><!-- .contact-address -->
					</div><!-- .col -->
				<?php endwhile; // End of the loop. ?>
			</div><!-- .row -->
		</div><!-- .container-fluid -->
	</main><!-- #main -->
<?php get_footer(); ?>
