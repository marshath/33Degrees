<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								
								
						<?php /* PANEL 1 — CONTENT */ ?>
						<article id="panel-intro" <?php post_class( 'row services-intro' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									
									<h1 class="page-title"><?php the_title(); ?></h1>
									<div class="subhead">
										<?php the_content(); // display the content ?>
									</div>
									
								<?php endwhile; endif; ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects1 ?>
								
								
						<?php /* PANEL 2 — WEBSITE */ ?>
						<article id="panel-website" <?php post_class( 'row services-websites' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_2'); // display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects2 ?>
								
								
						<?php /* PANEL 3 — LOGO */ ?>
						<article id="panel-branding" <?php post_class( 'row services-branding' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_3'); // Display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects3 ?>
								
								
						<?php /* PANEL 4 — DESIGN */ ?>
						<article id="panel-design" <?php post_class( 'row services-design' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_4'); // Display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects4 ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
