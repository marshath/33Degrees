<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								
								
						<?php /* PANEL 1 — CONTENT */ ?>
						<article id="intro" <?php post_class( 'panel panel__projects1' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
									<?php the_content(); // display the content ?>
									
								<?php endwhile; endif; ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects1 ?>
								
								
						<?php /* PANEL 2 — WEBSITE */ ?>
						<article id="website" <?php post_class( 'panel panel__projects2' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<div class="project-icon">
									<svg><use xlink:href="#icon-website"></use></svg>
								</div>
								<?php echo get_field('panel_2'); // display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects2 ?>
								
								
						<?php /* PANEL 3 — LOGO */ ?>
						<article id="branding" <?php post_class( 'panel panel__projects3' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<div class="project-icon">
									<svg><use xlink:href="#icon-logo"></use></svg>
								</div>
								<?php echo get_field('panel_3'); // Display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects3 ?>
								
								
						<?php /* PANEL 4 — DESIGN */ ?>
						<article id="print" <?php post_class( 'panel panel__projects4' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<div class="project-icon">
									<svg><use xlink:href="#icon-design"></use></svg>
								</div>
								<?php echo get_field('panel_4'); // Display the content ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects4 ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
