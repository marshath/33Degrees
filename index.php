<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">

					<main id="main" class="main-wrap inner-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
						
						<?php // Display Blog page content
						$id=62; // set page id
						$post = get_post($id); 
						$title = apply_filters('the_title', $post->post_title); // page title
						$content = apply_filters('the_content', $post->post_content); // page content
						echo '<h1 class="page-title" itemprop="headline">' . $title . '</h1><h3>' . $content . '</h3>';  
						?>
						
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article">
							
							<figure>
			                    <?php the_post_thumbnail(); ?>
							</figure>

							<header class="article-header">

								<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
								<p class="byline vcard">
									<?php printf( __( '%2$s on %1$s', 'bonestheme' ),
										// the time the post was published
										'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
										// the author of the post
										'<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person"><a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" title="" rel="author">' . get_the_author('ID') . '</a></span>'
									); ?>
								</p>

							</header>

							<section class="entry-content">
								<?php the_excerpt(); ?>
							</section>

							<footer class="article-footer">
								<p class="footer-comment-count">
									<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
								</p>
								
								<?php printf( '<p class="footer-category">' . __('Filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
								<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Topics:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
							</footer>

						</article> <?php // end #post-<id> .article-wrap ?>

						<?php endwhile; ?>

							<?php bones_page_navi(); ?>

						<?php else : ?>

							<article id="post-not-found" class="article-content">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
									<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article> <?php // end #post-not-found .article-wrap ?>

						<?php endif; ?>

					</main> <?php // end #main .main-wrap .inner-wrap ?>

					<?php get_sidebar(); ?>

				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
