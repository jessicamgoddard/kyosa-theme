<?php
/**
 * Single Post
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/


remove_action( 'genesis_entry_header', 'genesis_post_info', 12 );
add_action( 'genesis_before_entry_content', 'genesis_post_info' );

genesis();
