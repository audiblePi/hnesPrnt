<?php get_header(); ?>
<?php global $up_options;?>
<div role="main" class="main">
	<div class="slider-container light rev_slider_wrapper">
  		<?php putRevSlider("Front Page Slider") ?>
	</div>
	<div class="home-intro" id="home-intro">
		<div class="container">
			<div class="row">
				<?php echo $up_options->section1_content; ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row center">
			<div class="featured-boxes">
				<div class="row">
					<?php 
				    $args = array( 'post_type' => 'service', 'orderby' => '', 'order'=> '', 'posts_per_page'=> '4');
				    $query = new WP_Query($args);
			     	if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
						<div class="col-md-3 col-sm-6">
							<div class="featured-box featured-box-<?php echo get_field('color'); ?> featured-box-effect-1 mt-xlg">
								<div class="box-content">
									<i class="icon-featured <?php echo get_field('icon'); ?>"></i>
									<h4 class="text-uppercase"><?php the_title(); ?></h4>
									<p><?php the_excerpt(); ?></p>
									<p><a href="<?php echo get_field('page_link'); ?>" class="lnk-<?php echo get_field('color'); ?> learn-more">Learn More <i class="fa fa-angle-right"></i></a></p>
								</div>
							</div>
						</div>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<hr class="tall">
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
		      	<?php echo "<h2>".$up_options->section2_title."</h2><span></span>"; ?>
				<div class="row">
					<div class="col-sm-6">
						<?php 
                        $args = array('post_type' =>'page', 'post_parent' => '6', 'orderby' => '', 'order'=> '', 'posts_per_page'=> '8'); //test site
                        //$args = array('post_type' =>'page', 'post_parent' => '20', 'orderby' => '', 'order'=> '', 'posts_per_page'=> '8'); //production site
                        $query = new WP_Query($args);
                        $count = 0;
				     	if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post();
							if ($count == 4) : ?>
								</div><div class="col-sm-6">
							<?php endif; ?>
							<div class="feature-box">
								<div class="feature-box-icon">
									<i class="<?php echo get_field('icon'); ?>"></i>
								</div>
								<div class="feature-box-info">
									<h4 class="heading-primary mb-none"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
									<p class="tall"><?php echo get_field('excerpt'); ?></p>
								</div>
							</div>
						<?php $count++; endwhile; endif; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<?php echo "<h2>".$up_options->section3_title."</h2><span></span>"; ?>
				<div class="panel-group" id="accordion">
					<?php 
                    $args = array('post_type' =>'feature', 'orderby' => '', 'order'=> '', 'posts_per_page'=> '3'); 
                    $query = new WP_Query($args);
                    $count = 0;
                    $in;
			     	if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post();
						if ($count == 0) : $in = "in";
						else : $in = "";
						endif; ?>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#section<?php echo $count; ?>">
										<i class="<?php echo get_field('icon'); ?>"></i>
										<?php the_title(); ?>
									</a>
								</h4>
							</div>
							<div id="section<?php echo $count; ?>" class="accordion-body collapse <?php echo $in; ?>">
								<div class="panel-body">
									<?php the_excerpt(); ?>
								</div>
							</div>
						</div>
					<?php $count++; endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<hr class="tall">
	</div>
	<section class="section section-custom-map">
		<section class="section section-default section-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="recent-posts mb-xl">
							<?php echo "<h2>".$up_options->section4_title."</h2><span></span>"; ?>
							<div class="row">
								<div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
									<ul class="portfolio-list sort-destination lightbox" data-sort-id="portfolio" data-plugin-options='{"delegate": "a.lightbox-portfolio", "type": "image", "gallery": {"enabled": true}}'>										
										<?php 
			                            $args = array('post_type' =>'project'); 
			                            $query = new WP_Query($args);
			                            $count = 0;
								     	if ( $query->have_posts() ): while ( $query->have_posts() ):$query->the_post();
											if ($count > 0 && $count % 2 == 0) : ?>
												</ul><ul class="portfolio-list sort-destination lightbox" data-sort-id="portfolio" data-plugin-options='{"delegate": "a.lightbox-portfolio", "type": "image", "gallery": {"enabled": true}}'>
											<?php endif; ?>
											<li class="col-md-6">
												<div class="portfolio-item">
													<a href="<?php echo get_field('image'); ?>" class="lightbox-portfolio">
														<span class="thumb-info">
															<span class="thumb-info-wrapper" style="height:200px; background:url(<?php echo get_field('image'); ?>) center no-repeat;">
																<span class="thumb-info-title">
																	<span class="thumb-info-inner"><?php the_title(); ?></span>
																	<span class="thumb-info-type"><?php echo get_field('project_type'); ?></span>
																</span>
																<span class="thumb-info-action">
																	<span class="thumb-info-action-icon"><i class="fa fa-search-plus"></i></span>
																</span>
															</span>
														</span>
													</a>
												</div>
											</li>
										<?php $count++; endwhile; endif; wp_reset_postdata(); ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<?php echo "<h2>".$up_options->section5_title."</h2><span></span>"; ?>
						<div class="row">
							<div class="owl-carousel owl-theme mb-none" data-plugin-options='{"items": 1}'>
								<?php 
	                            $args = array('post_type' =>'testimonial'); 
	                            $query = new WP_Query($args);
						     	if ( $query->have_posts() ): while ( $query->have_posts() ): $query->the_post(); ?>
									<div>
										<div class="col-md-12">
											<div class="testimonial testimonial-primary">
												<blockquote>
													<p><?php the_content(); ?></p>
												</blockquote>
												<div class="testimonial-arrow-down"></div>
												<div class="testimonial-author">
													<div class="testimonial-author-thumbnail img-thumbnail">
														<img src="<?php echo get_field('avatar'); ?>" alt="">
													</div>
													<p><strong><?php the_title(); ?></strong><span><?php echo get_field('title'); ?></span></p>
												</div>
											</div>
										</div>
									</div>
								<?php endwhile; endif; wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>
</div>
<?php get_footer(); ?>