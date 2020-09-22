<?php
/**
 * Config
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/


$menu_icon = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve"><style type="text/css">.st0{fill:none;stroke:#679633;stroke-width:3;}.st1{fill:none;stroke:#D5161D;stroke-width:3;}.st2{fill:none;stroke:#337FD0;stroke-width:3;}.st3{fill:none;stroke:#F1CA4C;stroke-width:3;}</style><g id="bars">	<path class="st0" d="M2,38h36"/><path class="st1" d="M2,26h36"/><path class="st2" d="M2,14h36"/><path class="st3" d="M2,2h36"/></g><g id="x"><path class="st0" d="M21.1,21.1l17.8,17.8"/><path class="st1" d="M1.1,38.9L19,21"/><path class="st2" d="M21.1,18.9L38.9,1.1"/><path class="st3" d="M1.1,1.1l17.8,17.8"/></g></svg>';

return [
  'fonts-url'         => 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700;800&family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap',
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
      'mainMenu'    => $menu_icon . __( 'Menu' ),
      'menuClasses' => [
        // 'others'  => [ '.nav-primary' ],
        'combine'  => [ '.nav-secondary', '.nav-primary' ],
      ]
    ],
    'extras'  => [
      'media_query_width' => '960px',
    ],
  ],
  'custom-units'            => [ 'px', 'rem', 'em', 'vh', 'vw' ],
  'reduce-secondary-nav'    => true,
  'theme-supports'          => [
    'responsive-embeds'           => true,
    'align-wide'                  => true,
    'custom-line-height'          => false,
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
    'wp-block-styles'             => false,
    'editor-styles'               => true,
    'editor-font-sizes'           => [
      [
        'name'        => __( 'Small' ),
        'shortName'   => __( 'S' ),
        'size'        => 14,
        'slug'        => 'small',
      ],
      [
        'name'        => __( 'Normal' ),
        'shortName'   => __( 'M' ),
        'size'        => 18,
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
        'name'  => __( 'Light Gray' ),
        'slug'  => 'light-gray',
        'color' => '#F7F7F7',
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
