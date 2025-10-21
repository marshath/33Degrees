<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage">
								
								
						<?php /* COMPANY */ ?>
						<div id="panel-company1" <?php post_class( 'row company-intro' ); ?>>
							<section class="entry-content inner-wrap">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									
								<h1 class="page-title uppercase"><?php the_title(); ?></h1>
								
								<div class="subhead">
									<?php the_content(); // display the content ?>
								</div>
									
								<?php endwhile; endif; ?>
								
							</section> <?php // end .entry-content .inner-wrap ?>
						</div> <?php // end .row .company-intro ?>
						
						
						<?php /* TESTIMONIALS */
						get_template_part('inc/testimonials'); ?>
								
							
						<?php /* SUCCESS */ ?>
						<div id="panel-company2" <?php post_class( 'row company-success' ); ?>>
							<section class="entry-content inner-wrap">
								
								<?php echo get_field('panel_2'); // display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end .row .company-success ?>
								
							
						<?php /* CONTACT */ ?>
						<div id="panel-company3" <?php post_class( 'row company-contact' ); ?>>
							<section class="entry-content inner-wrap">
								
								<a id="contact"></a>
								<?php echo get_field('panel_3'); // display the content
								gravity_form( 1, $display_title = false, $display_description = false, $display_inactive = false, $field_values = null, $ajax = false, $echo = true ); ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end .row .company-contact ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
