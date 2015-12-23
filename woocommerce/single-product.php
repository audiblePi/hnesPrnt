<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php do_action( 'woocommerce_before_main_content' ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
					<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
				<?php endif; ?>
				<?php do_action( 'woocommerce_archive_description' ); ?>
			</div>
		</div>
	</div>
</section>
<div role="main" class="main shop">
	<div class="container">
		<?php #do_action( 'woocommerce_before_main_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php wc_get_template_part( 'content', 'single-product' ); ?>
			<?php endwhile;?>
		<?php do_action( 'woocommerce_after_main_content' ); ?>
		<?php do_action( 'woocommerce_sidebar' ); ?>
	</div>
</div>
<?php get_footer( 'shop' ); ?>