<?php get_header(); ?>

			<div id="content" class="wrap">
				<div id="inner-content" class="inner-wrap">

						<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							
							<?php // Display Blog page content
							$id=7; // set page id
							$post = get_post($id); 
							$title = apply_filters('the_title', $post->post_title); // page title
							$content = apply_filters('the_content', $post->post_content); // page content
							echo '<h1 class="page-title" itemprop="headline">' . $title . '</h1>' . $content ;  
							?>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
							<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?> role="article">
								
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
					
				</div> <?php // end #inner-content .inner-wrap ?>
			</div> <?php // end #content .wrap ?>

<?php get_footer(); ?>
