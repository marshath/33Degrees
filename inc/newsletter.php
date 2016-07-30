<?php //--- Newsletter --// ?>

						<div id="panel-newsletter" <?php post_class( 'row newsletter' ); ?>>
							<section class="inner-wrap">
								
								<?php // Inbox icon ?>
								<div class="icon-inbox"><svg><use xlink:href="#icon-inbox"></use></svg></div>
								
								<h2>Tips in your inbox</h2>
								<p>Get the latest news, insights, and trends to improve your digital marketing strategy directly in your inbox.</p>
								
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
									
									<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn__search">
									
									<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
									<?php // End mc_embed_signup ?>
								</form><?php // end MailChimp Signup Form ?>
								
								<div class="tooltip text-center">Privacy Policy
									<span class="tooltip-text">We do not sell or share your information.</span>
								</div> <?php // end .tooltip ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end #panel-newsletter .row .newsletter ?>
						
