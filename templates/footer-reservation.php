<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Burger
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$burger_reservation_title     = !empty( burger_opt( 'burger_reservation_title' ) ) ? burger_opt( 'burger_reservation_title' ) : '';
	$burger_reservation_sub_title = !empty( burger_opt( 'burger_reservation_sub_title' ) ) ? burger_opt( 'burger_reservation_sub_title' ) : '';
	$burger_reservation_btn_text  = !empty( burger_opt( 'burger_reservation_btn_text' ) ) ? burger_opt( 'burger_reservation_btn_text' ) : '';
	$burger_reservation_btn_url	  = !empty( burger_opt( 'burger_reservation_btn_url' ) ) ? burger_opt( 'burger_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $burger_reservation_title )?></h3>
			<p><?php echo esc_html( $burger_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $burger_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $burger_reservation_btn_text )?></a>
		</div>
	</div>