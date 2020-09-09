<?php
/**
 * Archive
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/


// Adds body class to all pages using this template
add_filter( 'body_class', 'kyosa_blog_archive_body_class' );
function kyosa_blog_archive_body_class( $classes ) {
	$classes[] = 'archive';
	return $classes;
}

genesis();
