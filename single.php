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

// Adds PrintFriendly to post meta
add_filter( 'genesis_post_info', 'kyosa_post_info_filter' );
function kyosa_post_info_filter( $post_info ) {

  if( is_singular( 'post' ) ) :

    $post_info = '<div class="entry-meta-container">[post_date]&nbsp;by&nbsp;[post_author]' . do_shortcode( '[printfriendly]' ) . ' [post_edit]</div>';
    return $post_info;

  endif;

}

genesis();
