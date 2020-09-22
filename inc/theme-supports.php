<?php
/**
 * Theme Supports
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/

$kyosa_config = genesis_get_config( 'main' );

$theme_supports = $kyosa_config[ 'theme-supports' ];

if( $theme_supports ) {

  foreach( $theme_supports as $theme_support => $value ) {

    if( false === $value ) :

      remove_theme_support( $theme_support );

    else :

      add_theme_support( $theme_support, $value );

    endif;

  }

}
