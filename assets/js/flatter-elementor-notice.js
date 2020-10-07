/**
 * Notice for Elementor
 *
 * @package Flatter
 */

/* global flatterElementorNotice */

jQuery( document ).ready(
	function () {

			var style = '<style>.flatter-disable-elementor-styling{position:fixed;z-index:9999;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.8)}.flatter-elementor-notice-wrapper{position:fixed;top:50%;left:50%;max-width:380px;border-radius:6px;color:#6d7882;background-color:#fff;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.flatter-elementor-notice-body{padding:10px 20px;font-size:12px;line-height:1.5}.flatter-elementor-notice-header{padding:10px 0 20px;color:#6d7882;font-size:13px;font-weight:700}.flatter-elementor-notice-buttons{border-top:1px solid #e6e9ec}.flatter-elementor-notice-buttons>a{display:inline-block;width:50%;padding:13px 0;font-size:15px;font-weight:700;text-align:center}.flatter-elementor-notice-buttons>a.flatter-do-nothing{border-right:1px solid #e6e9ec;color:#6d7882}.flatter-elementor-notice-buttons>a.flatter-disable-default-styles{color:#9b0a46}</style>';

			var dialog = style + '<div class="flatter-disable-elementor-styling">' +
				'<div class="flatter-elementor-notice-wrapper">' +
					'<div class="flatter-elementor-notice-header">Flatter supports default styling for Elementor widgets</div>' +
					'<div class="flatter-elementor-notice-body">Do you want to disable Elementors\' default styles and use the theme defaults?</div>' +
					'<div class="flatter-elementor-notice-buttons">' +
						'<a href="#" class="flatter-do-nothing" data-reply="no">No</a>' +
						'<a href="#" class="flatter-disable-default-styles" data-reply="yes">Yes</a>' +
					'</div>' +
				'</div>' +
			'</div>';

			jQuery( 'body' ).prepend( dialog );
			jQuery( '.flatter-elementor-notice-buttons > a' ).on(
				'click', function() {

					var reply = jQuery( this ).data( 'reply' );

					jQuery.ajax(
						{
							url: flatterElementorNotice.ajaxurl,
							data: {
								reply: reply,
								nonce: flatterElementorNotice.nonce,
								action: 'elementor_desiable_default_style'
							},
							type: 'post',
							success: function () {

								if ( reply === 'yes' ) {
									parent.location.reload();
								} else {
									jQuery( '.flatter-disable-elementor-styling' ).fadeOut( 500, function() { jQuery( this ).remove(); } );
								}
							}
						}
					);
				}
			);
	}
);
