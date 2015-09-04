<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package phupp-wp-theme-base
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function phupp_wp_theme_base_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'phupp_wp_theme_base_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function phupp_wp_theme_base_jetpack_setup
add_action( 'after_setup_theme', 'phupp_wp_theme_base_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function phupp_wp_theme_base_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function phupp_wp_theme_base_infinite_scroll_render
