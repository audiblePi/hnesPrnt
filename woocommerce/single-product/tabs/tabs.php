<?php
/**
 * Single Product tabs
 *
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$tabs = apply_filters( 'woocommerce_product_tabs', array() );
if ( ! empty( $tabs ) ) : ?>
	<div class="col-md-12">
		<div class="tabs tabs-product">
			<ul class="nav nav-tabs">
				<?php $count = 0; foreach ( $tabs as $key => $tab ) : ?>
					<?php if ($count == 0 )
							echo "<li class='active ".esc_attr( $key )."_tab'>";
						else 
							echo "<li class='".esc_attr( $key )."_tab'>";
					?>
						<a href="#tab-<?php echo esc_attr( $key ); ?>" data-toggle="tab"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
					</li>
				<?php $count++; endforeach; ?>
			</ul>
			<div class="tab-content">
				<?php $count = 0; foreach ( $tabs as $key => $tab ) : ?>
					<?php if ($count == 0 )
							echo "<div class='active tab-pane' id='tab-".esc_attr( $key )."'>";
						else 
							echo "<div class='tab-pane' id='tab-".esc_attr( $key )."'>";
					?>
						<?php call_user_func( $tab['callback'], $key, $tab ); ?>
					</div>
				<?php $count++; endforeach; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
