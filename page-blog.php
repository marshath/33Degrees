<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">

					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'inner-wrap' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header">

								<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

							</header> <?php // end .article header ?>

							<section class="entry-content" itemprop="articleBody">
								<?php // the content
									the_content();
								?>
							</section> <?php // end .content-entry ?>

							<footer class="article-footer">

							</footer> <?php // end .article-footer ?>

						</article> <?php // end #post-<id> .inner-wrap ?>

						<?php endwhile; 
						endif; ?>

					</main> <?php // end #main .main-wrap ?>

					<?php get_sidebar(); ?>

				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
