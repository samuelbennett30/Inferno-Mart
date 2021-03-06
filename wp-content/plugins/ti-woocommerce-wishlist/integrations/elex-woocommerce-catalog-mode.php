<?php
/**
 * TI WooCommerce Wishlist integration with:
 *
 * @name ELEX WooCommerce Catalog Mode
 *
 * @version 1.0.6
 *
 * @slug elex-woocommerce-catalog-mode
 *
 * @url https://wordpress.org/plugins/elex-woocommerce-catalog-mode/
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}


/**
 * Run hooks on page redirect.
 */
function elex_init() {
	if ( class_exists( 'Elex_CM_Price_Discount_Admin' ) ) {

		global $post;
		$product = wc_get_product( $post->ID );
		if ( ! empty( $product ) ) {

			if ( 'yes' == get_option( 'eh_pricing_discount_cart_catalog_mode' ) && 'yes' == get_option( 'elex_catalog_remove_addtocart_product' ) ) {
				if ( ! ( get_option( 'eh_pricing_discount_price_catalog_mode_exclude_admin' ) == 'yes' && in_array( 'administrator', (array) wp_get_current_user()->roles ) ) ) {
					add_action( 'woocommerce_single_product_summary', 'elex_single_product_summary', 40 );
				}
			} elseif ( ( 'yes' == get_post_meta( $post->ID, 'product_adjustment_hide_addtocart_catalog', true ) ) && ( ( 'yes' == get_post_meta( $post->ID, 'product_adjustment_hide_addtocart_catalog_product', true ) ) || ( '' == get_post_meta( $post->ID, 'product_adjustment_hide_addtocart_catalog_product', true ) ) ) ) {
				if ( ! ( get_post_meta( $post->ID, 'product_adjustment_exclude_admin_catalog', true ) == 'yes' && in_array( 'administrator', (array) wp_get_current_user()->roles ) ) ) {
					add_action( 'woocommerce_single_product_summary', 'elex_single_product_summary', 40 );
				}
			}
		}
	}
}

add_action( 'template_redirect', 'elex_init' );

// Add a custom hook for single page.
function elex_single_product_summary() {
	add_filter( 'tinvwl_allow_addtowishlist_single_product_summary', '__return_true' );
	do_action( 'tinvwl_single_product_summary' );
}
