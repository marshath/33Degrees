<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article">
							<section class="entry-content" itemprop="articleBody">
								
								
								<?php /* PANEL 1 */ ?>
								<div class="panel panel__about1">
		
									<section class="inner-wrap">
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									
										<?php the_content(); // display the content ?>
										
									<?php endwhile; endif; ?>
									</section> <?php // end .inner-wrap  ?>
									
								</div> <?php // end .panel .panel__about1 ?>
								
								
								<?php /* PANEL 2 */ ?>
								<div class="panel panel__about2">
								
									<section class="inner-wrap">
										<?php echo get_field('panel_about2'); // display the content ?>
									</section> <?php // end .inner-wrap  ?>
								
								</div> <?php // end .panel .panel__about2 ?>
								
								
								<?php /* PANEL 3 */ ?>
								<div class="panel panel__about3">
								
									<section class="inner-wrap">
										<?php echo get_field('panel_about3'); // Display the content ?>
										
										<ul class="testimonials">
										<?php // Display Testimonials
											query_posts(array('post_type'=>'testimonials')); ?>
											
											<?php $my1post = array( 'post_type' => 'testimonials' );
											$qloop = new WP_Query( $my1post ); // Cycle through all posts
											while ( $qloop->have_posts() ) : $qloop->the_post(); ?>
											
											<li>
												<blockquote>
													<?php the_content(); ?>
													<cite>&mdash;<?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_client', true ) ); ?>, <a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_url', true ) ); ?>"><?php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_company', true ) ); ?></a></cite>
												</blockquote>
											</li>
											
										<?php endwhile; 
										wp_reset_query(); ?>
										
										</ul> <?php // end .testimonials  ?>
										
									</section> <?php // end .inner-wrap  ?>
								
								</div> <?php // end .panel .panel__about3 ?>
								
								
								<?php /* PANEL 4 */ ?>
								<div class="panel panel__about4">
								
									<section class="inner-wrap">
										<?php echo get_field('panel_about4'); // Display the content ?>
									</section> <?php // end .inner-wrap  ?>
									
								</div> <?php // end .panel .panel__about4 ?>
							
							
							</section> <?php // end .entry-content ?>
						</article> <?php // end #post-<id> ?>
					</main> <?php // end #main .main-wrap ?>
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
