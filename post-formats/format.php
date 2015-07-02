
							<?php
								/* This is the default post format.
								 *
								 * If you don't want to use post formats, you can just copy the below code and 
								 * replace the get post format code in single.php. Then you can delete the 
								 * post-formats folder.
								*/
							?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
								
								<figure>
				                    <?php the_post_thumbnail(); ?>
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
												printf ('<a href="http://facebook.com/' . get_the_author_meta('facebook') . '" title="Follow ' . get_the_author('ID') . ' on Facebook" rel="bookmark">[F]</a> ');
											};
											if ($social = get_the_author_meta('twitter')) {  // author Twitter profile
												printf ('<a href="http://twitter.com/' . get_the_author_meta('twitter') . '" title="Follow ' . get_the_author('ID') . ' on Twitter" rel="bookmark">[T]</a> ');
											};
											if ($social = get_the_author_meta( 'googleplus' )) { // author Google+ profile
												printf ('<a href="https://plus.google.com/' . get_the_author_meta( 'googleplus' ) . '" title="Follow ' . get_the_author('ID') . ' on Google+" rel="bookmark">[G]</a> ');
											};
											if ($social = get_the_author_meta('aim')) { // author LinkedIn profile
												printf ('<a href="http://www.linkedin.com/in/' . get_the_author_meta( 'aim' ) . '" title="Follow ' . get_the_author('ID') . ' on LinkedIn" rel="bookmark">[L]</a>');
											};
										?>
										
									</p>

								</header> <?php // end .article-header ?>

								<section class="entry-content" itemprop="articleBody">
									<?php
										// get the content
										the_content();

										/* Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section> <?php // end .entry-content ?>

								<footer class="article-footer">
									<?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>
									<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Topics:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer> <?php // end .article-footer ?>

								<?php comments_template(); ?>

							</article> <?php // end #post-<id> ?>
