<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
								
								
						<?php /* PANEL 1 */ ?>
						<article id="panel-1" <?php post_class( 'panel panel__projects1' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
									<?php the_content(); // display the content ?>
									
								<?php endwhile; endif; ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects1 ?>
								
								
						<?php /* PANEL 2 */ ?>
						<article id="panel-2" <?php post_class( 'panel panel__projects2' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
									
										<?php echo get_field('panel_projects2'); // display the content ?>
										
										<ul class="projects">
										
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
													<a href="<?php the_permalink(); ?>">
														<figure>
															<?php the_post_thumbnail(); ?>
															<figcaption>View website details &raquo;</figcaption>
														</figure>
														<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
														<h3><?php the_title(); ?></h3>
													</a>
												</li>
												
											<?php endwhile; ?>
											<?php wp_reset_query(); ?>
											
										</ul> <?php // end .projects ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects2 ?>
								
								
						<?php /* PANEL 3 */ ?>
						<article id="panel-3" <?php post_class( 'panel panel__projects3' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_projects3'); // Display the content ?>
								
								<ul class="projects">
								
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
											<a href="<?php the_permalink(); ?>">
												<figure>
													<?php the_post_thumbnail(); ?>
													<figcaption>View website details &raquo;</figcaption>
												</figure>
												<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
												<h3><?php the_title(); ?></h3>
											</a>
										</li>
										
									<?php endwhile; ?>
									<?php wp_reset_query(); ?>
									
								</ul> <?php // end .projects ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects3 ?>
								
								
						<?php /* PANEL 4 */ ?>
						<article id="panel-4" <?php post_class( 'panel panel__projects4' ); ?> role="article">
							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php echo get_field('panel_projects4'); // Display the content ?>
								
								<ul class="projects">
								
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
											<a href="<?php the_permalink(); ?>">
												<figure>
													<?php the_post_thumbnail(); ?>
													<figcaption>View website details &raquo;</figcaption>
												</figure>
												<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
												<h3><?php the_title(); ?></h3>
											</a>
										</li>
										
									<?php endwhile; ?>
									<?php wp_reset_query(); ?>
									
								</ul> <?php // end .projects ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</article> <?php // end .panel .panel__projects4 ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>