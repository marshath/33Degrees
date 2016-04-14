<?php 
/*
 * HEADER PLUGINS
 *
 * Default locations for footer loading plugins is library/js/scripts
 *
 */ ?>

		<?php // TYPEKIT // ?>
		<script src="https://use.typekit.net/cqu0hqz.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		
		<?php // FLEXSLIDER //
			if (is_page(array('home','company')) or is_singular('project')) { // display if Home, Company, or Project post type page ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.flexslider.js"></script>
		<?php } ?>
		<?php // FLEXSLIDER -- TESTIMONIAL SETTINGS
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
		<?php } // FLEXSLIDER -- PROJECT SETTINGS
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