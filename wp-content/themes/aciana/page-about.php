<?php
/**
 * Template Name: About
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
	<?php while ( have_posts() ) : the_post(); ?>
		<main id="main" class="site-main" role="main">
			<div class="container-fluid">
				<div class="col-max-10 col-center">
					<a href="<?php echo get_permalink(2);?>" class="go-back animate-it"><i class="icon-angle-left"></i>Back to home</a>
					<?php the_title( '<h1 class="page-title animate-it">', '</h1>' );?>
					<?php if( have_rows('content_blocks') ):?>
						<div class="about-content-wrap">
							<div class="row">
								<div class="col-xs-12 col-sm-4 col-md-3">
									<ul class="list-unstyled tab-list animate-it" role="tablist">
										<?php $i = 0; while ( have_rows('content_blocks') ) : the_row(); $i++;?>
											<li role="presentation"<?php if($i == 1){ echo ' class="active"';}?>>
												<a href="#about-content-<?php echo $i;?>" aria-controls="about-content-<?php echo $i;?>" role="tab" data-toggle="tab"><?php the_sub_field('title');?></a>
											</li>
										<?php endwhile;?>
									</ul>
								</div><!-- .col -->
								<div class="col-xs-12 col-sm-8 col-md-9">
									<div class="tab-content animate-it">
										<?php $i = 0; while ( have_rows('content_blocks') ) : the_row(); $i++;?>
											<div role="tabpanel" class="tab-pane fade<?php if($i == 1){ echo ' in active';}?>" id="about-content-<?php echo $i;?>">
												<div class="entry-content">
													<?php the_sub_field('content');?>
												</div>
											</div><!-- .tab-pane -->
										<?php endwhile;?>
									</div><!-- .tab-content -->
								</div><!-- .col -->
							</div><!-- .row -->
						</div><!-- .about-content-wrap -->
					<?php endif;?>
				</div><!-- .col-max-# -->
			</div><!-- .container-fluid -->
		</main><!-- #main -->
	<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
