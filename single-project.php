<?php get_header(); ?>

			<div id="content" class="wrap">
				<div id="inner-content">

					<main id="main" class="main-wrap" role="main" <?php // itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog" ?> >

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
							
							<div class="inner-wrap">
								<div class="flex-section-container">
									<div class="flexslider">
										<ul class="slides">
											
										<?php if ( have_rows('gallery') ) {
											while ( have_rows('gallery') ) {
												the_row();
												
												$image = get_sub_field('artwork');
												$title = get_sub_field('artwork_title'); ?>
												
												<li><figure><img src='<?php echo $image; ?>' alt='<?php echo $title; ?>'></figure></li>
											
											<?php } // endwhile ?>
											
										<?php } // endif ?>
										
										</ul>
									</div>
								</div>
							</div>

							<header class="article-header inner-wrap">
								<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>
							</header>

							<section class="entry-content inner-wrap" itemprop="articleBody">
								
								<?php the_content(); ?>
								
								<?php if ($website = get_field('website')) { // if there is a URL, display a link ?>
								
									<div class="website-link">
									    <p class="tags"><span class="tags-title">Visit:</span> <a class="btn__alt" href="http://<?php echo $website; ?>" target="_blank" rel="nofollow"><?php echo $website; ?></a></p>
									</div>
									
								<?php } ?>
								
							</section> <?php // end .entry-content ?>

							<div class="comments">
								<?php comments_template(); ?>
							</div>

						</article> <?php // #post-<id> ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found">
								<header class="article-header">
									<h1><?php _e( 'Oops, Project Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
									<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article> <?php // #post-not-found .inner-wrap ?>

						<?php endif; ?>

					</main> <?php // #main .main-wrapp ?>

					<?php get_sidebar(); ?>

				</div> <?php // end #inner-content .inner-wrap ?>
			</div> <?php // end #content .wrap ?>

<?php get_footer(); ?>
