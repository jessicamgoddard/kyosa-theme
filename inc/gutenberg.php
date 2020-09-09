<?php
/**
 * Gutenberg
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/


// Adds body classes to help with styling
add_filter( 'body_class', 'kyosa_blocks_body_classes' );
function kyosa_blocks_body_classes( $classes ) {

	if ( ! is_singular() || ! function_exists( 'has_blocks' ) || ! function_exists( 'parse_blocks' ) ) {
		return $classes;
	}

	if ( ! has_blocks() ) {
		$classes[] = 'has-no-blocks';
		return $classes;
	}

	$post_object = get_post( get_the_ID() );
	$blocks      = (array) parse_blocks( $post_object->post_content );

	if ( isset( $blocks[0]['blockName'] ) ) {
		$classes[] = 'first-block-' . str_replace( '/', '-', $blocks[0]['blockName'] );
	}

	if ( isset( $blocks[0]['attrs']['align'] ) ) {
		$classes[] = 'first-block-align-' . $blocks[0]['attrs']['align'];
	}

	return $classes;

}

// Unregisters default WP block patterns
unregister_block_pattern( 'core/heading-paragraph' );
unregister_block_pattern( 'core/large-header-button' );
unregister_block_pattern( 'core/large-header' );
unregister_block_pattern( 'core/quote' );
unregister_block_pattern( 'core/text-three-columns-buttons' );
unregister_block_pattern( 'core/text-two-columns-with-images' );
unregister_block_pattern( 'core/text-two-columns' );
unregister_block_pattern( 'core/three-buttons' );
unregister_block_pattern( 'core/two-buttons' );
unregister_block_pattern( 'core/two-images' );
