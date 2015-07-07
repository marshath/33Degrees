				<div id="sidebar1" class="sidebar" role="complementary">
					
					<?php // MARKETING BOOKLET CALLOUT ?>
					<div id="mc_embed_signup" class="sidebar__email-marketing">
					
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/side-emailmarketing.png" <?php // need to create images ?>
							srcset="<?php echo get_template_directory_uri(); ?>/library/images/side-emailmarketing.png 1x,
							<?php echo get_template_directory_uri(); ?>/library/images/side-emailmarketing@2x.png 2x"
							alt="Email Marketing cover">
						<h3>Email Marketing:</h3>
						<h5>The Essential Guide</h5>
						<p>Download our free PDF and begin converting your emails.</p>
						<button><a href="http://33degreesds.com/email-marketing-the-essential-guide/">Get the eBook</a></button>
						
					</div> <?php // end .sidebar__email-marketing ?>
					
					<?php // SOCIAL MEDIA LINKS ?>
					<div class="sidebar__social">
						
						<h3>Follow Our Blog</h3>
						
						<?php get_template_part('inc/side-socialmedia'); ?>
						
						<div id="email-signup" class="mc-form">
							
							<form action="http://33degreesds.us4.list-manage2.com/subscribe/post?u=f5083bea3554294c46e304e54&amp;id=d0fb1f1039" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div class="mc-field-group">
									<span class="screen-reader-text"><label for="mce-EMAIL">Enter your email address:</label></span>
									<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your email" required>
								</div>
								<input type="submit" value="Sign Me Up!" name="subscribe" id="mc-embedded-subscribe" class="button2">
							</form>
							
						</div><?php // .mc-form ?>
						
					</div><?php // .sidebar__social ?>
					
	
					<?php // DISPLAY IF BLOG PAGE/POST 
						if ( (is_home()) or (is_single()) ) { 
					?>
					
						<?php // BLOG POSTS ?>
						<div class="sidebar__blog-posts">
							
							<h3>Popular Blog Posts</h3>
							
							<ul>
							<?php query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=4');
							if (have_posts()) : while (have_posts()) : the_post(); ?>
								
								<li>
									<a href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?>">
										<figure><?php the_post_thumbnail("thumbnail"); ?>
											<figcaption>
												<?php the_title(); ?> <br>
												<span class="side-moretag">Read article &raquo;</span>
											</figcaption>
										</figure>
									</a>
								</li>
								
							<?php endwhile; endif;
							wp_reset_query(); ?>
							</ul>
							
						</div> <?php // .sidebar__blog-posts ?>
						
						<?php // BLOG SEARCH ?>
						<div class="sidebar__search"><?php get_search_form(); ?></div>
						
						<?php // BLOG CATEGORIES ?>
						<div class="sidebar__categories">
							<h3>Categories</h3>
							<ul>
								<?php wp_list_categories('title_li=&exclude=2,3'); ?>
							</ul>
						</div><?php // .sidebar__categories ?>
					
					<?php  } // end display only if blog page/post ?>

				</div> <?php // end #sidebar1 .sidebar ?>
