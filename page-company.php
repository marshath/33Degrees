<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								
								
						<?php /* PANEL 1 */ ?>
						<article id="panel-company1" <?php post_class( 'row company-intro' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									
									<h1 class="page-title"><?php the_title(); ?></h1>
									
									<div class="subhead">
										<?php the_content(); // display the content ?>
									</div>
									
								<?php endwhile; endif; ?>
								
							</section> <?php // end .entry-content .inner-wrap ?>
						</article> <?php // end .row .company-intro ?>
								
							
						<?php /* PANEL 2 */ ?>
						<article id="panel-company2" <?php post_class( 'row company-success' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_2'); // display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .row .company-success ?>
								
								
						<?php /* TESTIMONIALS */ ?>
						<article id="panel-testimonials" <?php post_class( 'row testimonials' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								<?php echo get_field('panel_3'); // Display the content ?>
								
								
								<div class="flex-section-container">
									<div class="flexslider">
										<ul class="slides quotes">
											
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
									</div>
								</div>
											
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end #panel-testimonials .row .hm-services ?>
								
								
						<?php /* PANEL 4 */ ?>
						<article id="panel-company4" <?php post_class( 'row company-methodology' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_4'); // Display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .row .company-methodology ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
