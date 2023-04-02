<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rss Theme
 * @since 1.0.0
 */

/**
 * 
 * 
 * @since 1.0.0
 */
define( 'RSS_THEME_VERSION', wp_get_theme()->get( 'Version' ) );

function rss_theme_setup() {
	add_theme_support( 'wp-block-styles' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'file', 'latest-comments', 'latest-posts', 'quote', 'search' ];
  $styled_blocks = [];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "rss_theme-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'rss_theme_setup' );

// Enqueue the style.css file. and custom JS
function rss_theme_styles() {
	wp_enqueue_style('rss-theme-style', get_theme_file_uri() . '/assets/css/main.min.css', [],	RSS_THEME_VERSION );
  wp_enqueue_script( 'rss-theme-custom-js', get_theme_file_uri() . '/assets/js/custom.js', [], RSS_THEME_VERSION );
}
add_action( 'wp_enqueue_scripts', 'rss_theme_styles' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

// Allow SVG 
require_once get_theme_file_path( 'inc/allow-svg.php' );