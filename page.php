<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div role="main" class="main">
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
			<div class="col-md-8">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>

			<div class="col-md-4">
				<div class="sidebar">
					<?php
						$sidebarOption = get_field('sidebar_option');
						switch ($sidebarOption){
							case "sidebar1": dynamic_sidebar( "Sidebar 1" );break;
							case "sidebar2": dynamic_sidebar( "Sidebar 2" ); break;
							case "sidebar3": dynamic_sidebar( "Sidebar 3" ); break;
							case "sidebar4": dynamic_sidebar( "Sidebar 4" ); break;
							default: dynamic_sidebar( "Sidebar 1" ); break;
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>