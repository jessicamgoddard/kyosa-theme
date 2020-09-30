<?php
/**
 * Inline CSS
 *
 * @package      KYOSA Theme
 * @author       P&P Creative
 * @since        1.0.0
**/

add_action( 'enqueue_block_editor_assets', 'kyosa_custom_gutenberg_css' );
add_action( 'wp_enqueue_scripts', 'kyosa_custom_gutenberg_css' );
function kyosa_custom_gutenberg_css() {

  $kyosa_config = genesis_get_config( 'main' );

  $css = '';
  $colors = $kyosa_config[ 'theme-supports' ][ 'editor-color-palette' ];
  $font_sizes = $kyosa_config[ 'theme-supports' ][ 'editor-font-sizes' ];

  foreach( $colors as $color ) {

    $css .= <<<CSS

    .has-{$color['slug']}-color {
      color: {$color['color']};
    }

    .has-{$color['slug']}-background-color {
      background-color: {$color['color']};
    }

    /* Button Colors */
    .is-style-outline .wp-block-button__link.has-{$color['slug']}-color,
    .is-style-underscore .wp-block-button__link.has-{$color['slug']}-color {
      color: {$color['color']};
    }

    .is-style-outline .wp-block-button__link.has-{$color['slug']}-background-color {
      background-color: {$color['color']};
    }

    .wp-block-button:not(.is-style-outline):not(.is-style-underscore) .wp-block-button__link.has-{$color['slug']}-background-color,
    .is-style-outline .wp-block-button__link.has-{$color['slug']}-color:hover,
    .is-style-outline .wp-block-button__link.has-{$color['slug']}-color:focus {
      background-color: {$color['color']};
      border-color: {$color['color']};
    }

    /* Page Colors */
    .site-header .nav-primary .menu-item.has-{$color['slug']}-page-color a,
    .site-header .genesis-responsive-menu .menu-item.moved-item-nav-primary.has-{$color['slug']}-page-color a,
    .footer-widgets .menu-primary-menu-container .menu .menu-item.has-{$color['slug']}-page-color a {
      background-image: linear-gradient({$color['color']}, {$color['color']});
    }

    .site-header .menu-item.has-{$color['slug']}-page-color a span,
    .site-header .menu-item.has-{$color['slug']}-page-color .sub-menu,
    .footer-widgets .menu-primary-menu-container .menu-item.has-{$color['slug']}-page-color a {
      border-color: {$color['color']} !important;
    }

    body.has-{$color['slug']}-page-color h1.entry-title {
      background-color: {$color['color']};
    }

    /* Category Colors */
    .category-navigation .menu .menu-item .has-{$color['slug']}-category-color:hover,
    .category-navigation .menu .menu-item .has-{$color['slug']}-category-color:focus,
    .category-navigation .menu .menu-item.current-menu-item .has-{$color['slug']}-category-color {
      border-color: {$color['color']};
    }

    .entry-categories .has-{$color['slug']}-category-color {
      background-color: {$color['color']};
      border-color: {$color['color']};
    }

    body.has-{$color['slug']}-category-color .archive-title {
      background-color: {$color['color']};
    }

    /* Box Block */
    .wp-block-pandp-blocks-box.has-{$color['slug']}-box-color .box-bkg::after {
      background-color: {$color['color']};
    }

    /* Heading Underline Block */
    .is-style-underline.has-{$color['slug']}-background-color::after {
      background: {$color['color']} !important;
    }

    /* Accordion Block */
    .has-{$color['slug']}-page-color .wp-block-pandp-blocks-accordion.is-active::after,
    .has-{$color['slug']}-page-color .wp-block-pandp-blocks-accordion:hover::after,
    .has-{$color['slug']}-page-color .wp-block-pandp-blocks-accordion:focus::after {
      background-color: {$color['color']};
    }

    .has-{$color['slug']}-page-color .wp-block-pandp-blocks-accordion .accordion-heading {
      color: {$color['color']};
    }

    .has-{$color['slug']}-page-color .wp-block-pandp-blocks-accordion .accordion-trigger::after {
      color: {$color['color']};
    }

    /* Editor Overrides */
    .block-editor .wp-block-button.is-style-outline .wp-block-button__link.has-{$color['slug']}-background-color:hover {
      background-color: {$color['color']} !important;
    }

    .block-editor .wp-block-button:not(.is-style-outline):not(.is-style-underscore) .wp-block-button__link.has-{$color['slug']}-background-color,
    .block-editor .wp-block-button:not(.is-style-outline) .wp-block-button__link.has-{$color['slug']}-background-color {
      border-color: {$color['color']};
    }

CSS;

  }

  foreach( $font_sizes as $font_size ) {

    $size = $font_size['size'] / 16;

    $css .= <<<CSS

    .has-{$font_size['slug']}-font-size {
      font-size: {$size}rem;
    }

CSS;

  }

  wp_add_inline_style( 'kyosa-theme-inline-css', $css );
  wp_add_inline_style( 'kyosa-theme-editor-inline-css', $css );

}
