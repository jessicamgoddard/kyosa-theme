<?php
/**
 * Inline CSS
 *
 * @package      KYOSA Theme
 * @author       P&P Creative
 * @since        1.0.0
**/


add_action( 'wp_enqueue_scripts', 'kyosa_custom_gutenberg_css' );
function kyosa_custom_gutenberg_css() {

  $css = '';
  $colors = $kyosa_config[ 'theme-supports' ][ 'editor-color-palette' ];

  foreach( $colors as $color ) {

    $css .= <<<CSS

    .has-{$color['slug']}-color {
      color: {$color['color']};
    }

CSS;

  }

  wp_add_inline_style( 'kyosa-theme-inline-css', $css );

}
