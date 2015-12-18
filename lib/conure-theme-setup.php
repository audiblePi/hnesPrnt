<?php

/*This file is used for setting up WP Core theme options*/

/*Enqueue Scripts*/
function conure_load_scripts(){
	wp_enqueue_style( 'bxslidercss', get_template_directory_uri() . '/assets/js/jquery.bxslider/jquery.bxslider.css' );
	wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'fa', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'simpleline', get_template_directory_uri() . '/assets/css/simple-line-icons/css/simple-line-icons.min.css' );
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel/assets/owl.carousel.min.css' );
	wp_enqueue_style( 'owltheme', get_template_directory_uri() . '/assets/css/owl.carousel/assets/owl.theme.default.min.css' );
	wp_enqueue_style( 'magpop', get_template_directory_uri() . '/assets/css/magnific-popup/magnific-popup.min.css' );
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/theme.css' );
	wp_enqueue_style( 'theme-elements', get_template_directory_uri() . '/assets/css/theme-elements.css' );
	wp_enqueue_style( 'theme-blog', get_template_directory_uri() . '/assets/css/theme-blog.css' );
	wp_enqueue_style( 'theme-shop', get_template_directory_uri() . '/assets/css/theme-shop.css' );
	wp_enqueue_style( 'theme-animate', get_template_directory_uri() . '/assets/css/theme-animate.css' );
	wp_enqueue_style( 'rs-settings', get_template_directory_uri() . '/assets/css/rs-plugin/css/settings.css' );
	wp_enqueue_style( 'rs-layers', get_template_directory_uri() . '/assets/css/rs-plugin/css/layers.css' );
	wp_enqueue_style( 'rs-navigation', get_template_directory_uri() . '/assets/css/rs-plugin/css/navigation.css' );
	wp_enqueue_style( 'circle-flip', get_template_directory_uri() . '/assets/circle-flip-slideshow/css/component.css' );
	wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/skins/default.css' );
	wp_enqueue_style( 'customcss', get_template_directory_uri() . '/assets/css/custom.css' );

	// wp_enqueue_script( 'jquery' );
	// wp_enqueue_script( 'bxsliderjs', get_template_directory_uri() . '/assets/js/jquery.bxslider/jquery.bxslider.js' );
	// wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );
	wp_enqueue_script( 'madenizerjs', get_template_directory_uri() . '/assets/js/modernizr/modernizr.min.js' );
	// wp_enqueue_script( 'jqueryappear', get_template_directory_uri() . '/assets/js/jquery.appear/jquery.appear.min.js' );
	// wp_enqueue_script( 'jqueryeasing', get_template_directory_uri() . '/assets/js/jquery.easing/jquery.easing.min.js' );
	// wp_enqueue_script( 'jquerycookie', get_template_directory_uri() . '/assets/js/jquery-cookie/jquery-cookie.min.js' );
	// wp_enqueue_script( 'common', get_template_directory_uri() . '/assets/js/common/common.min.js' );
	// wp_enqueue_script( 'validation', get_template_directory_uri() . '/assets/js/jquery.validation/jquery.validation.min.js' );
	// wp_enqueue_script( 'stellar', get_template_directory_uri() . '/assets/js/jquery.stellar/jquery.stellar.min.js' );
	// wp_enqueue_script( 'piechart', get_template_directory_uri() . '/assets/js/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js' );
	// wp_enqueue_script( 'gmap', get_template_directory_uri() . '/assets/js/jquery.gmap/jquery.gmap.min.js' );
	// wp_enqueue_script( 'lazyload', get_template_directory_uri() . '/assets/js/jquery.lazyload/jquery.lazyload.min.js' );
	// wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope/jquery.isotope.min.js' );
	// wp_enqueue_script( 'owljs', get_template_directory_uri() . '/assets/js/owl.carousel/owl.carousel.min.js' );
	// wp_enqueue_script( 'magpopjs', get_template_directory_uri() . '/assets/js/magnific-popup/jquery.magnific-popup.min.js' );
	// wp_enqueue_script( 'vide', get_template_directory_uri() . '/assets/js/vide/vide.min.js' );
	// wp_enqueue_script( 'themejs', get_template_directory_uri() . '/assets/js/theme.js' );
	// wp_enqueue_script( 'rs', get_template_directory_uri() . '/assets/js/rs-plugin/js/jquery.themepunch.tools.min.js' );
	// wp_enqueue_script( 'rsrev', get_template_directory_uri() . '/assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js' );
	// wp_enqueue_script( 'flipjs', get_template_directory_uri() . '/assets/circle-flip-slideshow/js/jquery.flipshow.min.js' );
	// wp_enqueue_script( 'viewhomejs', get_template_directory_uri() . '/assets/js/views/view.home.js' );
	// wp_enqueue_script( 'customjs', get_template_directory_uri() . '/assets/js/custom.js' );
	// wp_enqueue_script( 'themeinitjs', get_template_directory_uri() . '/assets/js/custom.js' );
	// wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );
}

function conure_title( $title ){
	if ( $title == '' ) {
		return '&rarr;';
	} else {
		return $title;
	}
}

