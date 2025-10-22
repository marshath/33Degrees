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
						<button><a href="https://33degreesds.com/email-marketing-the-essential-guide/">Get the eBook</a></button>
					</div> <?php // end .sidebar__email-marketing ?> */ ?>
					
					<?php // RELATED BLOG POSTS ?>
					<div class="sidebar__related-posts">
						
						<?php if ( is_singular('post') ) { // if blog post display related category posts
							$categories = get_the_category($post->ID); // Get the current posts category
							// Check if categories exist
							if ($categories) {
								$category_ids = array(); // Get the IDs of the categories
								foreach($categories as $category) {
									$category_ids[] = $category->term_id;
								}
								
								// Define the arguments for the related posts query
								$args = array(
									'category__in' => $category_ids,
									'post__not_in' => array($post->ID),
									'posts_per_page' => 2,
									'orderby' => 'rand',
									'order' => 'DESC',
									'ignore_sticky_posts' => 1, // Exclude sticky posts
								);
								
								// Create a new WP Query instance
								$related_posts_query = new WP_Query($args);
								
								// Check if any related posts were found
								if ($related_posts_query->have_posts()) {
									echo '<h3>Related <span class="screen-reader-text">' . $category -> name . '</span> Articles</h3>'; // Related articles title
									echo '<ul class="overlay-links updated">';
									// The loop for related posts
									while ($related_posts_query->have_posts()) {
										$related_posts_query->the_post();
										?>
										<li>
											<a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?> ">
												<figure><?php the_post_thumbnail("thumbnail"); ?>
													<figcaption>
														<?php the_title(); ?> <br>
														<span class="moretag__slide">Read article &raquo;</span>
													</figcaption>
												</figure>
											</a>
										</li>
									<?php }
									echo '</ul>';
								}
								
								wp_reset_postdata(); // reset post to main query to prevent conflicts
							}
						} else { // if project post display related classification posts
								
							$current_post_id = get_the_ID(); // Get the ID of the current post
							$taxonomy_name = 'classifications'; // Custom taxonomy name
							$terms = wp_get_post_terms( $current_post_id, $taxonomy_name, array('fields' => 'slugs'));
														
							// Check if categories exist
							if ( ! empty( $terms )) {
								// Define the arguments for the related posts query
								$args = array(
									'post_type' => 'project', // custom post type slug
									'posts_per_page' => 2,
									'post__not_in' => array( $current_post_id ), // exclude current post
									'tax_query' => array(
										'taxonomy' => $taxonomy_name,
										'field' => 'slug',
										'terms' => $terms,
										'operator' => 'IN'
									),
									'orderby' => 'rand',
									'order' => 'DESC'
								);
								
								// Create a new WP Query instance
								$related_posts_query = new WP_Query($args);
								
								// Check if any related posts were found
								if ($related_posts_query) {
									echo '<h3>Related Projects</h3>'; // Related articles title
									echo '<ul class="overlay-links updated">';
									// The loop for related posts
									while ($related_posts_query->have_posts()) {
										$related_posts_query->the_post();
										?>
										<li>
											<a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?> ">
												<figure><?php the_post_thumbnail("thumbnail"); ?>
													<figcaption>
														<?php the_title(); ?> <br>
														<span class="moretag__slide">Read article &raquo;</span>
													</figcaption>
												</figure>
											</a>
										</li>
									<?php }
									echo '</ul>';
								}
								
								wp_reset_postdata(); // reset post to main query to prevent conflicts
							}
						} ?>
						
					</div> <?php // .sidebar__related-posts ?>

				</div> <?php // end #sidebar1 .sidebar ?>
