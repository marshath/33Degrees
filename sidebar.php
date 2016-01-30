				<div id="sidebar1" class="sidebar" role="complementary">
					
					<?php // MARKETING BOOKLET CALLOUT ?>
					<?php /* <div id="mc_embed_signup" class="sidebar__email-marketing">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/side-emailmarketing.png" <?php // need to create images ?>
							srcset="<?php echo get_template_directory_uri(); ?>/library/images/side-emailmarketing.png 1x,
							<?php echo get_template_directory_uri(); ?>/library/images/side-emailmarketing@2x.png 2x"
							alt="Email Marketing cover">
						<h3>Email Marketing:</h3>
						<h5>The Essential Guide</h5>
						<p>Download our free PDF and begin converting your emails.</p>
						<button><a href="http://33degreesds.com/email-marketing-the-essential-guide/">Get the eBook</a></button>
					</div> <?php // end .sidebar__email-marketing ?> */ ?>
					
					<?php // RELATED BLOG POSTS ?>
					<div class="sidebar__related-posts">
						
						<?php if ( is_singular('post') ) { // if blog post display related category posts
							$categories = get_the_category();
							if ($categories) {
								foreach ($categories as $category) {
									$cat = $category->cat_ID;
									$args=array(
										'cat' => $cat,
										'order' => DESC,
										'orderby' => rand,
										'post__not_in' => array($post->ID),
										'posts_per_page' => 2,
										'caller_gets_posts' => 1
									);
									$my_query = null;
									$my_query = new WP_Query($args);
									if( $my_query->have_posts() ) {
										echo '<h3>Related <span class="screen-reader-text">' . $category -> name . '</span> Articles</h3>'; // Related articles title
										echo '<ul class="overlay-links">'; // Related article links
										while ($my_query->have_posts()) : $my_query->the_post(); ?>
										
											<li>
												<a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>">
													<figure><?php the_post_thumbnail("thumbnail"); ?>
														<figcaption>
															<?php the_title(); ?> <br>
															<span class="moretag__slide">Read article &raquo;</span>
														</figcaption>
													</figure>
												</a>
											</li>
											
										<?php endwhile;
										echo '</ul>';
									}
								}
							}
						} else { // if project post display related classification posts
							$categories = get_the_terms( $post->ID, 'classification');
							if ($categories) {
								foreach ($categories as $category) {
									$cat = $category->name;
									$args=array(
										'classification' => $cat,
										'order' => DESC,
										'orderby' => rand,
										'post__not_in' => array($post->ID),
										'posts_per_page' => 2,
										'caller_gets_posts' => 1
									);
									$my_query = null;
									$my_query = new WP_Query($args);
									if( $my_query->have_posts() ) {
										echo '<h3>Related <span class="screen-reader-text">' . $category -> name . '</span> Projects</h3>'; // Related articles title
										echo '<ul class="overlay-links">'; // Related article links
										while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
										
											<li>
												<a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>">
													<figure><?php the_post_thumbnail("thumbnail"); ?>
														<figcaption>
															<?php the_title(); ?> <br>
															<span class="moretag__slide">Read article &raquo;</span>
														</figcaption>
													</figure>
												</a>
											</li>
											
										<?php endwhile;
										echo '</ul>';
									}
								}
							}
						}
						wp_reset_query(); ?>
						
					</div> <?php // .sidebar__related-posts ?>

				</div> <?php // end #sidebar1 .sidebar ?>
