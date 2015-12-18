<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div role="main" class="main">
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Contact Us</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>Contact Us</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
	<!-- <div id="googlemaps" class="google-map"> -->
 	<div class="google-container">
 		<?php echo do_shortcode( '[google_map]' ); ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php the_content(); ?>
			</div>
			<div class="col-md-6">
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
<section class="call-to-action call-to-action-default with-button-arrow call-to-action-in-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="call-to-action-content">
					<h3>Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website!</h3>
					<p>The <strong>#1 Selling</strong> HTML Site Template on ThemeForest</p>
				</div>
				<div class="call-to-action-btn">
					<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary">Buy Now!</a><span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -12px;"></span>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>