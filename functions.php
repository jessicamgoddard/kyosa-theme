<?php
/**
 * Functions
 *
 * @package      KYOSATheme
 * @author       P&P Creative
 * @since        1.0.0
**/


// Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Loads scripts and styles
require_once get_stylesheet_directory() . '/inc/scripts-styles.php';
// Adds programmatic inline CSS
require_once get_stylesheet_directory() . '/inc/inline-css.php';
// Sets up theme supports
require_once get_stylesheet_directory() . '/inc/theme-supports.php';
// Makes changes to default Genesis set up
require_once get_stylesheet_directory() . '/inc/genesis.php';
// Executes default settings
require_once get_stylesheet_directory() . '/inc/defaults.php';
// Adds Gutenberg settings
require_once get_stylesheet_directory() . '/inc/gutenberg.php';
// Executes custom settings
require_once get_stylesheet_directory() . '/inc/custom.php';
// Sets templates and ids without editor
require_once get_stylesheet_directory() . '/inc/disable-editor.php';
// Sets up ACF settings
require_once get_stylesheet_directory() . '/inc/acf.php';
// Adds P&P branding
require_once get_stylesheet_directory() . '/inc/pandp.php';
