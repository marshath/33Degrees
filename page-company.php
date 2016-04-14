<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage">
								
								
						<?php /* COMPANY */ ?>
						<div id="panel-company1" <?php post_class( 'row company-intro' ); ?>>
							<section class="entry-content inner-wrap">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									
									<h1 class="page-title"><?php the_title(); ?></h1>
									
									<div class="subhead">
										<?php the_content(); // display the content ?>
									</div>
									
								<?php endwhile; endif; ?>
								
							</section> <?php // end .entry-content .inner-wrap ?>
						</div> <?php // end .row .company-intro ?>
						
						
						<?php /* NEWSLETTER */
						get_template_part('inc/testimonials'); ?>
								
							
						<?php /* SUCCESS */ ?>
						<div id="panel-company2" <?php post_class( 'row company-success' ); ?>>
							<section class="entry-content inner-wrap">
								
								<?php echo get_field('panel_2'); // display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end .row .company-success ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
