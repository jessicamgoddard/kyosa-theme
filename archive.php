<?php
/**
 * Archive
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Adds body class to all pages using this template
add_filter( 'body_class', 'kyosa_archive_body_class' );
function kyosa_archive_body_class( $classes ) {

	$classes[] = 'archive';

	if( is_category() ) :

		$classes[] = 'has-' . get_field( 'color', 'category_' . get_queried_object()->term_id ) . '-category-color';

	endif;

	if( has_post_thumbnail( get_option( 'page_for_posts' ) ) && !is_search() ) :

		$classes[] = 'has-post-thumbnail';

	endif;

	return $classes;

}

// Adds div around articles
add_action( 'genesis_before_while', 'kyosa_articles_div_start' );
function kyosa_articles_div_start() {
	echo '<div class="articles alignwide">';
}

add_action( 'genesis_after_endwhile', 'kyosa_articles_div_end', 5 );
function kyosa_articles_div_end() {
	echo '</div>';
}

// Adds category navigation to blog and category pages
add_action( 'genesis_before_while', 'kyosa_category_nav' );
function kyosa_category_nav() {

	if( ( is_home() || is_category() ) && !is_paged() ) :
		$cats = get_categories();
		$current_cat = get_queried_object()->term_id;
		?>
		<nav class="category-navigation" aria-label="Categories">
			<ul id="category-navigation" class="menu" role="menubar" aria-label="Categories">
				<?php
				foreach( $cats as $cat ) :
					$menu_item_class = 'menu-item';
					if( $cat->term_id === $current_cat ) :
						$menu_item_class .= ' current-menu-item';
					endif;
					?>
					<li role="none" class="<?= $menu_item_class ?>">
						<a role="menuitem" tabindex="0" class="menu-item-link has-<?= get_field( 'color', 'category_' . $cat->term_id ) ?>-category-color" href="<?= esc_url( get_category_link( $cat->term_id ) ) ?>"><?= esc_html( $cat->name ) ?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</nav>
		<?php
	endif;

}

// Adds hero image
add_action( 'genesis_archive_title_descriptions', 'kyosa_add_archive_hero_image', 5 );
function kyosa_add_archive_hero_image() {

	$blog_id = get_option( 'page_for_posts' );

  if( has_post_thumbnail( $blog_id ) && !is_search() ) :
    ?>
    <div class="page-hero">
      <div class="page-hero__image" style="background-image: url('<?= get_the_post_thumbnail_url( $blog_id ) ?>')">
        <?= get_the_post_thumbnail( $blog_id ) ?>
      </div>
    </div>
		<div class="wrap alignwide">
    <?php
  endif;
}

add_action( 'genesis_archive_title_descriptions', 'kyosa_add_archive_description_close', 10 );
function kyosa_add_archive_description_close() {
	echo '</div>';
}

// Moves post featured images out of content area
remove_action( 'genesis_entry_content', 'genesis_do_post_image', 8 );
add_action( 'genesis_before_entry_content', 'genesis_do_post_image', 8 );

// Add categories with colors
add_action( 'genesis_entry_footer', 'kyosa_categories_with_colors' );

genesis();
