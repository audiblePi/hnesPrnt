<?php get_header(); ?>
<section id="content-wrapper" role="main">
	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Search</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>Search Results for: &quot;<?php echo get_search_query(); ?>&quot;</h1>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'entry' ); ?>
					<?php endwhile; ?>
					<?php get_template_part( 'nav', 'below' ); ?>
				<?php else : ?>
					<article id="post-0" class="post no-results not-found">
						<header class="header">
							<h2 class="entry-title"><?php _e( 'Nothing Found', 'conure' ); ?></h2>
						</header>
						<section class="entry-content">
							<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'conure' ); ?></p>
						</section>
					</article>
				<?php endif; ?>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<?php
						$sidebarOption = get_field('sidebar_option');
						switch ($sidebarOption){
							case "sidebar1":
							dynamic_sidebar( "Sidebar 1" );
							break;
							case "sidebar2":
							dynamic_sidebar( "Sidebar 2" );
							break;
							case "sidebar3":
							dynamic_sidebar( "Sidebar 3" );
							break;
							case "sidebar4":
							dynamic_sidebar( "Sidebar 4" );
							break;
							default:
							dynamic_sidebar( "Sidebar 1" );
							break;
						}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>