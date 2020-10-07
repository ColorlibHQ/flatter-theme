<?php 
	$siteUrl 	  = home_url('/');		
		
	// Copyright text
	$url = 'https://colorlib.com/';
	$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'flatter' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
	$copyRight = !empty( flatter_opt( 'flatter_footer_copyright_text' ) ) ? flatter_opt( 'flatter_footer_copyright_text' ) : $copyText;
?>

	<div class="footer-bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-7 col-md-12 col-lg-8">
					<div class="copyright">
						<p class="footer-text"><?php echo wp_kses_post( $copyRight ); ?></p>
					</div>
				</div>

				<?php
				// Social profiles
				$social_opt = flatter_opt('flatter_social_profile_toggle');
				if ( $social_opt == true ) {
					$social_items = flatter_opt('flatter_social_profiles');
					if( is_array( $social_items ) && count( $social_items ) > 0 ){
						echo '<div class="col-xl-5 col-md-12 col-lg-4"><div class="social_links"><ul>';
							foreach ($social_items as $value) {
								echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a><li>';
							}
						echo '</ul></div></div>';
					}          
				}  
				?>				
			</div>
		</div>
	</div>