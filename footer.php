			<footer class="footer-wrap" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div id="inner-footer" class="inner-wrap">
					
					<div class="pdx">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-pdx.png"
							srcset="<?php echo get_template_directory_uri(); ?>/library/images/logo-pdx.png 1x,
							<?php echo get_template_directory_uri(); ?>/library/images/logo-pdx@2x.png 2x"
							alt="Portland, Oregon">
						<p>45.5424&deg; N, -122.6544&deg; W</p>
					</div>
					
					<?php if ( is_active_sidebar( 'footer1' ) ) : ?>
	
						<?php dynamic_sidebar( 'footer1' ); ?>
	
					<?php else : ?>
	
						<?php /* This content shows up if there are no widgets defined in the backend. */ ?>
						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>
	
					<?php endif; ?>
					
					<div class="social">
						<ul>
							<li class="facebook"><a href="http://www.facebook.com/33degreesds"><svg><use xlink:href="#icon-facebook"></use></svg></a></li>
							<li class="twitter"><a href="http://twitter.com/#!/33degreesds"><svg><use xlink:href="#icon-twitter" /></svg></a></li>
							<li class="google"><a href="http://plus.google.com/b/116366458762606663946/" class="social__icon"><svg class="social__google"><use xlink:href="#icon-google" /></svg></a></li>
							<li class="rss"><a href="http://33degreesds.com/feed/" class="social__icon"><svg class="social__rss"><use xlink:href="#icon-rss" /></svg></a></li>
							<li class="email"><a href="http://mailchimp.com" class="social__icon"><svg class="social__email"><use xlink:href="#icon-email" /></svg></a></li>
							<li class="linkedin"><a href="http://linkedin.com/company/33-degrees-design-studio" class="social__icon"><svg class="social__linkedin"><use xlink:href="#icon-linkedin" /></svg></a></li>
						</ul>
					</div>
	
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
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>, LLC. All rights reserved.</p>

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
