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

  $kyosa_config = genesis_get_config( 'main' );

  $css = '';
  $colors = $kyosa_config[ 'theme-supports' ][ 'editor-color-palette' ];

  foreach( $colors as $color ) {

    $css .= <<<CSS

    .has-{$color['slug']}-color {
      color: {$color['color']};
    }

    .has-{$color['slug']}-background-color {
      background-color: {$color['color']};
    }

    /* Page Colors */
    .site-header .nav-primary .menu-item.has-{$color['slug']}-page-color {
      background-image: linear-gradient({$color['color']}, {$color['color']});
    }

    .site-header .menu-item.has-{$color['slug']}-page-color a span {
      border-color: {$color['color']} !important;
    }

    .site-header .menu-item.has{$color['slug']}-page-color .sub-menu {
      border-color: {$color['color']} !important;
    }

CSS;

  }

  wp_add_inline_style( 'kyosa-theme-inline-css', $css );

}
