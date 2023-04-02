<?php
/**
 * Block patterns
 *
 * @package pao-limit-taxi
 * @since 1.0.0
 */

/**
 * Display the search term in the heading on the search page.
 * Todo: Remove when the query title block is updated to work for the search page.
 *
 * @since 1.0.0
 *
 * @return string Search page title
 */
function rss_theme_search_title() {
	if ( isset( $_GET['s'] ) ) {
		$search_term = sanitize_text_field( wp_unslash( $_GET['s'] ) );
		/* translators: %s: Search term. */
		return isset( $search_term ) ? sprintf( esc_html__( 'Search results for "%s"', 'pao-limit-taxi' ), esc_html( $search_term ) ) : __( 'Search results', 'pao-limit-taxi' );
	} else {
		return __( 'Search results placeholder title', 'pao-limit-taxi' );
	}
}

/**
 * Display a link to the privacy policy page, if one is published.

 * @since 1.0.0
 *
 * @return string Link to the privacy policy page, if one is published.
 */
function rss_theme_privacy() {
	if ( get_the_privacy_policy_link() ) {
		return '<!-- wp:paragraph {"fontSize":"extra-small"} --><p class="has-extra-small-font-size">' . get_the_privacy_policy_link() . '</p><!-- /wp:paragraph -->';
	}
}

/**
 * Registers block patterns and block pattern categories.
 *
 * @since 1.0.0
 *
 * @return void
 */
function rss_theme_register_block_patterns() {

	/**
	 * Register an example block pattern category.
	 *
	 * @since 1.0.0
	 */
	register_block_pattern_category(
		'images',
		array( 'label' => esc_html__( 'Images', 'pao-limit-taxi' ) )
	);

}
add_action( 'init', 'rss_theme_register_block_patterns', 9 );

/**
 * This is an example of how to unregister a core block pattern and a block pattern category.
 * Must be called after the patterns and pattern categories that you want to unregister have been added.
 *
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern/
 * @see https://developer.wordpress.org/reference/functions/unregister_block_pattern_category/
 *
 * @since 1.0.0
 *
 * @return void
 */
function rss_theme_unregister_patterns() {
	unregister_block_pattern( 'core/query-small-posts' );
	unregister_block_pattern( 'core/query-large-title-posts' );
	unregister_block_pattern( 'core/query-offset-posts' );
	unregister_block_pattern_category( 'header' );
}
add_action( 'init', 'rss_theme_unregister_patterns', 10 );
