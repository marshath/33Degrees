<?php get_header(); ?>

			<div id="content" class="wrap">
				<div id="inner-content">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								
								
						<?php /* PANEL 1 — CONTENT */ ?>
						<article id="panel-intro" <?php post_class( 'row portfolio-intro' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
									<h1 class="page-title"><?php the_title(); ?></h1>
									<div class="subhead">
										<?php the_content(); // display the content ?>
									</div>
									
								<?php endwhile; endif; ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .row .portfolio-intro ?>
								
								
						<?php /* PANEL 2 — WEBSITE */ ?>
						<article id="panel-website" <?php post_class( 'row portfolio-websites' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<div class="subhead">
									<?php echo get_field('panel_2'); // display the content ?>
								</div> <?php // end .subhead ?>
								
								<ul class="project-links">
								
									<?php query_posts(array('post_type'=>'project')); // Query projects for category: website ?>
									
									<?php $my3post = array(
										'post_type' => 'project',
										'tax_query' => array(
											array(
												'taxonomy' => 'classification',
												'field' => 'slug',
												'terms' => 'website'
											)
										)
									);
									$projloop = new WP_Query( $my3post ); 
									while ( $projloop->have_posts() ) : $projloop->the_post(); ?>
							
									<li>
										<?php the_post_thumbnail(''); ?>
										<h3><a href="<?php the_permalink(); ?>" title="View <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
										<p><?php the_excerpt(); ?></p>
										<?php // edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
									</li>
										
									<? endwhile; ?>
									<?php wp_reset_query(); ?>
									
								</ul> <?php // end .project-links ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .row .portfolio-websites ?>
								
								
						<?php /* PANEL 3 — BRANDING */ ?>
						<article id="panel-branding" <?php post_class( 'row portfolio-branding' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<div class="subhead">
									<?php echo get_field('panel_3'); // display the content ?>
								</div> <?php // end .subhead ?>
								
								<ul class="project-links">
								
									<?php query_posts(array('post_type'=>'project')); // Query projects for category: website ?>
									
									<?php $my3post = array(
										'post_type' => 'project',
										'tax_query' => array(
											array(
												'taxonomy' => 'classification',
												'field' => 'slug',
												'terms' => 'branding'
											)
										)
									);
									$projloop = new WP_Query( $my3post ); 
									while ( $projloop->have_posts() ) : $projloop->the_post(); ?>
							
									<li>
										<?php the_post_thumbnail(''); ?>
										<h3><a href="<?php the_permalink(); ?>" title="View <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
										<p><?php the_excerpt(); ?></p>
										<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
									</li>
										
									<? endwhile; ?>
									<?php wp_reset_query(); ?>
									
								</ul> <?php // end .project-links ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .row .portfolio-branding ?>
								
								
						<?php /* PANEL 4 — DESIGN */ ?>
						<article id="panel-design" <?php post_class( 'row portfolio-design' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<div class="subhead">
									<?php echo get_field('panel_4'); // display the content ?>
								</div>
								
								<ul class="project-links">
								
									<?php query_posts(array('post_type'=>'project')); // Query projects for category: print ?>
									
									<?php $my3post = array( 
										'post_type' => 'project',
										'tax_query' => array(
											array(
												'taxonomy' => 'classification',
												'field' => 'slug',
												'terms' => 'print'
											)
										) );
										
									$projloop = new WP_Query( $my3post ); 
									while ( $projloop->have_posts() ) : $projloop->the_post(); ?>
							
									<li>
										<?php the_post_thumbnail(''); ?>
										<h3><a href="<?php the_permalink(); ?>" title="View <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
										<p><?php the_excerpt(); ?></p>
										<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
									</li>
										
									<? endwhile; ?>
									<?php wp_reset_query(); ?>
									
								</ul> <?php // end .project-links ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .row .portfolio-design ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
