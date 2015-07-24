<?php //---- Blog post details including author, author photo, publish date, and category ----// ?>  
				<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
	            <div class="entry-meta">
		            <?php if (is_single()) {?><figure><?php userphoto_the_author_thumbnail(); ?></figure><? } ?>
					<div class="entry-author">By <?php the_author_posts_link('author') ?></div>
					<div class="entry-date">Published <?php the_time('F jS, Y') ?></div>
					<div class="entry-cat"><?php the_category(', ') ?> // <?php comments_number(); ?></div>
				</div>