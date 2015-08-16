<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								
								
						<?php /* SPLASH */ ?>
						<article id="panel-1" <?php post_class( 'panel panel__home1' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
								<?php the_content(); // display the content ?>
								
							<?php endwhile; endif; ?>
							</section> <?php // end .entry-content .inner-wrap  ?>
									
						</article> <?php // end .panel .panel__home1 ?>
						
						
						<?php /* NEWSLETTER */ ?>
						<article id="panel-newsletter" <?php post_class( 'panel panel__newsletter' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<h2>Receive our newsletter</h2>
								
								<?php // <p class="disclaimer">After you sign-up, click the link in the confirmation email to complete the process.</p> ?>
								
								<!-- Begin MailChimp Signup Form -->
								<form action="http://33degreesds.us4.list-manage.com/subscribe/post?u=f5083bea3554294c46e304e54&amp;id=44fc4c953b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									
									<div class="mc-field-group">
										<label for="mce-FNAME" class="screen-reader-text">Name </label>
										<input type="text" value="" name="FNAME" class="required" placeholder="Name" id="mce-FNAME">
									</div>
									
									<div class="mc-field-group">
										<label for="mce-EMAIL" class="screen-reader-text">Email </label>
										<input type="email" value="" name="EMAIL" class="required email" placeholder="Email Address" id="mce-EMAIL">
									</div>
									
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>
									
									<input type="submit" value="Subscribe me!" name="subscribe" id="mc-embedded-subscribe">
									
								</form><!-- end MailChimp Signup Form -->
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__home2 ?>
						
						
						<?php /* SERVICES */ ?>
						<article id="panel-2" <?php post_class( 'panel panel__home2' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_home2'); // display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__home2 ?>
								
								
						<?php /* TESTIMONIALS */ ?>
						<article id="panel-3" <?php post_class( 'panel panel__home3' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_home3'); // Display the content ?>
								
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
											
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__home3 ?>
								
								
						<?php /* PANEL 4 */ ?>
						<article id="panel-4" <?php post_class( 'panel panel__home4' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_home4'); // Display the content ?>
								
								<ul class="blogposts">
								<?php // Display recent blog posts
									$args = array( 'numberposts' => '2', 'post_status' => 'publish' );
									$recent_posts = wp_get_recent_posts($args);
									foreach($recent_posts as $recent) {
										echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Read '.esc_attr($recent["post_title"]).'" ><figure>' .  get_the_post_thumbnail($recent["ID"], "thumbnail") . '</figure><p>' . $recent["post_title"] . '</p></a></li>';
									} ?>
								</ul> <?php // end .blogposts  ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__home4 ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
