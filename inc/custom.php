<?php
/**
 * Custom
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/

add_action( 'genesis_after_header', 'kyosa_add_event_categories' );
function kyosa_add_event_categories() {

  if( is_archive( 'events' ) ) :
    $cats = get_terms( ['taxonomy' => 'tribe_events_cat' ] );
    $current_cat = get_queried_object();
    ?>
    <div class="archive-description posts-page-description">
      <div class="wrap alignwide">
        <h1 class="archive-title">
          <?php
          if( is_tax() ) :
            echo $current_cat->name;
          else :
            echo 'Events';
          endif;
          ?>
        </h1>
      </div>
    </div>

    <div class="event-categories alignwide">
  		<nav class="category-navigation" aria-label="Categories">
  			<ul id="category-navigation" class="menu" role="menubar" aria-label="Categories">
  				<?php
  				foreach( $cats as $cat ) :
  					$menu_item_class = 'menu-item';
  					if( $cat->term_id === $current_cat->term_id ) :
  						$menu_item_class .= ' current-menu-item';
  					endif;
  					?>
  					<li role="none" class="<?= $menu_item_class ?>">
  						<a role="menuitem" tabindex="0" class="menu-item-link has-<?= get_field( 'color', 'category_' . $cat->term_id ) ?>-category-color" href="<?= esc_url( get_category_link( $cat->term_id ) ) ?>"><?= esc_html( $cat->name ) ?></a>
  					</li>
  				<?php endforeach; ?>
  			</ul>
  		</nav>
    </div>

    <?php
  endif;

}

// Adds class to navigation
add_filter( 'wp_nav_menu_objects', 'kyosa_add_menu_item_class', 10, 2 );
function kyosa_add_menu_item_class( $items, $args ) {

  foreach( $items as &$item ) {

    $color = get_field( 'color', $item->object_id );

    if( $color ) {

      $item->classes[] = 'has-' . $color . '-page-color';

    }

  }

  return $items;

}

// Adds search to secondary navigation
add_filter( 'wp_nav_menu_items', 'kyosa_add_search_to_menu', 10, 2 );
function kyosa_add_search_to_menu( $menu, $args ) {

  if( ( 'secondary' !== $args->theme_location ) )
    return $menu;

  ob_start();
  get_search_form();
  $search = ob_get_clean();
  $menu .= '<li class="search-toggle"><span class="dashicons dashicons-search"></span></li>';
  $menu .= '<li class="search">' . $search . '</li>';

  return $menu;

}

// Shared function for displaying categories with colors
function kyosa_categories_with_colors() {
  ?>
  <p class="entry-meta">
    <span class="entry-categories">
      <?php
      $cats = get_the_category();
      foreach( $cats as $cat ) :
        ?>
        <a class="has-<?= get_field( 'color', 'category_' . $cat->term_id ) ?>-category-color" href="<?= esc_url( get_category_link( $cat->term_id ) ) ?>"><?= esc_html( $cat->name ) ?></a>
      <?php endforeach; ?>
    </span>
  </p>
  <?php
}

// Adds hero image to page and posts
add_action( 'genesis_entry_header', 'kyosa_add_page_post_hero_image', 5 );
function kyosa_add_page_post_hero_image() {

  if( ( is_page() || is_singular() ) && has_post_thumbnail() ) :
    ?>
    <div class="page-hero">
      <div class="page-hero__image" style="background-image: url('<?= get_the_post_thumbnail_url() ?>')">

        <?php if( get_field( 'headline' ) ) : ?>
          <div class="page-hero__headline">
            <p><?= get_field( 'headline' ) ?></p>
          </div>
        <?php endif; ?>

        <?php if( is_singular() && get_the_category() ) :?>
          <div class="page-hero__meta">
            <?= kyosa_categories_with_colors() ?>
          </div>
        <?php endif; ?>

        <?= get_the_post_thumbnail() ?>
      </div>
    </div>
    <?php
  endif;
  if( is_page() || is_singular() ) :
    ?>
    <div class="wrap alignwide">
    <?php
  endif;

}

add_action( 'genesis_entry_header', 'kyosa_add_header_wrap_close', 10 );
function kyosa_add_header_wrap_close() {

  if( is_page() || is_singular() ) :
    echo '</div>';
  endif;

}

// Adds page color body class
add_filter( 'body_class', 'kyosa_page_color_body_class' );
function kyosa_page_color_body_class( $classes ) {

  if( get_field( 'color' ) ) :
	  $classes[] = 'has-' . get_field( 'color') . '-page-color';
  endif;

  if( ( is_page() || is_singular() ) && has_post_thumbnail() ) :
    $classes[] = 'has-post-thumbnail';
  endif;

	return $classes;
}

/* Genesis */
// Remove Genesis SEO settings from post/page editor
remove_action( 'admin_menu', 'genesis_add_inpost_seo_box' );

// Remove Genesis SEO settings option page
remove_theme_support( 'genesis-seo-settings-menu' );

// Remove Genesis SEO settings from taxonomy editor
remove_action( 'admin_init', 'genesis_add_taxonomy_seo_options' );

// Moves navigation menus
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_header', 'genesis_do_subnav' );
add_action( 'genesis_header', 'genesis_do_nav' );

// Adds footer widgets
$kyosa_config = genesis_get_config( 'main' );
$footer_widgets = $kyosa_config[ 'genesis-footer-widgets' ];

if( $footer_widgets != 0 ) :
  add_theme_support( 'genesis-footer-widgets', $footer_widgets );
endif;


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

// Allow and set custom units
if( $kyosa_config[ 'custom-units' ] ) :

  $units = implode( ', ', $kyosa_config[ 'custom-units' ] );

  add_theme_support( 'custom-units', $units );

endif;

// Set editor stylesheet
add_action( 'after_setup_theme', 'wpdocs_theme_add_editor_styles' );
function wpdocs_theme_add_editor_styles() {

  // $kyosa_config = genesis_get_config( 'main' );

  // if( $kyosa_config[ 'theme-supports' ][ 'editor-styles' ] ) :
    add_editor_style( '/assets/dist/editor.min.css' );
  // endif;
//
}
