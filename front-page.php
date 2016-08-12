<?php get_header(); ?>

			<div id="content" class="wrap">
				<div id="inner-content">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								
								
						<?php /* SPLASH */ ?>
						<div id="panel-splash" <?php post_class( 'row hm-splash' ); ?>>
							
							<section class="splash-content">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
								<div class="splash-headline"><?php // load and browser cache the SVG sprite sheet
									require("library/images/splash__text.svg"); ?>
								</div> <?php // end .splash-headline ?>
									
								<div class="splash-text">
									<?php the_content(); ?>
								</div> <?php // end .splash-text ?>
							
								<div class="splash-image">
									<picture class="lightray">
										<source
											media="(max-width: 639px)"
											srcset="<?php echo get_template_directory_uri(); ?>/library/images/splash__home2-200b.png 200w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home2-300b.png 300w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home2-400b.png 400w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home2-600b.png 600w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home2-800b.png 800w"
											sizes="100vw">
										<source
											media="(min-width: 640px)"
											srcset="<?php echo get_template_directory_uri(); ?>/library/images/splash__home1-300b.png 300w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-400b.png 400w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-600b.png 600w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-800b.png 800w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-1000b.png 1000w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-1200b.png 1200w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-1400b.png 1400w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-1600b.png 1600w"
											sizes="100vw">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/splash__home1-1600b.png" alt="">
									</picture>
									<picture>
										<source
											media="(max-width: 639px)"
											srcset="<?php echo get_template_directory_uri(); ?>/library/images/splash__home2-200a.png 200w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home2-300a.png 300w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home2-400a.png 400w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home2-600a.png 600w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home2-800a.png 800w"
											sizes="100vw">
										<source
											media="(min-width: 640px)"
											srcset="<?php echo get_template_directory_uri(); ?>/library/images/splash__home1-300a.png 300w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-400a.png 400w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-600a.png 600w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-800a.png 800w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-1000a.png 1000w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-1200a.png 1200w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-1400a.png 1400w, <?php echo get_template_directory_uri(); ?>/library/images/splash__home1-1600a.png 1600w"
											sizes="100vw">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/splash__home1-1600a.png" alt="An engaged woman looking at a mobile website.">
									</picture>
								</div> <?php // end .splash-image ?>
								
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
