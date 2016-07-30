<?php
/*
 * Template Name: Landing Page
 *
 */ ?>
 
<?php get_header(); ?>

			<div id="content" class="wrap">
				<div id="inner-content" class="inner-wrap">

					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div id="post-<?php the_ID(); ?>" <?php post_class( 'landing' ); ?>>

							<header class="article-header">

								<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

							</header> <?php // end .article header ?>

							<section class="entry-content">
								
								<div class="landing-content">
									
									<figure class="featured-image grid-half-left">
					                    <?php the_post_thumbnail(''); ?>
									</figure>
	
									<div class="landing-form grid-half-right">
										<h3 class="center">Get the ebook with your email address</h3>
										<?php // Begin MailChimp Signup Form ?>
										<form action="http://33degreesds.us4.list-manage.com/subscribe/post?u=f5083bea3554294c46e304e54&amp;id=44fc4c953b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate searchform" target="_blank" novalidate>
											
											<div class="mc-field-group">
												<label for="mce-EMAIL" class="screen-reader-text">Email </label>
												<input type="email" value="" name="EMAIL" class="required email" placeholder="email@address.com" id="mce-EMAIL">
											</div>
											
											<div id="mce-responses" class="clear">
												<div class="response" id="mce-error-response" style="display:none"></div>
												<div class="response" id="mce-success-response" style="display:none"></div>
											</div>
											
											<?php // do not remove this ?>
										    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f5083bea3554294c46e304e54_44fc4c953b" tabindex="-1" value=""></div>
											
											<input type="submit" value="Get the ebook" name="subscribe" id="mc-embedded-subscribe" class="btn__search">
											
											<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
											<?php // End mc_embed_signup ?>
										</form><?php // end MailChimp Signup Form ?>
										
										<div class="tooltip text-center">Privacy Policy
											<span class="tooltip-text">We do not sell or share your information.</span>
										</div> <?php // end .tooltip ?>
									</div>
									
								</div>
								
								<?php // the content
									the_content();
								?>
									
							</section> <?php // end .content-entry ?>
								
							<footer class="article-footer">
							</footer> <?php // end .article-footer ?>

						</div> <?php // end #post-<id> ?>

						<?php endwhile; 
						endif; ?>

					</main> <?php // end #main .main-wrap ?>

				</div> <?php // end #inner-content .inner-wrap ?>
			</div> <?php // end #content .wrap ?>

<?php get_footer(); ?>