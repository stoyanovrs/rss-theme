<?php
/**
 * Block styles.
 *
 * @package rss_theme
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function rss_theme_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'rss_theme-sticky',
			'label' => __( 'Sticky header', 'rss_theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'rss_theme-flat-button',
			'label' => __( 'Text button', 'rss_theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'rss_theme-button-shadow',
			'label' => __( 'Call', 'rss_theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'rss_theme-navigation-button',
			'label' => __( 'Button style', 'rss_theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'rss_theme-navigation-button-shadow',
			'label' => __( 'Button with shadow', 'rss_theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'rss_theme-list-underline',
			'label' => __( 'Underlined list items', 'rss_theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'rss_theme-box-shadow',
			'label' => __( 'Box shadow', 'rss_theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'rss_theme-box-shadow',
			'label' => __( 'Box shadow', 'rss_theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'rss_theme-box-shadow',
			'label' => __( 'Box shadow', 'rss_theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'rss_theme-text-shadow',
			'label' => __( 'Text shadow', 'rss_theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'rss_theme-text-shadow',
			'label' => __( 'Text shadow', 'rss_theme' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'rss_theme-text-shadow',
			'label' => __( 'Text shadow', 'rss_theme' ),
		)
	);
}
add_action( 'init', 'rss_theme_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function rss_theme_unregister_block_style() {
	wp_enqueue_script(
		'rss_theme-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		RSS_THEME_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'rss_theme_unregister_block_style' );
