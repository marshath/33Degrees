
							<?php
								/* 
								 *
								 * Default post format
								 *
								 */
							?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
								
								<figure>
				                    <?php the_post_thumbnail('full'); ?>
								</figure>

								<header class="article-header">

									<h1 class="single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
									<p class="byline vcard">
										
										<div class="author__pic"><?php userphoto_the_author_photo(); ?></div>
										
										<?php printf( __( 'Posted %1$s <br>%2$s <br>', 'bonestheme' ), // Print part 1, 2, then 3
											// the time the post was published
											'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
											// the author of the post
											'<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="" rel="author">' . get_the_author('ID') . '</a></span>'
										); ?>
										
										<?php printf ('Follow the author: ');
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
										?>
										
									</p> <?php // end .byline .vcard ?>

								</header> <?php // end .article-header ?>

								<div class="col2-3">
									
									<section class="entry-content" itemprop="articleBody">
										<?php the_content(); ?>
									</section> <?php // end .entry-content ?>
	
									<footer class="article-footer">
										<?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>
										<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Topics:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
									</footer> <?php // end .article-footer ?>

									<?php comments_template(); ?>
									
								</div> <?php // end .col2-3 ?>

							</article> <?php // end #post-<id> ?>
