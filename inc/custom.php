<?php
/**
 * Custom
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/

/* Genesis */
// Remove Genesis SEO settings from post/page editor
remove_action( 'admin_menu', 'genesis_add_inpost_seo_box' );

// Remove Genesis SEO settings option page
remove_theme_support( 'genesis-seo-settings-menu' );

// Remove Genesis SEO settings from taxonomy editor
remove_action( 'admin_init', 'genesis_add_taxonomy_seo_options' );


/* Gutenberg */
remove_theme_support( 'core-block-patterns' );

register_block_pattern(
  'kyosa-theme/page-intro',
  array(
    'title'       => __( 'Page Intro' ),
    'description' => _x( 'Headline and large text to be used at the top of pages.', 'Block pattern description' ),
    'content'     => "<!-- wp:columns --><div class=\"wp-block-columns\"><!-- wp:column {\"width\":75} --><div class=\"wp-block-column\" style=\"flex-basis:75%\"><!-- wp:heading --><h2></h2><!-- /wp:heading --><!-- wp:paragraph {\"className\":\"is-style-serif\",\"fontSize\":\"extra-large\"} --><p class=\"is-style-serif has-extra-large-font-size\"></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {\"width\":25} --><div class=\"wp-block-column\" style=\"flex-basis:25%\"></div><!-- /wp:column --></div><!-- /wp:columns -->",
  )
);

register_block_pattern(
  'kyosa-theme/page-intro-centered',
  array(
    'title'       => __( 'Page Intro - Centered' ),
    'description' => _x( 'Headline and large text to be used at the top of pages.', 'Block pattern description' ),
    'content'     => "<!-- wp:columns --><div class=\"wp-block-columns\"><!-- wp:column {\"width\":12.5} --><div class=\"wp-block-column\" style=\"flex-basis:12.5%\"></div><!-- /wp:column --><!-- wp:column {\"width\":75} --><div class=\"wp-block-column\" style=\"flex-basis:75%\"><!-- wp:heading {\"align\":\"center\"} --><h2 class=\"has-text-align-center\"></h2><!-- /wp:heading --><!-- wp:paragraph {\"align\":\"center\",\"className\":\"is-style-serif\",\"fontSize\":\"extra-large\"} --><p class=\"has-text-align-center is-style-serif has-extra-large-font-size\"></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {\"width\":12.5} --><div class=\"wp-block-column\" style=\"flex-basis:12.5%\"></div><!-- /wp:column --></div><!-- /wp:columns -->",
  )
);
