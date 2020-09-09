<?php
/**
 * ACF
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/


if( $config[ 'acf-options-page' ] === true ) {

  if( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( [
      'page_title'  => 'Global Settings',
      'menu_title'  => 'Global Settings',
    ] );
  }

}
