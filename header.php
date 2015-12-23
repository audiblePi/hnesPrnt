<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="x-ua-compatible" content="IE=edge" >
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">	<?php wp_head(); ?>
  	<?php global $up_options; ?>
</head>

<body <?php body_class(); ?>>

<header id="header" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 70, "stickySetTop": "-70px", "stickyChangeLogo": true}'>
	<div class="header-body">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-logo">
						<a href="<?php echo site_url(); ?>">
							<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="40" src="<?php echo custom_logo(); ?>">
						</a>
					</div>
				</div>
				<div class="header-column">
					<div class="header-row">
						<span class="additional-header-info">
							<div class="tagline">
								<?php echo $up_options->tagline; ?>
							</div>
							<div class="phone">
								<?php echo $up_options->phone_number; ?>
							</div>
						</span>
						<nav class="header-nav-top">
							<?php 
							$header_menu = 'header-menu';
							$args = array(
						        'order'                  => 'ASC',
						        'orderby'                => 'menu_order',
						        'post_type'              => 'nav_menu_item',
						        'post_status'            => 'publish',
						        'output'                 => ARRAY_A,
						        'output_key'             => 'menu_order',
						        'nopaging'               => true,
						        'update_post_term_cache' => false );
							if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $header_menu ] ) ) {
								echo "<ul class='nav nav-pills'>";
								$items = wp_get_nav_menu_items( $header_menu, $args ); 
								foreach ( (array) $items as $key => $item ) {
								    $title = $item->title;
								    $url = $item->url;
								    echo "<li class='hidden-xs'><a href='".$url."'><i class='fa fa-angle-right'></i>".$title."</a></li>";
								}
								echo "</ul>";
							}
							?> 
						</nav>
					</div>
					<div class="header-row">
						<div class="header-nav">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<?php 
									$main_menu = 'main-menu';
									$count = 0;
									$submenu = false;
									$args2 = array(
								        'order'                  => 'ASC',
								        'orderby'                => 'menu_order',
								        'post_type'              => 'nav_menu_item',
								        'post_status'            => 'publish',
								        'output'                 => ARRAY_A,
								        'output_key'             => 'menu_order',
								        'nopaging'               => true,
								        'update_post_term_cache' => false );
									if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $main_menu ] ) ) {
										echo "<ul class='nav nav-pills' id='mainNav'>";
										$items = wp_get_nav_menu_items( $main_menu, $args2 ); 
										foreach ( (array) $items as $key => $item ) :
										    $title = $item->title;
										    $url = $item->url;
										    if ( !$item->menu_item_parent ):
										    	$parent_id = $item->ID;
											    if ( ($count < count($items) - 1) && $items[ $count + 1 ] && $items[ $count + 1 ]->menu_item_parent > 0)
											    		echo "<li class='dropdown'><a href='".$url."'>".$title."</a>";											 
											   	else
										    		echo "<li><a href='".$url."'>".$title."</a>";
										    endif;
										    if ( $parent_id == $item->menu_item_parent ):
										    	if ( !$submenu ): 
										    		$submenu = true;
										    		echo "<ul class='dropdown-menu'>";
										    	endif;
										    	echo "<li><a href='".$url."'>".$title."</a></li>";
										    	if ( ($count < count($items) - 1) && $items[ $count + 1 ] && $items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu):
										    		echo "</ul>";
										    		$submenu = false;
										    	endif;
										    endif;
										    if ( ($count < count($items) - 1) && $items[ $count + 1 ] && $items[ $count + 1 ]->menu_item_parent != $parent_id ):
										    	echo "</li>";
										    	$submenu = false; 
										    endif;
										$count++; 
										endforeach;
										echo "</ul>";
									}
									?> 
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>