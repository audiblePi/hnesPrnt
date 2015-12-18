<?php
/**
 * The template for displaying product category thumbnails within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product_cat.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Increase loop count
$woocommerce_loop['loop'] ++;
?>
<li <?php wc_product_cat_class(); ?>>
	<?php do_action( 'woocommerce_before_subcategory', $category ); ?>
	<span class="product-thumb-info">
		<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>">
			<span class="product-thumb-info-image">
				<span class="product-thumb-info-act">
					<span class="product-thumb-info-act-left"><em>Boys</em></span>
					<span class="product-thumb-info-act-right"><em><i class="fa fa-plus"></i> Girls</em></span>
				</span>
				<?php
					/**
					 * woocommerce_before_subcategory_title hook
					 *
					 * @hooked woocommerce_subcategory_thumbnail - 10
					 */
					do_action( 'woocommerce_before_subcategory_title', $category );
				?>
			</span>
		</a>
		<span class="product-thumb-info-content">
			<a href="shop-product-sidebar.html">			
				<h4>
					<?php
						echo $category->name;

						if ( $category->count > 0 )
						echo apply_filters( 'woocommerce_subcategory_count_html', ' ', $category );
					?>
				</h4>
			</a>
		</span>
		<?php
			/**
			 * woocommerce_after_subcategory_title hook
			 */
			do_action( 'woocommerce_after_subcategory_title', $category );
		?>
		<?php do_action( 'woocommerce_after_subcategory', $category ); ?>
	</span>
</li>
