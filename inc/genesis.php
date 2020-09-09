<?php
/**
 * Genesis
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/


// Registers the responsive menus
if ( function_exists( 'genesis_register_responsive_menus' ) ) {

	genesis_register_responsive_menus( $kyosa_config[ 'responsive-menus' ] );

}

// Reduces secondary navigation to one level depth
add_filter( 'wp_nav_menu_args', 'kyosa_secondary_menu_args' );
function kyosa_secondary_menu_args( $args ) {

  if( $kyosa_config[ 'reduce-secondary-nav' ] === true && 'secondary' === $args['theme_location'] ) {

  		$args['depth'] = 1;

  }

	return $args;

}

// Wraps front page title in h1
add_filter( 'genesis_site_title_wrap', function( $wrap ) { return is_front_page() ? 'h1' : $wrap; } );

// Removes sidebars
$sidebars = $kyosa_config[ 'remove-sidebars' ];

if( $sidebars !== null ) {

  foreach( $sidebars as $sidebar ) {

    unregister_sidebar( $sidebar );

  }

}

// Removes page layouts
$layouts = $kyosa_config[ 'remove-layouts' ];

if( $layouts !== null ) {

  foreach( $layouts as $layout ) {

    genesis_unregister_layout( $layout );

  }

}

// Force full-width layout
$force_full_width = $kyosa_config[ 'force-full-width' ];

if( $force_full_width === true ) {

  add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

}

// Removes Genesis templates
add_filter( 'theme_page_templates', 'kyosa_remove_genesis_templates' );
function kyosa_remove_genesis_templates( $page_templates ) {

	unset( $page_templates['page_archive.php'] );
	unset( $page_templates['page_blog.php'] );

	return $page_templates;

}
