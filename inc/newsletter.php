<?php //--- Newsletter --// ?>

						<div id="panel-newsletter" <?php post_class( 'row newsletter' ); ?>>
							<section class="inner-wrap">
								
								<?php // Inbox icon ?>
								<div class="icon-inbox"><svg><use xlink:href="#icon-inbox"></use></svg></div>
								
								<h2>Tips in your inbox</h2>
								<p>Get the latest articles and news from 33 Degrees on improving your digital strategy.</p>
								
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
									
									<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn__search">
									
								</form><?php // end MailChimp Signup Form ?>
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end #panel-newsletter .row .newsletter ?>