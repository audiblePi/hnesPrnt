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
$link = get_term_link( $category->slug, 'product_cat' );
$array =explode("/",$link);
$school = $array[count($array)-2];
$boysLink = $link."boys-".$school;
$girlsLink = $link."girls-".$school;

?>
<!-- <li <?php wc_product_cat_class(); ?>>
	<?php #do_action( 'woocommerce_before_subcategory', $category ); ?>
	<div class="portfolio-item">
		<span class="thumb-info thumb-info-lighten thumb-info-bottom-info thumb-info-centered-icons">
			<span class="thumb-info-wrapper">
				<?php #do_action( 'woocommerce_before_subcategory_title', $category ); ?>
				<span class="thumb-info-title">
					<span class="thumb-info-inner">
						<?php
							#echo $category->name;
							#if ( $category->count > 0 )
							#	echo apply_filters( 'woocommerce_subcategory_count_html', ' ', $category );
						?>
					</span>
				</span>
				<span class="thumb-info-action">
					<a href="<?php #echo $boysLink; ?>">
						<span class="thumb-info-action-icon thumb-info-action-icon-primary" style="color:#fff;">Boys</span>
					</a>
					<a href="<?php #echo $girlsLink; ?>" class="lightbox-portfolio">
						<span class="thumb-info-action-icon thumb-info-action-icon-light">Girls</span>
					</a>
				</span>
			</span>
		<?php #do_action( 'woocommerce_after_subcategory_title', $category ); ?>
		<?php #do_action( 'woocommerce_after_subcategory', $category ); ?>
		</span>
	</div>
</li> -->
<!-- <li <?php wc_product_cat_class(); ?>>
	<?php #do_action( 'woocommerce_before_subcategory', $category ); ?>
	<div class="portfolio-item">
		<a href="portfolio-single-project.html">
			<span class="thumb-info">
				<span class="thumb-info-wrapper">
					<?php #do_action( 'woocommerce_before_subcategory_title', $category ); ?>
					<span class="thumb-info-title">
						<span class="thumb-info-inner">
							<?php
								#echo $category->name;
								#if ( $category->count > 0 )
								#	echo apply_filters( 'woocommerce_subcategory_count_html', ' ', $category );
							?>
						</span>
					</span>
					<span class="thumb-info-action">
						<span class="thumb-info-action">
							<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
						</span>
					</span>
				</span>
			</span>
		<?php #do_action( 'woocommerce_after_subcategory_title', $category ); ?>
		<?php #do_action( 'woocommerce_after_subcategory', $category ); ?>
		</a>
	</div>
</li> -->
<li <?php wc_product_cat_class(); ?>>
	<?php do_action( 'woocommerce_before_subcategory', $category ); ?>
	<span class="product-thumb-info">
		<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>">
			<span class="product-thumb-info-image">
				<span class="product-thumb-info-act">
					<span class="product-thumb-info-act-left"><em>View Products</em></span>
					<span class="product-thumb-info-act-right"><em><i class="fa fa-arrow-right"></i> </em></span>
				</span>
				<?php do_action( 'woocommerce_before_subcategory_title', $category ); ?>
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
		<?php do_action( 'woocommerce_after_subcategory_title', $category ); ?>
		<?php do_action( 'woocommerce_after_subcategory', $category ); ?>
	</span>
</li>