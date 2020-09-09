<?php
/**
 * Config
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/

function kyosa_config() {

  return [
    'fonts-url'         => null,
    'acf-options-page'  => true,
    'image-sizes'       => [
      [
        'name'    => 'medium-square',
        'width'   => '300',
        'height'  => '300',
        'crop'    => true
      ],
    ],
    'responsive-menus'             => [
      'script'  => [
        'menuClasses' => [
          'others'  => [ '.nav-primary' ],
        ]
      ],
      'extras'  => [
        'media_query_width' => '960px',
      ],
    ],
    'reduce-secondary-nav'        => true,
    'theme-supports'    => [
      'responsive-embeds'           => true,
      'align-wide'                  => true,
      'custom-units'                => true,
      'disable-custom-colors'       => true,
      'genesis-responsive-viewport' => true,
      'genesis-custom-logo'         => true,
      'html5'                       => [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style', 'navigation-widgets' ],
      'genesis-structural-wraps'    => [ 'header', 'menu-secondary', 'site-inner', 'footer-widgets', 'footer' ],
      'genesis-accessibility'       => [ '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links', 'screen-reader-text' ],
      'genesis-menus'               => [
        'primary'   => 'Primary Menu',
        'secondary' => 'Secondary Menu',
      ],
      'editor-font-sizes'           => [
        [
          'name'        => __( 'Small', 'kyosa' ),
          'shortName'   => __( 'S', 'kyosa' ),
          'size'        => 14,
          'slug'        => 'small',
        ],
        [
          'name'        => __( 'Normal', 'kyosa' ),
          'shortName'   => __( 'M', 'kyosa' ),
          'size'        => 20,
          'slug'        => 'normal',
        ],
        [
          'name'        => __( 'Large', 'kyosa' ),
          'shortName'   => __( 'L', 'kyosa' ),
          'size'        => 24,
          'slug'        => 'large',
        ],
      ],
      'editor-color-palette'        => [
        [
          'name'  => __( 'White', 'kyosa' ),
          'slug'  => 'white',
          'color' => '#ffffff',
        ],
        [
          'name'  => __( 'Black', 'kyosa' ),
          'slug'  => 'black',
          'color' => '#000000',
        ],
      ]
    ],
    'remove-sidebars'             => [ 'sidebar', 'sidebar-alt', 'header-right', 'after-entry' ],
    'genesis-footer-widgets'      => 3,
    'remove-layouts'              => [ 'content-sidebar-sidebar', 'sidebar-content-sidebar', 'sidebar-sidebar-content', 'sidebar-content', 'content-sidebar' ],
    'force-full-width'            => true,
  ];

}
