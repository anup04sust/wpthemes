<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Upomahin
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function upomahin_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'upomahin_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function upomahin_jetpack_setup
add_action( 'after_setup_theme', 'upomahin_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function upomahin_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function upomahin_infinite_scroll_render
