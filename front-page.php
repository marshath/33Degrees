<?php get_header(); ?>

			<div id="content" class="wrap">
				<div id="inner-content">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								
								
						<?php /* SPLASH */ ?>
						<div id="panel-splash" <?php post_class( 'row hm-splash' ); ?>>
							<section class="entry-content inner-wrap">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
								<div class="cta-wrap">
									
									<div class="splash-text">
										<?php // load and browser cache the SVG for the homepage
										require("library/images/splash-text.svg"); ?>
									</div>
									
									<div class="cta">
										<?php the_content(); // display the content ?>
									</div>
									
								</div> <?php // end .cta-wrap ?>
								
								<?php /* <div class="lady">
									<?php // load and browser cache the splash image
									require("library/images/lady.svg"); ?>
								</div> */ ?>
								
							<?php endwhile; endif; ?>
							</section> <?php // end .entry-content .inner-wrap  ?>
									
						</div> <?php // end #panel-splash .row .hm-splash ?>
						
						
						<?php /* NEWSLETTER */
						get_template_part('inc/newsletter'); ?>
						
						
						<?php /* SERVICES */ ?>
						<div id="panel-services" <?php post_class( 'row hm-services' ); ?>>
							<section class="entry-content inner-wrap">
								<?php echo get_field('panel_2'); // display the content ?>
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end #panel-services .row .hm-services ?>
						
						
						<?php /* NEWSLETTER */
						get_template_part('inc/testimonials'); ?>
								
								
						<?php /* BLOG POSTS */ ?>
						<div id="panel-blog" <?php post_class( 'row hm-blog' ); ?>>
							<section class="entry-content inner-wrap">
								
								<?php echo get_field('panel_3'); // Display the content ?>
								
								<ul class="overlay-links">
								<?php // Display recent blog posts
									$args = array( 'numberposts' => '4', 'post_status' => 'publish' );
									$recent_posts = wp_get_recent_posts($args);
									foreach($recent_posts as $recent) {
										echo '<li>
											<a href="' . get_permalink($recent["ID"]) . '" title="Read '.esc_attr($recent["post_title"]).'" >
												<figure>' .  get_the_post_thumbnail($recent["ID"], "thumbnail") . '
												<figcaption>' . $recent["post_title"] . ' <br>
												<span class="moretag__slide">Read article &raquo;</span></figcaption>
											</figure></a>
										</li>';
									} ?>
								</ul> <?php // end .blogposts  ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end #panel-blog .row .hm-blog ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content ?>
			</div> <?php // end #content .wrap ?>

<?php get_footer(); ?>
