<?php get_header(); ?>

			<div id="content" class="wrap">
				<div id="inner-content">
					
					<main id="main" class="main-wrap" role="main">
								
								
						<?php /* CONTENT */ ?>
						<div id="panel-intro" <?php post_class( 'row portfolio-intro' ); ?>>
							<section class="entry-content inner-wrap">
								
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
									<h1 class="page-title uppercase"><?php the_title(); ?></h1>
									<div class="subhead">
										<?php the_content(); // display the content ?>
									</div>
									
								<?php endwhile; endif; ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end .row .portfolio-intro ?>
								
								
						<?php /* WEBSITE */ ?>
						<a id="website"></a>
						<div id="panel-website" <?php post_class( 'row portfolio-websites' ); ?>>
							<section class="entry-content inner-wrap">
								
								<div class="subhead max-width">
									<?php echo get_field('panel_2'); // display the content ?>
								</div> <?php // end .subhead ?>
								
								<ul class="project-links">
									
									<?php $my3post = array(
										'post_type' => 'project',
										'post_status' => 'publish',
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
										<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
											<figure><?php the_post_thumbnail(''); ?></figure>
											<div class="post-wrap">
												<h3><?php the_title(); ?></h3>
												<?php the_excerpt(); ?>
											</div>
										</a>
										<?php // edit_post_link( __( 'Edit' ), '<p><span class="edit-link">', '</span></p>' ); ?>
									</li>
										
									<?php endwhile; 
										wp_reset_postdata(); ?>
									
								</ul> <?php // end .project-links ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end .row .portfolio-websites ?>
								
								
						<?php /* BRANDING */ ?>
						<a id="branding"></a>
						<div id="panel-branding" <?php post_class( 'row portfolio-branding' ); ?>>
							<section class="entry-content inner-wrap">
								
								<div class="subhead max-width">
									<?php echo get_field('panel_3'); // display the content ?>
								</div> <?php // end .subhead ?>
								
								<ul class="project-links">
									
									<?php  $my3post = array(
										'post_type' => 'project',
										'post_status' => 'publish',
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
										<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
											<figure><?php the_post_thumbnail(''); ?></figure>
											<div class="post-wrap">
												<h3><?php the_title(); ?></h3>
												<?php the_excerpt(); ?>
											</div>
										</a>
										<?php // edit_post_link( __( 'Edit' ), '<p><span class="edit-link">', '</span></p>' ); ?>
									</li>
										
									<?php endwhile; 
										wp_reset_postdata(); ?>
									
								</ul> <?php // end .project-links ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end .row .portfolio-branding ?>
								
								
						<?php /* DESIGN */ ?>
						<a id="design"></a>
						<div id="panel-design" <?php post_class( 'row portfolio-design' ); ?>>
							<section class="entry-content inner-wrap">
								
								<div class="subhead max-width">
									<?php echo get_field('panel_4'); // display the content ?>
								</div>
								
								<ul class="project-links">
									
									<?php $my3post = array( 
										'post_type' => 'project',
										'post_status' => 'publish',
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
										<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
											<figure><?php the_post_thumbnail(''); ?></figure>
											<div class="post-wrap">
												<h3><?php the_title(); ?></h3>
												<?php the_excerpt(); ?>
											</div>
										</a>
										<?php // edit_post_link( __( 'Edit' ), '<p><span class="edit-link">', '</span></p>' ); ?>
									</li>
										
									<?php endwhile; 
										wp_reset_postdata(); ?>
									
								</ul> <?php // end .project-links ?>
								
							</section> <?php // end .entry-content .inner-wrap  ?>
						</div> <?php // end .row .portfolio-design ?>
						
						
					</main> <?php // end #main .main-wrap ?>
					
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>