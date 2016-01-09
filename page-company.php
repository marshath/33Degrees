<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								
								
						<?php /* PANEL 1 */ ?>
						<article id="panel-1" <?php post_class( 'panel panel__about1' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
									<?php the_content(); // display the content ?>
									
								<?php endwhile; endif; ?>
								
							</section> <?php // end .entry-content .inner-wrap ?>
						</article> <?php // end .panel .panel__about1 ?>
								
							
						<?php /* PANEL 2 */ ?>
						<article id="panel-2" <?php post_class( 'panel panel__about2' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_2'); // display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__about2 ?>
								
								
						<?php /* PANEL 3 */ ?>
						<article id="panel-3" <?php post_class( 'panel panel__about3' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_3'); // Display the content ?>
								
								<ul class="testimonials">
								<?php // Display Testimonials
									query_posts(array('post_type'=>'testimonial')); ?>
									
									<?php $my1post = array( 'post_type' => 'testimonial' );
									$qloop = new WP_Query( $my1post ); // Cycle through all posts
									while ( $qloop->have_posts() ) : $qloop->the_post(); ?>
									
									<li>
										<blockquote>
											<?php the_content(); ?>
											<cite>&mdash;<?php echo get_the_title(get_the_ID()); ?>, <a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_url', true ) ); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_company', true ) ); ?></a></cite>
										</blockquote>
									</li>
									
								<?php endwhile; 
								wp_reset_query(); ?>
								
								</ul> <?php // end .testimonials  ?>
								
							</section> <?php // end .entry-content.inner-wrap  ?>
						</article> <?php // end .panel .panel__about3 ?>
								
								
						<?php /* PANEL 4 */ ?>
						<article id="panel-4" <?php post_class( 'panel panel__about4' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_4'); // Display the content ?>
								
							</section> <?php // end .inner-wrap  ?>
						</article> <?php // end .panel .panel__about4 ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
