<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons 
			get_template_part('inc/header-icons'); ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<?php // TYPEKIT // ?>
		<script src="https://use.typekit.net/cqu0hqz.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		
		<?php // FLEXSLIDER
			if (is_page(array('home','company')) or is_singular('project')) { // display if Home, Company, or Project post type page ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.flexslider.js"></script>
		<?php } ?>
		<?php // FLEXSLIDER TESTIMONIAL SETTINGS
			if (is_page(array('home','company'))) { // display if Home or Company page ?>
		<script type="text/javascript">
			$(window).load(function() {
				$('.flexslider').flexslider({
					animation: 'slide',
					controlNav: false,
					directionNav: false,
					randomize: true,
					slideshowSpeed: 5000
				});
			});
		</script>
		<?php } // FLEXSLIDER PROJECT SETTINGS
			else if (is_singular('project')) { // display if project post type ?>
		<script type="text/javascript">
			$(window).load(function() {
				$('.flexslider').flexslider({
					slideshowSpeed: 6000,
					pauseOnHover: true,
					touch: true
				});
			});
		</script>
		<?php } else {} ?>
		
		
		<?php // ADDTHIS // ?>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51b3d7b12af9a97b" async="async"></script>
		
		<?php // wordpress head functions
			wp_head(); // end of wordpress head ?>
	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<?php // load and browser cache the SVG sprite sheet
			require("library/images/sprite.svg"); ?>

		<div id="container" class="page-wrap">

			<header class="header-wrap" role="banner" itemscope itemtype="http://schema.org/WPHeader">
				<div id="inner-header" class="inner-wrap inner-header-wrap">

					<?php // Company logo or text ?>
					<div id="logo" class="header-logo" itemscope itemtype="http://schema.org/Organization">
						<a href="<?php echo home_url(); ?>" title="Home" rel="nofollow">
							<?php // responsive image - logo ?>
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png"
								srcset="<?php echo get_template_directory_uri(); ?>/library/images/logo.png 1x,
								<?php echo get_template_directory_uri(); ?>/library/images/logo@2x.png 2x"
								alt="<?php bloginfo('name'); ?>'s logo">
							<span class="site-title"><?php bloginfo('name'); ?></span>
						</a>
					</div>

					<?php // if you'd like to use the site description you can un-comment it below
						// bloginfo('description'); ?>

					<nav class="nav-header" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						
						<?php // mobile menu toggle ?>
						<button id="menu-toggle" class="menu-toggle"><span></span> Menu</button>
						
						<?php // menu items ?>
						<div id="nav-menu">
							<div id="nav-menu-curtain">
								<?php wp_nav_menu(array(
									'container' => false,							// remove nav container
									'container_class' => 'nav-menu',				// class of container (should you choose to use it)
									'menu' => __( 'The Main Menu', 'bonestheme' ),	// nav name
									'menu_class' => '',								// adding custom nav class
									'theme_location' => 'main-nav',					// where it's located in the theme
									'before' => '',									// before the menu
									'after' => '',									// after the menu
									'link_before' => '',							// before each link
									'link_after' => '',								// after each link
									'depth' => 0,									// limit the depth of the nav
									'fallback_cb' => ''								// fallback function (if there is one)
								)); ?>
							</div>
						</div>
						
					</nav>

				</div> <?php // end #inner-header .inner-wrap ?>
			</header> <?php // end .header-wrap ?>