/*Append Blog Name to Page Title*/
function conure_filter_wp_title( $title ){
	return $title . esc_attr( get_bloginfo( 'name' ) );
}

/*Setup Widgets*/
function conure_widgets_init(){
	register_sidebar( array (
	                 'name' => __( 'Sidebar 1', 'conure' ),
	                 'id' => 'primary-widget-area-1',
	                 'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	                 'after_widget' => '<hr></div>',
	                 'before_title' => '<h4 class="widget-title">',
	                 'after_title' => '</h4>',
	                 ) );

	register_sidebar( array (
	                 'name' => __( 'Sidebar 2', 'conure' ),
	                 'id' => 'primary-widget-area-2',
	                 'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	                 'after_widget' => '<hr></div>',
	                 'before_title' => '<h4 class="widget-title">',
	                 'after_title' => '</h4>',
	                 ) );

	register_sidebar( array (
	                 'name' => __( 'Sidebar 3', 'conure' ),
	                 'id' => 'primary-widget-area-3',
	                 'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	                 'after_widget' => '<hr></div>',
	                 'before_title' => '<h4 class="widget-title">',
	                 'after_title' => '</h4>',
	                 ) );

	register_sidebar( array (
	                 'name' => __( 'Sidebar 4', 'conure' ),
	                 'id' => 'primary-widget-area-4',
	                 'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	                 'after_widget' => '<hr></div>',
	                 'before_title' => '<h4 class="widget-title">',
	                 'after_title' => '</h4>',
	                 ) );



	register_sidebar( array (
	                 'name' => __( 'Footer Widget Left', 'conure' ),
	                 'id' => 'footer-widget-left',
	                 'before_widget' => '<div id="%1$s" class="footer-widget-container %2$s">',
	                 'after_widget' => '</div>',
	                 'before_title' => '<h3 class="widget-title">',
	                 'after_title' => '</h3>',
	                 ) );
	register_sidebar( array (
	                 'name' => __( 'Footer Widget Left Center', 'conure' ),
	                 'id' => 'footer-widget-left-center',
	                 'before_widget' => '<div id="%1$s" class="footer-widget-container %2$s">',
	                 'after_widget' => '</div>',
	                 'before_title' => '<h3 class="widget-title">',
	                 'after_title' => '</h3>',
	                 ) );
	register_sidebar( array (
	                 'name' => __( 'Footer Widget Right Center', 'conure' ),
	                 'id' => 'footer-widget-right-center',
	                 'before_widget' => '<div id="%1$s" class="footer-widget-container %2$s">',
	                 'after_widget' => '</div>',
	                 'before_title' => '<h3 class="widget-title">',
	                 'after_title' => '</h3>',
	                 ) );
	register_sidebar( array (
	                 'name' => __( 'Footer Widget Right', 'conure' ),
	                 'id' => 'footer-widget-right',
	                 'before_widget' => '<div id="%1$s" class="footer-widget-container %2$s">',
	                 'after_widget' => '</div>',
	                 'before_title' => '<h3 class="widget-title">',
	                 'after_title' => '</h3>',
	                 ) );
	
}

/*Skin WP-Admin login screen*/
function custom_login_logo(){
	echo '
	<style type="text/css">
	body.login { background-color: #fff !important; }
	#loginform { background-color: #515151 !important; }
	.login #nav a, .login #backtoblog a { color: #9B9B9B !important; }
	.wp-core-ui .button-primary { background: #000000; border-color: #000000 !important; -webkit-box-shadow: inset 0 1px 0 rgba(230, 230, 230, 0.5),0 1px 0 rgba(0,0,0,.15) !important; box-shadow: inset 0 1px 0 rgba(230,230,230,.5),0 1px 0 rgba(0,0,0,.15); color: #fff; text-decoration: none; }
	.wp-core-ui .button-primary:hover { background-color: #2E2E2E !important; }
	h1 a { background-size:100% !important; background-image: url('.custom_logo().') !important; }
	.login form { background-color: #333333 !important; }
	#login form p, .login label { color: #fff; }
	.login .message { border-left: 4px solid #C62602; }
	</style>';
}

/*Remove admin menu items*/
function my_remove_menu_pages(){
	// remove_menu_page('edit.php?post_type=acf');
	// remove_menu_page( 'index.php' );                 //Dashboard
	//remove_menu_page( 'edit.php' );                   	//Posts
	// remove_menu_page( 'upload.php' );                //Media
	// remove_menu_page( 'edit.php?post_type=page' );  	//Pages
	//remove_menu_page( 'edit-comments.php' );          	//Comments
	// remove_menu_page( 'themes.php' );                //Appearance
	// remove_menu_page( 'plugins.php' );               //Plugins
	#remove_menu_page( 'users.php' );                  	//Users
	//remove_menu_page( 'tools.php' );                  	//Tools
	// remove_menu_page( 'options-general.php' );       //Settings
}

/*Change URL of WP-Admin logo*/
function my_login_logo_url(){
    return get_bloginfo( 'url' );
}

/*Remove Wordpress Logo in Admin Bar*/
function remove_wp_logo(){
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}