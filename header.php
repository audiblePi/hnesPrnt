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
							<ul class="nav nav-pills">
								<li class="hidden-xs">
									<a href="/about-hines-printing"><i class="fa fa-angle-right"></i>About Hines Printing</a>
								</li>
								<li class="hidden-xs">
									<a href="/contact-us"><i class="fa fa-angle-right"></i>Contact Us</a>
								</li>
							</ul>
						</nav>
					</div>
					<div class="header-row">
						<div class="header-nav">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										<li class="active"><a href="">Home</a></li>
										<li class="dropdown">
											<a class="dropdown-toggle" href="/printing-services">Printing Services</a>
											<ul class="dropdown-menu">
												<li><a href="/business-cards">Business Cards</a></li>
												<li><a href="/stationery">Stationery</a></li>
												<li><a href="/posters-and-banners">Posters and Banners</a></li>
												<li><a href="/business-forms">Business Forms</a></li>
												<li><a href="/post-cards">Post Cards</a></li>
												<li><a href="/folders-and-envelopes">Folders and Envelopes</a></li>
												<li><a href="/catalogues-and-booklets">Catalogues and Booklets</a></li>
												<li><a href="/brochures-and-flyers">Brochures and Flyers</a></li>
											</ul>
										</li>
										<li><a href="/embroidery">EMBROIDERY</a></li>
										<li><a href="/custom-shirts">CUSTOM SHIRTS</a></li>
										<li><a href="/copy-services">COPY SERVICES</a></li>
										<li class="dropdown">
											<a href="/">SHOP</a>
											<ul class="dropdown-menu">
												<li><a href="/product-category/school-uniforms">School Uniforms</a></li>
												<li><a href="/product-category/apparel">Apparel</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>