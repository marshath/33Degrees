<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								
								
						<?php /* PANEL 1 */ ?>
						<article id="panel-1" <?php post_class( 'panel panel__home1' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							
								<?php the_content(); // display the content ?>
								
							<?php endwhile; endif; ?>
							</section> <?php // end .entry-content .inner-wrap  ?>
									
						</article> <?php // end .panel .panel__home1 ?>
								
								
						<?php /* PANEL 2 */ ?>
						<article id="panel-2" <?php post_class( 'panel panel__home2' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_home2'); // display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__home2 ?>
								
								
						<?php /* PANEL 3 */ ?>
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
