<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">
					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'inner-wrap' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<section class="entry-content" itemprop="articleBody">
								<?php // the content
									the_content();
								?>
							</section> <?php // end .content-entry ?>
							
						</article> <?php // end #post-<id> .article-wrap ?>

						<?php endwhile; endif; ?>

					</main> <?php // end #main .main-wrap ?>
				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
