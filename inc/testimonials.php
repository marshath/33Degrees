<?php //--- Testimonials --// ?>
								
						<div id="panel-testimonials" <?php post_class( 'row testimonials' ); ?>>
							<section class="entry-content">
								<h2>We <span class="client-heart">❤</span><span class="client-love">love</span> what our clients say...</h2>
								
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
						</div> <?php // end #panel-testimonials .row .hm-services ?>