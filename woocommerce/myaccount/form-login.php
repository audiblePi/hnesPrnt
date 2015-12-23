<?php
/**
 * Login Form
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php wc_print_notices(); ?>
<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php #endif; ?>
<div class="row">
	<div class="col-md-12">
		<div class="featured-boxes">
			<div class="row">
				<?php 	if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) echo "<div class='col-sm-6'>";
						else echo "<div class='col-md-12'>";?>
					<div class="featured-box featured-box-primary align-left mt-xlg">
						<div class="box-content">
							<h4 class="heading-primary text-uppercase mb-md">I'm a Returning Customer</h4>
							<form method="post" class="" id="frmSignIn">
								<?php do_action( 'woocommerce_login_form_start' ); ?>
								<p class="form-row form-row-wide">
									<label for="username"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label>
									<input type="text" class="input-text" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
								</p>
								<p class="form-row form-row-wide">
									<label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
									<input class="input-text" type="password" name="password" id="password" />
								</p>
								<?php do_action( 'woocommerce_login_form' ); ?>
								<p class="form-row">
									<?php wp_nonce_field( 'woocommerce-login' ); ?>
									<input type="submit" class="button" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
									<label for="rememberme" class="inline">
										<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> <?php _e( 'Remember me', 'woocommerce' ); ?>
									</label>
								</p>
								<p class="lost_password">
									<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
								</p>
								<?php do_action( 'woocommerce_login_form_end' ); ?>
							</form>
						</div>
					</div>
				</div>
				<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
					<div class="col-sm-6">
						<div class="featured-box featured-box-primary align-left mt-xlg">
							<div class="box-content">
								<h4 class="heading-primary text-uppercase mb-md">Register An Account</h4>
								<form method="post" class="" id="frmSignUp">
									<?php do_action( 'woocommerce_register_form_start' ); ?>
									<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
										<p class="form-row form-row-wide">
											<label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
											<input type="text" class="input-text" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
										</p>
									<?php endif; ?>
									<p class="form-row form-row-wide">
										<label for="reg_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
										<input type="email" class="input-text" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
									</p>
									<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
										<p class="form-row form-row-wide">
											<label for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
											<input type="password" class="input-text" name="password" id="reg_password" />
										</p>
									<?php endif; ?>
									<!-- Spam Trap -->
									<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>
									<?php do_action( 'woocommerce_register_form' ); ?>
									<?php do_action( 'register_form' ); ?>
									<p class="form-row">
										<?php wp_nonce_field( 'woocommerce-register' ); ?>
										<input type="submit" class="button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" />
									</p>
									<?php do_action( 'woocommerce_register_form_end' ); ?>
								</form>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
