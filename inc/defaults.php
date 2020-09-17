<?php
/**
 * Defualts
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/


// Sets custom image sizes
$kyosa_config = genesis_get_config( 'main' );
$image_sizes = $kyosa_config[ 'image-sizes' ];

if( $image_sizes ) {

  foreach( $image_sizes as $image_size ) {

    add_image_size( $image_size['name'], $image_size['width'], $image_size['height'], $image_size['crop'] );

  }

}

// Forces blog to use archive template
add_filter( 'template_include', 'kyosa_template_heirarchy' );
function kyosa_template_heirarchy( $template ) {

  if( is_home() ) {
      $template = get_query_template( 'archive' );
  }

  return $template;

}

// Cleans post classes
add_filter( 'post_class', 'kyosa_clean_post_classes', 5 );
function kyosa_clean_post_classes( $classes ) {

	if( ! is_array( $classes ) )
		return $classes;

	$allowed_classes = array(
  		'hentry',
  		'type-' . get_post_type(),
   	);

	return array_intersect( $classes, $allowed_classes );
}
