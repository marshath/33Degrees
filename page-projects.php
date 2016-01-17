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
									<svg><use xlink:href="#icon-website"></use></svg> Website design
								</div>
								
								<ul class="overlay-links">
								
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
										<a href="<?php the_permalink(); ?>" title="View <?php the_title(); ?>" rel="bookmark">
											<figure><?php the_post_thumbnail("thumbnail"); ?>
												<figcaption>
													<?php the_title(); ?> <br>
													<span class="moretag__slide">View details &raquo;</span>
												</figcaption>
											</figure>
										</a>
										<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
									</li>
										
									<? endwhile; ?>
									<?php wp_reset_query(); ?>
									
								</ul> <?php // end .projects ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects2 ?>
								
								
						<?php /* PANEL 3 — LOGO */ ?>
						<article id="branding" <?php post_class( 'panel panel__projects3' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<div class="project-icon">
									<svg><use xlink:href="#icon-logo"></use></svg> Logo design
								</div>
								
								<ul class="overlay-links">
								
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
										<a href="<?php the_permalink(); ?>" title="View <?php the_title(); ?>" rel="bookmark">
											<figure><?php the_post_thumbnail("thumbnail"); ?>
												<figcaption>
													<?php the_title(); ?> <br>
													<span class="moretag__slide">View details &raquo;</span>
												</figcaption>
											</figure>
										</a>
										<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
									</li>
										
									<? endwhile; ?>
									<?php wp_reset_query(); ?>
									
								</ul> <?php // end .projects ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects3 ?>
								
								
						<?php /* PANEL 4 — DESIGN */ ?>
						<article id="print" <?php post_class( 'panel panel__projects4' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<div class="project-icon">
									<svg><use xlink:href="#icon-design"></use></svg> Graphic Design
								</div>
								
								<ul class="overlay-links">
								
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
										<a href="<?php the_permalink(); ?>" title="View <?php the_title(); ?>" rel="bookmark">
											<figure><?php the_post_thumbnail("thumbnail"); ?>
												<figcaption>
													<?php the_title(); ?> <br>
													<span class="moretag__slide">View details &raquo;</span>
												</figcaption>
											</figure>
										</a>
										<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
									</li>
										
									<? endwhile; ?>
									<?php wp_reset_query(); ?>
									
								</ul> <?php // end .projects ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects4 ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
