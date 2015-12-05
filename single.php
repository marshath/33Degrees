<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">

					<main id="main" class="main-wrap inner-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						
						<div class="inner-wrap breadcrumb"><a href="<?php echo home_url(); ?>/blog/" title="Back to blog">‹ Our Blog</a></div>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part( 'post-formats/format', get_post_format() ); ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article> <?php // #post-not-found .inner-wrap ?>

						<?php endif; ?>

					</main> <?php // #main .main-wrap .inner-wrap ?>

					<?php get_sidebar(); ?>

				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
