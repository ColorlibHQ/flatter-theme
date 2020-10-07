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

	$flatter_instagram_userid      	= !empty( flatter_opt( 'flatter_instagram_userid' ) ) ? flatter_opt( 'flatter_instagram_userid' ) : 'colorlib';
	$flatter_instagram_gallery_item = !empty( flatter_opt( 'flatter_instagram_gallery_item' ) ) ? flatter_opt( 'flatter_instagram_gallery_item' ) : '5';
	?>
	
    <!-- instragram_area_start -->
    <div class="instragram_area" data-username="<?php echo esc_attr( $flatter_instagram_userid )?>" data-items="<?php echo esc_attr( $flatter_instagram_gallery_item )?>"></div>
    <!-- instragram_area_end -->