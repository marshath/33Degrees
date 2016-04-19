<?php get_header(); ?>

			<div id="content" class="wrap">
				<div id="inner-content" class="">

					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						
						<div class="blog-intro">
							<section class="inner-wrap">
								
							<?php if (is_category()) { ?>
								<h1 class="archive-title"><span><?php _e( 'Posts Categorized:', 'bonestheme' ); ?></span> <?php single_cat_title(); ?></h1>
	
							<?php } elseif (is_tag()) { ?>
								<h1 class="archive-title"><span><?php _e( 'Posts Tagged:', 'bonestheme' ); ?></span> <?php single_tag_title(); ?></h1>
	
							<?php } elseif (is_author()) {
								global $post;
								$author_id = $post->post_author; ?>
								<h1 class="archive-title"><span><?php _e( 'Posts By:', 'bonestheme' ); ?></span> <?php the_author_meta('display_name', $author_id); ?></h1>
								
							<?php } elseif (is_day()) { ?>
								<h1 class="archive-title"><span><?php _e( 'Daily Archives:', 'bonestheme' ); ?></span> <?php the_time('l, F j, Y'); ?></h1>
	
							<?php } elseif (is_month()) { ?>
								<h1 class="archive-title"><span><?php _e( 'Monthly Archives:', 'bonestheme' ); ?></span> <?php the_time('F Y'); ?></h1>
	
							<?php } elseif (is_year()) { ?>
								<h1 class="archive-title"><span><?php _e( 'Yearly Archives:', 'bonestheme' ); ?></span> <?php the_time('Y'); ?></h1>
							<?php } ?>
							
								<?php // BLOG SEARCH ?>
								<div class="blog-search"><?php get_search_form(); ?></div>
								
								<?php // BLOG CATEGORIES ?>
								<div class="blog-categories">
									<h3>Categories:</h3>
									<ul>
										<?php wp_list_categories('title_li='); ?>
									</ul>
								</div><?php // .sidebar__categories ?>
						
							</section> <?php // end .inner-wrap ?>
						</div> <?php // end .blog-intro ?>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-archive inner-wrap' ); ?> role="article">
							
							<figure>
			                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(''); ?></a>
							</figure>

							<div class="post-wrap">
								<header class="article-header">
									
									<div class="byline">
										<?php printf( __( '%1$s %2$s', 'bonestheme' ),
											// the time the post was published
											'<span class="screen-reader-text">Published on</span> <time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
											// the author of the post - hidden text
											'<span class="screen-reader-text">by <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="" rel="author">' . get_the_author('ID') . '</a></span></span> in' );
										?> <span class="entry-category"><?php printf( get_the_category_list(', ') ); ?></span>
									</div><?php // end .byline ?>
	
									<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									
								</header>
	
								<section class="entry-content">
									<?php the_excerpt(); ?>
								</section>
							</div>

						</article> <?php // end #post-<id> .article-wrap .inner-wrap ?>

						<?php endwhile; ?>

							<div class="pagination-margin inner-wrap"><?php bones_page_navi(); ?></div>

						<?php else : ?>

							<article id="post-not-found" class="inner-wrap">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
									<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article> <?php // end #post-not-found .inner-wrap ?>

						<?php endif; ?>

					</main> <?php // end #main .main-wrap .inner-wrap ?>

				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
