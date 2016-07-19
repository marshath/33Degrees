
							<?php
								/* 
								 *
								 * Default post format
								 *
								 */
							?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
								
								<figure class="featured-image">
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

									<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>
									
									<div class="author-header">
										<div class="author-pic"><?php userphoto_the_author_photo(); ?></div>
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
								</footer> <?php // end .article-footer .inner-wrap ?>

									
								<?php // Begin MailChimp Signup Form ?>
								<div id="mc_embed_signup" class="row inner-wrap blog-newsletter">
									
									<h4>Follow our blog via <a href="/feed/">RSS</a> or Email.</h4>
									
									<form action="//33degreesds.us4.list-manage.com/subscribe/post?u=f5083bea3554294c46e304e54&amp;id=d0fb1f1039" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate searchform" target="_blank" novalidate>
									    <div id="mc_embed_signup_scroll">
											<div class="mc-field-group">
												<label for="mce-EMAIL" class="screen-reader-text">Email Address</label>
												<input type="email" value="" name="EMAIL" class="required email"  placeholder="email@address.com" id="mce-EMAIL">
											</div>
											
											<div id="mce-responses" class="clear">
												<div class="response" id="mce-error-response" style="display:none"></div>
												<div class="response" id="mce-success-response" style="display:none"></div>
											</div>
											
											<?php // do not remove this ?>
										    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f5083bea3554294c46e304e54_d0fb1f1039" tabindex="-1" value=""></div>
									
											<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn__search">
									    </div>
									</form>
									
								</div>
								<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
								<?php // End mc_embed_signup ?>
								
								<div class="vcard author-box">
									<div class="author-box-head">
										
										<div class="author-img"><?php userphoto_the_author_photo(); ?></div>
										<div class="author-head">
										<?php // ABOUT THE AUTHOR
											// vars
											$athr = get_the_author('ID'); 
											
											// author description
											printf( '<h4 class="entry-author author">About <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="" rel="author"><span itemprop="author" itemscope itemptype="http://schema.org/Person">' . $athr . '</span></a></h4>'
										); 
										
											//author social media links
											printf ('<div class="author-social"><p>Follow<span class="screen-reader-text"> ' . $athr . '</span>: ');
											// the author social profiles, if they have them
											if ($social = get_the_author_meta('facebook')) { // author Facebook profile
												printf ('<a href="http://facebook.com/' . $social . '" title="Follow ' . $athr . ' on Facebook" rel="external><svg><use xlink:href="#icon-facebook"></use></svg><span class="screen-reader-text">Follow ' . $athr . 'on Facebook</span></a> ');
											};
											if ($social = get_the_author_meta('twitter')) {  // author Twitter profile
												printf ('<a href="http://twitter.com/' . $social . '" title="Follow ' . $athr . ' on Twitter" rel="external"><svg><use xlink:href="#icon-twitter"></use></svg><span class="screen-reader-text">Follow ' . $athr . 'on Twitter</span></a> ');
											};
											if ($social = get_the_author_meta( 'googleplus' )) { // author Google+ profile
												printf ('<a href="https://plus.google.com/' . $social . '" title="Follow ' . $athr . ' on Google+" rel="external"><svg><use xlink:href="#icon-google"></use></svg><span class="screen-reader-text">Follow ' . $athr . 'on Google Plus</span></a> ');
											};
											if ($social = get_the_author_meta('aim')) { // author LinkedIn profile
												printf ('<a href="http://www.linkedin.com/in/' . $social . '" title="Follow ' . $athr . ' on LinkedIn" rel="external"><svg><use xlink:href="#icon-linkedin"></use></svg><span class="screen-reader-text">Follow ' . $athr . 'on LinkedIn</span></a>');
											};
											printf ('</p></div>');
										?>
										
										</div> <?php // end .author-head ?>
									</div> <?php // end .author-box-head ?>
									
									<p class="author__desc"><?php echo get_the_author_meta( 'description' ); ?></p>

								</div> <?php // end .vcard .author-box ?>
									
								<div class="comments">
									<?php comments_template(); ?>
								</div>

							</article> <?php // end #post-<id> ?>
