<?php
/**
 * Scripts & Styles
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Enqueues main scripts and styles
add_action( 'wp_enqueue_scripts', 'kyosa_scripts_styles' );
function kyosa_scripts_styles() {

  $kyosa_config = genesis_get_config( 'main' );

  wp_enqueue_style( 'kyosa-theme-fonts', $kyosa_config[ 'fonts-url' ] );
  wp_enqueue_style( 'dashicons' );
  wp_enqueue_style( 'kyosa-theme-main-css', get_stylesheet_directory_uri() . '/assets/dist/main.min.css' );
  // wp_enqueue_style( 'kyosa-theme-inline-css', get_stylesheet_directory_uri() . '/assets/dist/inline.css' );
  wp_enqueue_script( 'kyosa-theme-main-js', get_stylesheet_directory_uri() . '/assets/dist/main.min.js', null, null, true );

}

// Enqueues Gutenberg scripts and styles
add_action( 'enqueue_block_editor_assets', 'kyosa_gutenberg_scripts_styles' );
function kyosa_gutenberg_scripts_styles() {

  $kyosa_config = genesis_get_config( 'main' );

  wp_enqueue_style( 'kyosa-theme-editor-fonts', $kyosa_config[ 'fonts-url' ] );
  wp_enqueue_style( 'dashicons' );
  wp_enqueue_style( 'kyosa-theme-editor-main-css', get_stylesheet_directory_uri() . '/assets/dist/editor.min.css' );
  // wp_enqueue_style( 'kyosa-theme-editor-inline-css', get_stylesheet_directory_uri() . '/assets/dist/inline.css' );
  wp_enqueue_script( 'kyosa-theme-editor-main-js', get_stylesheet_directory_uri() . '/assets/dist/editor.min.js', [ 'wp-blocks', 'wp-dom' ], null, true );

}
