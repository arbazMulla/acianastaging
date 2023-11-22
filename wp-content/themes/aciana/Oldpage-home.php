<?php
/**
 * Template Name: Home
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
			<div class="banner">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-md-5 banner-content animate-it">
							<?php 
								printmeta('banner_title', '<h2 class="font-exo">%s</h2>');
								printmeta('banner_description', '<p>%s</p>');
								$banner_button_text = get_field('banner_button_text');
								if($banner_button_text){
									printmeta('banner_button_url', '<a href="%s" class="button button-red">'.$banner_button_text.'<i class="icon-arrow-right"></i></a>');
								}
							?>
							<p><a href="<?php echo get_permalink(9);?>" class="button-link">Learn more about us</a></p>
						</div><!-- .col -->
						<div class="col-xs-12 col-md-7 animate-it">
							<?php 
								$banner_img = get_field('banner_image');
								if($banner_img){
									echo '<img src="'.$banner_img['url'].'" alt="'.$banner_img['title'].'"/>';
								}
							?>
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container-fluid -->
			</div><!-- .banner -->
			<div class="container-fluid">
				<?php 
					$tb_main_text = get_field('tb_main_text');
					$tb_content = get_field('tb_content');
					if($tb_main_text || $tb_content){
				?>
					<div class="text-banner">
						<div class="col-max-10 col-center">
							<div class="row">
								<div class="col-xs-12 col-md-6 animate-it">
									<?php printmeta('tb_main_text', '<p class="ft-text">%s</p>');?>
								</div><!-- .col -->
								<div class="col-xs-12 col-md-6 animate-it">
									<?php the_field('tb_content');?>
								</div><!-- .col -->
							</div><!-- .row -->
						</div>
					</div><!-- text-banner. -->
				<?php }?>
				<?php
					$args = array(
					    'post_type'      => 'page',
					    'posts_per_page' => -1,
					    'post_parent'  => 44,
					    'orderby'   => 'menu_order',
					    'order'  => 'ASC'
					);
					$products = new WP_Query( $args );
					if ( $products->have_posts() ) :
				?>
					<div class="home-product-items col-max-10 col-center">
						<?php while ( $products->have_posts() ) : $products->the_post();?>
							<div class="home-product-item">
								<div class="flex-row flex-center">
									<div class="col-xs-12 col-md-6 flex-item">
										<div class="home-product-image animate-it">
											<?php the_post_thumbnail('full');?>
										</div>
									</div><!-- .col -->
									<div class="col-xs-12 col-md-6 flex-item animate-it">
										<?php 
											the_title( '<h2 class="font-exo">', '</h2>' );
											the_content();
										?>
										<p class="animate-it"><a href="<?php the_permalink();?>" class="read-more">Learn more<i class="icon-arrow-right"></i></a></p>
									</div><!-- .col -->
								</div><!-- .row -->
							</div><!-- .home-product-item -->
						<?php endwhile;?>
					</div><!-- .home-product-items -->
				<?php endif; wp_reset_postdata();?>
				<?php
					$args = array(
					    'post_type'      => 'page',
					    'posts_per_page' => -1,
					    'post_parent'  => 77,
					    'orderby'   => 'menu_order',
					    'order'  => 'ASC'
					);
					$solutions = new WP_Query( $args );
					if ( $solutions->have_posts() ) :
				?>
					<div class="home-solution-items">
						<div class="section-head animate-it">
							<h2 class="section-title animate-it">Our Healthcare Solutions</h2>
						</div>
						<div class="solution-carousel carousel-flex animate-it">
							<?php while ( $solutions->have_posts() ) : $solutions->the_post();?>
								<div class="solution-carousel-item flex-inner">
									<a class="home-solution-item flex-inner" href="<?php the_permalink();?>">
										<span class="home-solution-thumb"><?php the_post_thumbnail();?></span>
										<?php the_title( '<h3>', '</h3>' );?>
									</a>
								</div><!-- .solution-carousel-item -->
							<?php endwhile;?>
						</div><!-- .solution-carousel -->
					</div><!-- .home-solution-items -->
				<?php endif; wp_reset_postdata();?>
			</div><!-- .container-fluid -->
			<div class="get-intouch-banner">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-8 animate-it">
							<?php 
								printmeta('git_title', '<h3 class="font-exo">%s</h2>');
								printmeta('git_description', '<p>%s</p>');
							?>
						</div><!-- .col -->
						<div class="col-xs-12 col-sm-4 animate-it">
							<a href="<?php echo get_permalink( 11 );?>" class="button button-white">Get in touch<i class="icon-arrow-right"></i></a>
						</div><!-- .col -->
					</div><!-- .row -->
				</div><!-- .container-fluid -->
			</div><!-- .get-intouch-banner -->
		</main><!-- #main -->
	<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
