<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}
?>
<li <?php post_class( $classes ); ?>>
	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<span class="product-thumb-info">
		<a href="<?php the_permalink(); ?>">
			<span class="product-thumb-info-image">
				<span class="product-thumb-info-act">
					<span class="product-thumb-info-act-left"><em>View Product</em></span>
					<span class="product-thumb-info-act-right"><em><i class="fa fa-arrow-right"></i> </em></span>
				</span>
				<?php do_action( 'woocommerce_before_shop_loop_item_title' ); //image ?>
			</span>
		</a>
		<span class="product-thumb-info-content">
			<a href="shop-product-sidebar.html">
				<h4><?php do_action( 'woocommerce_shop_loop_item_title' ); //title ?></h4>
				<span class="price">
					<span class="amount">
						<?php do_action( 'woocommerce_after_shop_loop_item_title' ); //price ?>
					</span>
				</a>
			</a>
		</span>
	</span>
	<?php #do_action( 'woocommerce_after_shop_loop_item' ); //add to cart?>
</li>
