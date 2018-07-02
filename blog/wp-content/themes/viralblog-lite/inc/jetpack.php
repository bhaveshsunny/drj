<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Viralblog
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function viralblog_lite_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'viralblog_lite_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function viralblog_lite_jetpack_setup
add_action( 'after_setup_theme', 'viralblog_lite_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function viralblog_lite_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function viralblog_lite_infinite_scroll_render
