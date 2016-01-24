
							<?php
								/* 
								 *
								 * Default post format
								 *
								 */
							?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
								
								<figure>
				                    <?php the_post_thumbnail(''); ?>
								</figure>

								<header class="article-header inner-wrap">
									
									<p class="entry-header">
										<?php printf( __( '<span class="screen-reader-text">Published</span> %1$s in %2$s', 'bonestheme' ), // Print part 1 and 2
											// the time the post was published
											'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
											// the author of the post
											'<span class="entry-category">' . get_the_category_list(', ') . '</span>' ); ?>										
									</p> <?php // end .byline ?>

									<h1 class="single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
									
									<div class="author-header">
										<div class="author-pic author-box"><?php userphoto_the_author_photo(); ?></div>
									<?php printf( __( '%1$s', 'bonestheme' ), // Print part 1
										// the author of the post
										'<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="" rel="author">' . get_the_author('ID') . '</a></span>'
									); ?>
									<?php // comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
									</div> <?php // end .author-byline ?>
									
								</header> <?php // end .article-header ?>
									
								<section class="entry-content inner-wrap" itemprop="articleBody">
									<?php the_content(); ?>
								</section> <?php // end .entry-content .inner-wrap ?>

								<footer class="article-footer inner-wrap">
									<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Topics:', 'bonestheme' ) . '</span> ', '<span class="screen-reader-text">,</span> ', '</p>' ); ?>

									<div class="vcard author-box">
										
										<div class="author-img"><?php userphoto_the_author_photo(); ?></div>
										
										<?php printf( '<h4 class="entry-author author">About <br><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="" rel="author"><span itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author('ID') . '</span></a></h4>'
										); ?>
										
										<?php printf ('<p>Follow<span class="screen-reader-text"> ' . get_the_author('ID') . '</span>:');
											// the author social profiles, if they have them
											if ($social = get_the_author_meta('facebook')) { // author Facebook profile
												printf ('<a href="http://facebook.com/' . get_the_author_meta('facebook') . '" title="Follow ' . get_the_author('ID') . ' on Facebook" rel="bookmark"><svg><use xlink:href="#icon-facebook"></use></svg><span class="screen-reader-text">Follow ' . get_the_author('ID') . 'on Facebook</span></a> ');
											};
											if ($social = get_the_author_meta('twitter')) {  // author Twitter profile
												printf ('<a href="http://twitter.com/' . get_the_author_meta('twitter') . '" title="Follow ' . get_the_author('ID') . ' on Twitter" rel="bookmark"><svg><use xlink:href="#icon-twitter"></use></svg><span class="screen-reader-text">Follow ' . get_the_author('ID') . 'on Twitter</span></a> ');
											};
											if ($social = get_the_author_meta( 'googleplus' )) { // author Google+ profile
												printf ('<a href="https://plus.google.com/' . get_the_author_meta( 'googleplus' ) . '" title="Follow ' . get_the_author('ID') . ' on Google+" rel="bookmark"><svg><use xlink:href="#icon-google"></use></svg><span class="screen-reader-text">Follow ' . get_the_author('ID') . 'on Google Plus</span></a> ');
											};
											if ($social = get_the_author_meta('aim')) { // author LinkedIn profile
												printf ('<a href="http://www.linkedin.com/in/' . get_the_author_meta( 'aim' ) . '" title="Follow ' . get_the_author('ID') . ' on LinkedIn" rel="bookmark"><svg><use xlink:href="#icon-linkedin"></use></svg><span class="screen-reader-text">Follow ' . get_the_author('ID') . 'on LinkedIn</span></a>');
											};
										?></p>
										
										<p class="author__desc"><?php echo get_the_author_meta( 'description' ); ?></p>

									</div> <?php // end .vcard .author-box ?>
								
								</footer> <?php // end .article-footer .inner-wrap ?>

								<div class="comments">
									<?php comments_template(); ?>
								</div>

							</article> <?php // end #post-<id> ?>
