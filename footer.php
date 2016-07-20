			
						
			<?php /* NEWSLETTER */
			if ( !is_page( array('home', 'email-marketing-the-essential-guide') )) { 
				get_template_part('inc/newsletter'); 
			} ?>
						
			<footer class="footer-wrap" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div id="inner-footer" class="inner-wrap">
				
					<div class="footer-hinge">
						<div class="footer-company-info">
							
							<?php // Company logo or text ?>
							<div class="footer-logo">
								<?php // responsive image - logo ?>
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png"
									srcset="<?php echo get_template_directory_uri(); ?>/library/images/logo.png 1x,
									<?php echo get_template_directory_uri(); ?>/library/images/logo@2x.png 2x"
									alt="<?php bloginfo('name'); ?>'s logo">
							</div> <?php // end .footer-logo ?>
							
							<?php if ( is_active_sidebar( 'footer1' ) ) : ?>
								<?php dynamic_sidebar( 'footer1' ); ?>
							<?php endif; ?>
	
						</div> <?php // end .footer-company-info ?>
							
						<div class="social">
							<ul>
								<li class="facebook"><a href="http://www.facebook.com/33degreesds"><svg><use xlink:href="#icon-facebook"></use></svg><span class="screen-reader-text">Facebook</span></a></li>
								<li class="twitter"><a href="http://twitter.com/#!/33degreesds"><svg><use xlink:href="#icon-twitter" /></svg><span class="screen-reader-text">Twitter</span></a></li>
								<li class="google"><a href="http://plus.google.com/b/116366458762606663946/" class="social__icon"><svg class="social__google"><use xlink:href="#icon-google" /></svg><span class="screen-reader-text">Google Plus</span></a></li>
								<li class="rss"><a href="http://33degreesds.com/feed/" class="social__icon"><svg class="social__rss"><use xlink:href="#icon-rss" /></svg><span class="screen-reader-text">RSS feed</span></a></li>
								<li class="email"><a href="http://mailchimp.com" class="social__icon"><svg class="social__email"><use xlink:href="#icon-email" /></svg><span class="screen-reader-text">Email Newsletter</span></a></li>
								<li class="linkedin"><a href="http://linkedin.com/company/33-degrees-design-studio" class="social__icon"><svg class="social__linkedin"><use xlink:href="#icon-linkedin" /></svg><span class="screen-reader-text">LinkedIn</span></a></li>
							</ul>
						</div> <?php // end .social ?>
					</div> <?php // end .footer-hing ?>
	
					<nav class="nav-footer" role="navigation">
						<?php wp_nav_menu(array(
							'container' => 'div',							// enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
							'container_class' => 'footer-links',			// class of container (should you choose to use it)
							'menu' => __( 'Footer Links', 'bonestheme' ),	// nav name
							'menu_class' => 'nav footer-nav',			// adding custom nav class
							'theme_location' => 'footer-links',				// where it's located in the theme
							'before' => '',									// before the menu
							'after' => '',									// after the menu
							'link_before' => '',							// before each link
							'link_after' => '',								// after each link
							'depth' => 0,									// limit the depth of the nav
							'fallback_cb' => 'bones_footer_links_fallback'	// fallback function
						)); ?>
					</nav> <?php // end .nav-footer ?>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> by <?php bloginfo( 'name' ); ?>, LLC. All rights reserved.</p>

				</div> <?php // end #inner-footer .inner-wrap ?>
			</footer> <?php // end .footer-wrap ?>

		</div> <?php // end #container .wrap ?>

		<?php // Default locations for footer loading plugins is library/js/scripts
			// all js scripts are loaded in library/bones.php ?>
			<?php // Go to www.addthis.com/dashboard to customize your tools ?>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51b3d7b12af9a97b" async="async"></script>
		<?php wp_footer(); ?>

	</body>

</html>
