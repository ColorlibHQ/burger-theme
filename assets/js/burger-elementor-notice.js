/**
 * Notice for Elementor
 *
 * @package Burger
 */

/* global burgerElementorNotice */

jQuery(document).ready(
	function () {

		var style = '<style>.burger-disable-elementor-styling{position:fixed;z-index:9999;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,.8)}.burger-elementor-notice-wrapper{position:fixed;top:50%;left:50%;max-width:380px;border-radius:6px;color:#6d7882;background-color:#fff;text-align:center;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.burger-elementor-notice-body{padding:10px 20px;font-size:12px;line-height:1.5}.burger-elementor-notice-header{padding:10px 0 20px;color:#6d7882;font-size:13px;font-weight:700}.burger-elementor-notice-buttons{border-top:1px solid #e6e9ec}.burger-elementor-notice-buttons>a{display:inline-block;width:50%;padding:13px 0;font-size:15px;font-weight:700;text-align:center}.burger-elementor-notice-buttons>a.burger-do-nothing{border-right:1px solid #e6e9ec;color:#6d7882}.burger-elementor-notice-buttons>a.burger-disable-default-styles{color:#9b0a46}</style>';

		var dialog = style + '<div class="burger-disable-elementor-styling">' +
			'<div class="burger-elementor-notice-wrapper">' +
			'<div class="burger-elementor-notice-header">Burger supports default styling for Elementor widgets</div>' +
			'<div class="burger-elementor-notice-body">Do you want to disable Elementors\' default styles and use the theme defaults?</div>' +
			'<div class="burger-elementor-notice-buttons">' +
			'<a href="#" class="burger-do-nothing" data-reply="no">No</a>' +
			'<a href="#" class="burger-disable-default-styles" data-reply="yes">Yes</a>' +
			'</div>' +
			'</div>' +
			'</div>';

		jQuery('body').prepend(dialog);
		jQuery('.burger-elementor-notice-buttons > a').on(
			'click', function () {

				var reply = jQuery(this).data('reply');

				jQuery.ajax(
					{
						url: burgerElementorNotice.ajaxurl,
						data: {
							reply: reply,
							nonce: burgerElementorNotice.nonce,
							action: 'elementor_desiable_default_style'
						},
						type: 'post',
						success: function () {

							if (reply === 'yes') {
								parent.location.reload();
							} else {
								jQuery('.burger-disable-elementor-styling').fadeOut(500, function () { jQuery(this).remove(); });
							}
						}
					}
				);
			}
		);
	}
);
