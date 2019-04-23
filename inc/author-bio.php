<?php //--- Get Blog Author information --// ?>
				<div id="author-info" class="author-meta">
					<div class="author-avatar">
						<?php userphoto_the_author_photo(); ?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s' ), get_the_author() ); ?></h2>
						<?php $backOrder = get_the_author_meta('aim'); // is this product on Backorder
							if ($backOrder) {
								echo "<p class='author-twitter'><span class='icon' aria-hidden='true' data-icon='&#xe007;'></span> <a href='https://twitter.com/#!/$backOrder'>@$backOrder</a></p>";
							} else {
								echo "";
							} 
						?>
						<p><?php the_author_meta( 'description' ); ?></p>
						<?php if (is_single()) { // displays author post link on blog pages ?>
							<div class="author-link">
								<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>' ), get_the_author() ); ?>
								</a>
							</div><!-- .author-link	-->
						<?php } ?>
					</div><!-- .author-description -->
				</div><!-- .author-info -->