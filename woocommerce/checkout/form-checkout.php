<?php
/**
 * Checkout Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wc_print_notices();

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->enable_signup && ! $checkout->enable_guest_checkout && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}
?>
<?php 
// filter hook for include new pages inside the payment method
$get_checkout_url = apply_filters( 'woocommerce_get_checkout_url', WC()->cart->get_checkout_url() ); ?>
<div class="row">
	<div class="col-md-9">
		<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( $get_checkout_url ); ?>" enctype="multipart/form-data">
			<?php if ( sizeof( $checkout->checkout_fields ) > 0 ) : ?>
				<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
				<div class="panel-group billing-checkout" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
									Billing Address
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="accordion-body collapse in">
							<div class="panel-body">
								<div class="" id="customer_details">
									<div class="">
										<?php do_action( 'woocommerce_checkout_billing' ); ?>
									</div>
									<div class="row">
										<div class="col-md-12">
											<a class="accordion-toggle" id="billing-checkout-continue" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<input type="submit" value="Continue" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default shipping-checkout">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
									Shipping Address
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="accordion-body collapse">
							<div class="panel-body">
								<?php do_action( 'woocommerce_checkout_shipping' ); ?>
								<div class="row">
									<div class="col-md-12">
										<a class="accordion-toggle" id="shipping-checkout-continue" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
											<input type="submit" value="Continue" class="btn btn-primary pull-right mb-xl" data-loading-text="Loading...">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel panel-default payment-checkout">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
									Review & Payment
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="accordion-body collapse">
							<div class="panel-body">
								<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
								<div id="order_review" class="woocommerce-checkout-review-order">
									<?php do_action( 'woocommerce_checkout_order_review' ); ?>
								</div>
								<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
							</div>
						</div>
					</div>
				</div>
				<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
			<?php endif; ?>
		</form>
		<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
	</div>
	<div class="col-md-3">
		<h4 class="heading-primary text-uppercase mb-md"><?php _e( 'Cart Totals', 'woocommerce' ); ?></h2>
		<table class="cart-totals" cellspacing="0">
			<tr class="cart-subtotal">
				<th><?php _e( 'Subtotal', 'woocommerce' ); ?></th>
				<td><strong><?php wc_cart_totals_subtotal_html(); ?></strong></td>
			</tr>
			<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
				<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
					<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
					<td><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
				</tr>
			<?php endforeach; ?>
			<?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
				<?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>
				<?php wc_cart_totals_shipping_html(); ?>
				<?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>
			<?php elseif ( WC()->cart->needs_shipping() ) : ?>
				<tr class="shipping">
					<th><?php _e( 'Shipping', 'woocommerce' ); ?></th>
					<td><?php woocommerce_shipping_calculator(); ?></td>
				</tr>
			<?php endif; ?>
			<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
				<tr class="fee">
					<th><?php echo esc_html( $fee->name ); ?></th>
					<td><?php wc_cart_totals_fee_html( $fee ); ?></td>
				</tr>
			<?php endforeach; ?>
			<?php if ( wc_tax_enabled() && WC()->cart->tax_display_cart == 'excl' ) : ?>
				<?php if ( get_option( 'woocommerce_tax_total_display' ) == 'itemized' ) : ?>
					<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
						<tr class="tax-rate tax-rate-<?php echo sanitize_title( $code ); ?>">
							<th><?php echo esc_html( $tax->label ); ?></th>
							<td><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
						</tr>
					<?php endforeach; ?>
				<?php else : ?>
					<tr class="tax-total">
						<th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
						<td><?php wc_cart_totals_taxes_total_html(); ?></td>
					</tr>
				<?php endif; ?>
			<?php endif; ?>
			<?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>
			<tr class="order-total total">
				<th><?php _e( 'Total', 'woocommerce' ); ?></th>
				<td><?php wc_cart_totals_order_total_html(); ?></td>
			</tr>
			<?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>
		</table>
		<?php if ( WC()->cart->get_cart_tax() ) : ?>
			<p class="wc-cart-shipping-notice"><small><?php
				$estimated_text = WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping()
					? sprintf( ' ' . __( ' (taxes estimated for %s)', 'woocommerce' ), WC()->countries->estimated_for_prefix() . __( WC()->countries->countries[ WC()->countries->get_base_country() ], 'woocommerce' ) )
					: '';
				printf( __( 'Note: Shipping and taxes are estimated%s and will be updated during checkout based on your billing and shipping information.', 'woocommerce' ), $estimated_text );
			?></small></p>
		<?php endif; ?>
	</div>
</div>