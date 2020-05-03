<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage">
								
								
						<?php /* CONTENT */ ?>
						<div id="panel-intro" <?php post_class( 'row services-intro' ); ?>>
							<section class="entry-content inner-wrap">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<h1 class="page-title uppercase"><?php the_title(); ?></h1>
									<div class="subhead">
										<?php the_content(); // display the content ?>
									</div>
								<?php endwhile; endif; ?>
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end .panel .panel__projects1 ?>
								
								
						<?php /* WEBSITE */ ?>
						<div id="panel-website" <?php post_class( 'row services-websites' ); ?>>
							<section class="entry-content inner-wrap">
								<div>
									<?php echo get_field('panel_2'); // display the content ?>
								</div>
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end .panel .panel__projects2 ?>
								
								
						<?php /* LOGO */ ?>
						<div id="panel-branding" <?php post_class( 'row services-branding' ); ?>>
							<section class="entry-content inner-wrap">
								<div><?php echo get_field('panel_3'); // Display the content ?></div>
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end .panel .panel__projects3 ?>
								
								
						<?php /* DESIGN */ ?>
						<div id="panel-design" <?php post_class( 'row services-design' ); ?>>
							<section class="entry-content inner-wrap">
								<div><?php echo get_field('panel_4'); // Display the content ?></div>
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end .panel .panel__projects4 ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
