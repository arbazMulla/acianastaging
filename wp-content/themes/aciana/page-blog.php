<?php
/**
 * Template Name: Blog
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
			<div class="col-max-10 col-center">
				<div class="page-banner">
					<a href="<?php echo get_permalink(2);?>" class="go-back animate-it"><i class="icon-angle-left"></i>Back to home</a>
					<?php the_title( '<h1 class="page-title animate-it">', '</h1>' );?>
				</div>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php 
						$paged = get_query_var( 'paged', 1 );
						$args = array(
						    'post_type'      => 'post',
						    'posts_per_page' => 9,
						    'paged' => $paged
						);
						$blog = new WP_Query( $args );
						if ( $blog->have_posts() ) : 
					?>
					<div id="loadmorecontainer" class="flex-row blog-items">
						<?php while ( $blog->have_posts() ) : $blog->the_post();?>
							<div class="col-xs-6 col-md-4 flex-item animate-it">
								<a href="<?php the_permalink();?>" class="blog-item">
									<h2><?php the_title();?></h2>
									<?php echo '<p>'.wp_trim_words( get_the_content(), 20, '' ).'</p>';?>
									<span class="blog-thumb"><?php the_post_thumbnail('blog-thumb');?></span>
									
								</a><!-- .blog-item -->
							</div><!-- .col -->
						<?php endwhile;?>
						<?php
		                    $link=get_next_posts_link('link',$blog->max_num_pages);
		                        if($link){
		                        echo '<div class="load-more col-xs-12 flex-item text-center animate-it"><a href="'.get_next_posts_page_link().'" class="loadmore button button-blue"><i class="icon-load-more l-icon"></i><span>'.__('LOAD MORE', 'gavs').'</span></a></div>';
		                        }
		                ?>
		                <?php else:?>
		                	<div class="col-xs-12 text-center animate-it">
		                		<h2>Nothing to show</h2>
		                	</div>
					</div><!-- .row -->
				<?php endif; wp_reset_postdata();?>

				<?php endwhile; // End of the loop. ?>
			</div><!-- .col-max-# -->
		</div><!-- .container-fluid -->
	</main><!-- #main -->
<?php get_footer(); ?>
