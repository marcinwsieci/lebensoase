<?php

if ( ! function_exists( 'lebensoase_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
     *
	 * @return void
	 */
	function lebensoase_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'twentytwentyone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cm_elektrotechnik', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => __( 'Secondary menu', 'twentytwentyone' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */

		add_theme_support(
			'custom-logo',
			array(
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
}

add_action( 'after_setup_theme', 'lebensoase_setup' );

function lebensoase_styles_and_scripts(){
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array(), $ver = false, true );

    wp_enqueue_script('twbs', get_stylesheet_directory_uri() . '/vendor/twbs/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), '',true);

    wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0.0', true );

    wp_enqueue_style( 'fonts', 'https://use.typekit.net/uwz2udf.css' );

    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'lebensoase_styles_and_scripts' );

function lebensoase_nav_menu_li_class( $classes, $item, $args ){
    if( isset( $args->li_class ) ){
        $classes[] = $args->li_class;
    }

    return $classes;
}
add_filter( 'nav_menu_css_class', 'lebensoase_nav_menu_li_class', 1, 3 );

function lebensoase_nav_menu_a_class( $classes ){
    return preg_replace( '/<a /', '<a class="nav-link"', $classes );
}
add_filter( 'wp_nav_menu', 'lebensoase_nav_menu_a_class' );

require_once 'inc/actions.php';
require_once 'inc/hooks.php';
