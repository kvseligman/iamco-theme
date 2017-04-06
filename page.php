<?php get_header(); ?>

			<div id="content">



					<?php
					// check if the flexible content field has rows of data
					if( have_rows('page_layout') ):

						// loop through the rows of data
							while ( have_rows('page_layout') ) : the_row();

							// check current row layout
									if( get_row_layout() == 'full_width_text' ):?>
								       <?php
											 $display_image = get_sub_field('image');
												$title = get_sub_field('title');
												$subtitle = get_sub_field('subtitle');
												$button = get_sub_field('button');

												?>

												<section class="hero-section <?php the_sub_field('custom_class'); ?>">
													<div class="full_width_text" >
														<img src="<?php echo $display_image['url']; ?>" alt="<?php echo $display_image['alt']; ?>" />
															<div class="inner-wrapper section-wrapper hero-content">
																<h1><?php echo $title; ?></h1>
																<h4><?php echo $subtitle; ?></h4>
																<div class="btn-section">
																<?php if( have_rows('button') ): ?>
																		 <?php while( have_rows('button') ): the_row(); ?>
																					 <a class="btn-main" href="<?php the_sub_field('page-link'); ?>"><?php the_sub_field('text'); ?></a>
																		 <?php endwhile; ?>
																<?php endif; ?>
															</div>
														</div>

												</div>

	 										 </section>

										 <?php elseif (get_row_layout() == 'hero_banner' ):?>
													 <?php
														$display_image = get_sub_field('image');
														$title = get_sub_field('title');
														?>

												 <section class="hero-section <?php the_sub_field('custom_class'); ?>">
			 											<img src="<?php echo $display_image['url']; ?>" alt="<?php echo $display_image['alt']; ?>" />
			 													<h1><?php echo $title; ?></h1>
			 	 								</section>



										 <?php elseif (get_row_layout() == 'specials' ):?>

												 <?php if( have_rows('specials') ): ?>
															<?php while( have_rows('specials') ): the_row(); ?>
																<?php
																$display_image = get_sub_field('image');
																?>

													 <div class="specials-section inner-wrapper">
														 <div class="special">
															 <img src="<?php echo $display_image['url']; ?>" alt="<?php echo $display_image['alt']; ?>" />
														</div>
														</div>
												<?php endwhile; ?>
									 <?php endif; ?>

								 <?php elseif (get_row_layout() == 'body_content' ):?>
										<?php
										 $title = get_sub_field('title');
										 $body = get_sub_field('body');
										 ?>

										<div class="body-content section-wrapper <?php the_sub_field('custom_class'); ?>">
											<div class="inner-wrapper">
											<h1><?php echo $title; ?></h1>
											<p><?php echo $body; ?></p>
											<?php if( have_rows('button') ): ?>
													 <?php while( have_rows('button') ): the_row(); ?>
																 <a class="btn-main" href="<?php the_sub_field('page-link'); ?>"><?php the_sub_field('text'); ?></a>
													 <?php endwhile; ?>
											<?php endif; ?>
										</div>
										</div>

									<?php elseif (get_row_layout() == 'text_with_image' ):?>
										 <?php
											$title = get_sub_field('title');
											$body = get_sub_field('body');
											$display_image = get_sub_field('image');
											?>

										 <div class="text-with-image section-wrapper <?php the_sub_field('custom_class'); ?>">
											 <div class="inner-wrapper">
											 <h1><?php echo $title; ?></h1>
											 <p><?php echo $body; ?></p>
											 <img src="<?php echo $display_image['url']; ?>" alt="<?php echo $display_image['alt']; ?>" />
										 </div>
										 </div>

								 <?php elseif (get_row_layout() == 'four_column_layout' ):?>
									 	<div class="how-it-works">
										 <?php if( have_rows('column') ): ?>
													<?php while( have_rows('column') ): the_row(); ?>
														<?php
														$title = get_sub_field('title');
														$display_image = get_sub_field('image');
														$body = get_sub_field('body');
														?>

											 <div class="column-layout">
													 <img src="<?php echo $display_image['url']; ?>" alt="<?php echo $display_image['alt']; ?>" />
												 <h1><?php echo $title; ?></h1>
												 <p><?php echo $body; ?></p>
												</div>
										<?php endwhile; ?>
							 <?php endif; ?>
						 </div>

						 <?php elseif (get_row_layout() == 'brands' ):?>
							 <?php
							 $title = get_sub_field('title');
							 ?>

							 <div class="brands section-wrapper">
								 <h1><?php echo $title; ?></h1>

								 <?php if( have_rows('brand_logos') ): ?>
											<?php while( have_rows('brand_logos') ): the_row(); ?>
												<?php
												$image = get_sub_field('image');
												?>

											 <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

								<?php endwhile; ?>
					 <?php endif; ?>
					 </div>



							 <?php elseif (get_row_layout() == 'testimonial_banner' ):?>
												<?php
													$image = get_sub_field('background_image');
													$quote = get_sub_field('quote');
													$author = get_sub_field('author');
													?>

								 <section class="testimonial-banner background-image" style="background-image: url('<?php echo $image['url']; ?>');">
										<div class="testimonial-box">
											<div class="testimonial-content">
                        <h4><?php echo $quote; ?></h4>
												<h5><?php echo $author; ?></h5>
											</div>
										</div>
  							 </section>


							 <?php elseif (get_row_layout() == 'blog_overview' ):?>
								 <?php
								 $overview_title = get_sub_field('title');
								 ?>
								 <section class="section-wrapper inner-wrapper blog-overview">
									 <h1><?php echo $overview_title; ?></h1>
  									<?php if( have_rows('blog_category') ): ?>
  									 <?php while( have_rows('blog_category') ): the_row(); ?>
					  										 <?php
					  										 $title = get_sub_field('title');
					  										 $image = get_sub_field('background_image');
					  										 ?>
				  										 		<div class="blog-category background-image" style="background-image: url('<?php echo $image['url']; ?>');">
																			<div class="blog-category-button">
																		<?php if( have_rows('button') ): ?>
				  														 <?php while( have_rows('button') ): the_row(); ?>
				  															 <a class="btn-category" href="<?php the_sub_field('page-link'); ?>"><?php the_sub_field('text'); ?></a>
				  														 <?php endwhile; ?>
				  											<?php endif; ?>
															</div>
				  									 	</div>
													<?php endwhile; ?>
									 <?php endif; ?>
								 </section>


							 <?php elseif (get_row_layout() == 'list' ):?>
								 		<?php
										$title = get_sub_field('title');
										$icon = get_sub_field('icon');
								  	?>

                  <div class="values-list section-wrapper">
										<h3><?php echo $title; ?></h3>
									 <?php if( have_rows('list_item') ): ?>
												<?php while( have_rows('list_item') ): the_row(); ?>
													<?php
													$text = get_sub_field('text');
													?>


											 <ul>
											 	 <li class="tick" style="background-image: url('<?php echo $icon['url']; ?>')"><?php echo $text; ?></li>
											 </ul>


									<?php endwhile; ?>
						 <?php endif; ?>
						 </div>



							 <?php elseif (get_row_layout() == 'join_newsletter'):?>
								<?php
								$title = get_sub_field('title');
								$subtitle = get_sub_field('subtitle');
								$body= get_sub_field('body');
	              $display_image1 = get_sub_field('image_left');
								$display_image2 = get_sub_field('image_right');									?>
								<section class="section-wrapper join-newsletter">

											<div class="blog-category background-image">
        											<div class="image-left"><img src="<?php echo $display_image['url']; ?>" alt="<?php echo $display_image1['alt']; ?>" /></div>
															<div class="image-right"><img src="<?php echo $display_image['url']; ?>" alt="<?php echo $display_image2['alt']; ?>" /></div>
															<h1><?php echo $title; ?></h1>
															<h3><?php echo $subtitle; ?></h3>
															<p><?php echo $body; ?></p>
											</div>

								</section>


			 <?php
					 endif;
				 endwhile;
			 endif;
				?>


 							<section class="email-sign-up section-wrapper">

         						<h1><?php the_field('title','option'); ?></h1>
 										<h3><?php the_field('subtitle','option'); ?></h3>
 										<p><?php the_field('body','option'); ?></p>




 						</section>

		</div>




<?php get_footer(); ?>
