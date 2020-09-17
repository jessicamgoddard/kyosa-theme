<?php
/**
 * Search Results
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/

// Search page header
add_action( 'genesis_before_loop', 'kyosa_search_header', 15 );
function kyosa_search_header() {
	do_action( 'genesis_archive_title_descriptions', 'Search Results', '', 'search-description' );
}

// Build the page using the archive template
require get_stylesheet_directory() . '/archive.php';
