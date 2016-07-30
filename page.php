 <?php get_header(); ?>

			<div id="content" class="wrap">
				<div id="inner-content" class="inner-wrap">

					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

							<header class="article-header">

								<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

							</header> <?php // end .article header ?>

							<section class="entry-content">
								<?php // the content
									the_content();
								?>

							</section> <?php // end .content-entry ?>

							<footer class="article-footer">
							</footer> <?php // end .article-footer ?>

						</div> <?php // end #post-<id> ?>

						<?php endwhile; 
						endif; ?>

					</main> <?php // end #main .main-wrap ?>

				</div> <?php // end #inner-content .inner-wrap ?>
			</div> <?php // end #content .wrap ?>

<?php get_footer(); ?>