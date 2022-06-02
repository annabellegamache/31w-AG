<?php
/**
 * 31w-AG functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package 31w-AG
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mon31w_setup() {
	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array('search-form') );
	add_theme_support( 'custom-background' );
}
add_action( 'after_setup_theme', 'mon31w_setup' );


function mon31w_enqueue() {
	wp_enqueue_style( '	mon31w-style', /*id de la feuille de style */
						get_stylesheet_uri(), /*va chercher le chemin complet */
						array(), 
						 _S_VERSION );
}
add_action( 'wp_enqueue_scripts', 'mon31w_enqueue' );

