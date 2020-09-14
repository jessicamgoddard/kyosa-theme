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
    'acf-options-page'  => false,
    'image-sizes'       => [
      [
        'name'    => 'medium-square',
        'width'   => '300',
        'height'  => '300',
        'crop'    => true
      ],
      [
        'name'    => 'featured-image',
        'width'   => '700',
        'height'  => '475',
        'crop'    => true
      ],
    ],
    'responsive-menus'             => [
      'script'  => [
        'menuClasses' => [
          // 'others'  => [ '.nav-primary' ],
          'combine'  => [ '.nav-primary', '.nav-secondary' ],
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
          'name'        => __( 'Small' ),
          'shortName'   => __( 'S' ),
          'size'        => 12,
          'slug'        => 'small',
        ],
        [
          'name'        => __( 'Normal' ),
          'shortName'   => __( 'M' ),
          'size'        => 16,
          'slug'        => 'normal',
        ],
        [
          'name'        => __( 'Large' ),
          'shortName'   => __( 'L' ),
          'size'        => 22,
          'slug'        => 'large',
        ],
        [
          'name'        => __( 'Extra Large' ),
          'shortName'   => __( 'XL' ),
          'size'        => 26,
          'slug'        => 'extra-large',
        ],
      ],
      'editor-color-palette'        => [
        [
          'name'  => __( 'Dark Blue' ),
          'slug'  => 'dark-blue',
          'color' => '#192F9D',
        ],
        [
          'name'  => __( 'Blue' ),
          'slug'  => 'blue',
          'color' => '#337FD0',
        ],
        [
          'name'  => __( 'Yellow' ),
          'slug'  => 'yellow',
          'color' => '#F1CA4C',
        ],
        [
          'name'  => __( 'Red' ),
          'slug'  => 'red',
          'color' => '#D5161D',
        ],
        [
          'name'  => __( 'Green' ),
          'slug'  => 'green',
          'color' => '#679633',
        ],
        [
          'name'  => __( 'Orange' ),
          'slug'  => 'orange',
          'color' => '#FA8726',
        ],
        [
          'name'  => __( 'White' ),
          'slug'  => 'white',
          'color' => '#ffffff',
        ],
        [
          'name'  => __( 'Black' ),
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
