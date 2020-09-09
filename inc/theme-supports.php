<?php
/**
 * Theme Supports
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/


$theme_supports = $kyosa_config[ 'theme-supports' ];

if( $theme_supports ) {

  foreach( $theme_supports as $theme_support => $value ) {

    add_theme_support( $theme_support, $value );

  }

}
