<?php 
/*
Template Name: Woocommerce Full
*/
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div role="main" class="main shop">
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active"><?php the_title(); ?></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>