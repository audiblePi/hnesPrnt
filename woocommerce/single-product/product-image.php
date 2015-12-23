<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $woocommerce, $product;

?>
<div class="col-md-6">
	<div class="owl-carousel owl-theme" data-plugin-options='{"items": 1}'>	
		<?php
		if ( has_post_thumbnail() ) {
			$main_image_link  	= wp_get_attachment_url( get_post_thumbnail_id() );
			$attachment_count = count( $product->get_gallery_attachment_ids() );
			$attachment_ids = $product->get_gallery_attachment_ids();
			echo "<div><div class='thumbnail'>";
			echo "<img class='img-responsive img-rounded' src='".$main_image_link."'>";
			echo "</div></div>";
			foreach ( $attachment_ids as $attachment_id ) {
				$image_link = wp_get_attachment_url( $attachment_id );
				$image_title 	= esc_attr( get_the_title( $attachment_id ) );
				$image_caption 	= esc_attr( get_post_field( 'post_excerpt', $attachment_id ) );

				echo "<div><div class='thumbnail'>";
				echo "<img class='img-responsive img-rounded' src='".$image_link."'>";
				echo "</div></div>";
			}
		} else {
			echo "<div><div class='thumbnail'>";
			echo "<img class='img-responsive img-rounded' src='".wc_placeholder_img_src()."'>";
			echo "</div></div>";
		} ?>
	</div>
</div>