<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">

					<main id="main" class="main-wrap inner-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

							<header class="article-header">
								<h1 class="single-title"><?php the_title(); ?></h1>
							</header>

							<section class="entry-content">
								<img height="500px">
								<?php the_content(); ?>
							</section> <?php // end .entry-content ?>

							<footer class="article-footer">
								<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">' . __( 'Custom Tags:', 'bonestheme' ) . '</span> ', ', ' ) ?></p>
							</footer>

							<?php comments_template(); ?>

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

					</main> <?php // #main .main-wrap .inner-wrap ?>

					<?php get_sidebar(); ?>

				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
