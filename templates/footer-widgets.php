<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Flatter
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if ( flatter_opt( 'flatter_footer_widget_toggle' ) == 1 ) {
	?>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<?php
				// Footer widget 1
				if( is_active_sidebar( 'footer-1' ) ){
					dynamic_sidebar( 'footer-1' );
				}
				// Footer widget 2
				if( is_active_sidebar( 'footer-2' ) ){
					dynamic_sidebar( 'footer-2' );
				}

				// Footer widget 3
				if( is_active_sidebar( 'footer-3' ) ){
					dynamic_sidebar( 'footer-3' );
				}

				// Footer widget 4
				if( is_active_sidebar( 'footer-4' ) ){
					dynamic_sidebar( 'footer-4' );
				}

				// Footer widget 5
				if( is_active_sidebar( 'footer-5' ) ){
					dynamic_sidebar( 'footer-5' );
				}
				?>
			</div>
		</div>
	</div>
	<?php
}