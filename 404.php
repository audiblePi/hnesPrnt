<?php get_header(); ?>
<div role="main" class="main">
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">404 - Page Not Found</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>404 - Page Not Found</h1>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<section class="page-not-found">
					<div class="page-not-found-main">
						<h2>404 <i class="fa fa-file"></i></h2>
						<p>We're sorry, but the page you were looking for doesn't exist.</p>
					</div>
				</section>
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
<?php get_footer(); ?>