<?php get_header(); ?>

			<div id="content" class="wrap">
				<div id="inner-content">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								
								
						<?php /* SPLASH */ ?>
						<article id="panel-splash" <?php post_class( 'row hm-splash' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
								<div class="cta">
									<div class="splash-text">
										<?php // load and browser cache the SVG for the homepage
										require("library/images/splash-text.svg"); ?>
									</div>
									<?php the_content(); // display the content ?>
								</div>
								
								<div class="lady">
									<?php // load and browser cache the splash image
									require("library/images/lady.svg"); ?>
								</div>
								
							<?php endwhile; endif; ?>
							</section> <?php // end .entry-content .inner-wrap  ?>
									
						</article> <?php // end #panel-splash .row .hm-splash ?>
						
						
						<?php /* NEWSLETTER */ ?>
						<article id="panel-newsletter" <?php post_class( 'row newsletter' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php // Inbox icon ?>
								<div class="icon-inbox"><svg><use xlink:href="#icon-inbox"></use></svg></div>
								
								<h2>Tips in your inbox</h2>
								<p>Get the latest articles and news from 33 Degrees on improving your digital strategy.</p>
								
								<?php // Begin MailChimp Signup Form ?>
								<form action="http://33degreesds.us4.list-manage.com/subscribe/post?u=f5083bea3554294c46e304e54&amp;id=44fc4c953b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate searchform" target="_blank" novalidate>
									
									<div class="mc-field-group">
										<label for="mce-EMAIL" class="screen-reader-text">Email </label>
										<input type="email" value="" name="EMAIL" class="required email" placeholder="email@address.com" id="mce-EMAIL">
									</div>
									
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>
									
									<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn__search">
									
								</form><?php // end MailChimp Signup Form ?>
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end #panel-newsletter .row .newsletter ?>
						
						
						<?php /* SERVICES */ ?>
						<article id="panel-services" <?php post_class( 'row hm-services' ); ?> role="article">
							<section class="entry-content" itemprop="articleBody">
								<div class="inner-wrap">
								<?php echo get_field('panel_2'); // display the content ?>
								</div>
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end #panel-services .row .hm-services ?>
								
								
						<?php /* TESTIMONIALS */ ?>
						<article id="panel-testimonials" <?php post_class( 'row testimonials' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								<?php echo get_field('panel_3'); // Display the content ?>
								
								<ul class="quotes">
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
											
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end #panel-testimonials .row .hm-services ?>
								
								
						<?php /* BLOG POSTS */ ?>
						<article id="panel-blog" <?php post_class( 'row hm-blog' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_4'); // Display the content ?>
								
								<ul class="overlay-links">
								<?php // Display recent blog posts
									$args = array( 'numberposts' => '2', 'post_status' => 'publish' );
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
						</article> <?php // end #panel-blog .row .hm-blog ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content ?>
			</div> <?php // end #content .wrap ?>

<?php get_footer(); ?>
