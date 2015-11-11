										<?php // project page loop ?>
										<li>
											<a href="<?php the_permalink(); ?>" title="View <?php the_title(); ?>" rel="bookmark">
												<figure><?php the_post_thumbnail("thumbnail"); ?>
													<figcaption>
														<?php the_title(); ?> <br>
														<span class="side-moretag">View details &raquo;</span>
													</figcaption>
												</figure>
											</a>
											<?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
										</li>