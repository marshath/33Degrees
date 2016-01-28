<?php get_header(); ?>

			<div id="content" class="wrap">
				<div id="inner-content" class="inner-wrap">

					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

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
							</footer>

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
