<?php

/**
 * Theme setup.
 */
function falcontwstarter_setup() { 

	// load only inf it is not the admin area
	if ( ! is_admin() ) {
		// Load the theme stylesheet.
		wp_enqueue_style( 'falcontwstarter_normalizer', falcontwstarter_asset( 'assets/css/wordpress-normalizer.css' ) );
	}

	// Load translations for This template
	load_theme_textdomain('falcontwstarter', get_template_directory() . '/languages');
	 
	// This feature allows themes to add document title tag to HTML <head>.
	add_theme_support( 'title-tag' );

	// This feature allows the use of HTML5 markup for the search forms, comment forms, comment lists, gallery, and caption.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
 
	// This feature allows themes to add custom logos. 
    add_theme_support( 'custom-logo' );

	// Post Thumbnail, now Featured Image. Themes have to declare their support for post thumbnails before the interface for assigning these images will appear on the Edit Post and Edit Page screens. 
	add_theme_support( 'post-thumbnails' );

	// Core blocks include default structural styles. These are loaded in both the editor and the front end by default. 
	// An example of these styles is the CSS that powers the columns block. Without these rules, the block would result in a broken layout containing no columns at all.
	add_theme_support( 'wp-block-styles' );

	// Turn on feature for some blocks inside Gutenberg editor so that they can be aligned ( alignwide or alignfull ).
	add_theme_support( 'align-wide' );

	// This feature enables block styles which apply custom styles to block editor inside admin panel
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-styles.css' );

	// Add support for Post Formats
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
 
	// Registers navigation menu locations for a theme.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'falcontwstarter' ),
		)    
	);	
 
}

add_action( 'after_setup_theme', 'falcontwstarter_setup' );
 


add_action( 'enqueue_block_editor_assets', 'apply_gutenberg_block_changes' );

function apply_gutenberg_block_changes() {


	// Register block variations 
	wp_enqueue_script('custom-block-variations-editor',
		get_theme_file_uri('assets/js/editor-variations.js'),
		['wp-blocks', 'wp-dom-ready', 'wp-edit-post'],
		filemtime(get_theme_file_path('assets/js/editor-variations.js')),
		true
	);

	// Register block styles
	wp_enqueue_script('custom-block-styles-editor',
		get_theme_file_uri('assets/js/editor-styles.js'),
		['wp-blocks', 'wp-dom-ready', 'wp-edit-post'],
		filemtime(get_theme_file_path('assets/js/editor-styles.js'))
	);

}



/**
 * Enqueue theme assets.
 */
function falcontwstarter_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'falcontwstarter', falcontwstarter_asset( 'assets/css/frontend-styles.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'falcontwstarter', falcontwstarter_asset( 'assets/js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'falcontwstarter_enqueue_scripts' );


/**
 * Get asset path. if WP_ENV is production then return the path to the asset, otherwise append a query string with the current time to the path and that way the browser will always get the latest version of the asset.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function falcontwstarter_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option to upload SVG files.
 *
 */
function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

// Fix SVG display in media library - ensure that SVG thumbnails display correctly in the media library
function fix_svg_display() {
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
    </style>';
}
add_action( 'admin_head', 'fix_svg_display' );

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function falcontwstarter_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'falcontwstarter_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function falcontwstarter_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

// We add this option in order to be able to add classes to the <li> elements of the menu and that way we can use the Tailwind CSS classes to style the menu easier.
add_filter( 'nav_menu_submenu_css_class', 'falcontwstarter_nav_menu_add_submenu_class', 10, 3 );

/**
 * Register pattern categories.
 */

 if ( ! function_exists( 'falcontwstarter_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Falcon Tailwind Theme 1.0.0
	 * @return void
	 */
	function falcontwstarter_pattern_categories() {

		register_block_pattern_category(
			'page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category' ),
				'description' => __( 'A collection of full page layouts.' ),
			)
		);

		register_block_pattern_category(
			'twentytwentyfive_post-format',
			array(
				'label'       => __( 'Post formats', 'falcontwstarter' ),
				'description' => __( 'A collection of post format patterns.', 'falcontwstarter' ),
			)
		);
	}
endif;

add_action( 'init', 'falcontwstarter_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'twentytwentyfive_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return void
	 */
	function twentytwentyfive_register_block_bindings() {
		register_block_bindings_source(
			'twentytwentyfive/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'twentytwentyfive' ),
				'get_value_callback' => 'falcontwstarter_format_binding',
			)
		);
		register_block_bindings_source(
			'falcontwstarter/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'falcontwstarter' ),
				'get_value_callback' => 'falcontwstarter_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'twentytwentyfive_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'falcontwstarter_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since Twenty Twenty-Five 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function falcontwstarter_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;

function add_excerpts_to_pages()
{
	add_post_type_support('page', 'excerpt');
}

add_action('init', 'add_excerpts_to_pages');



// Add wordpress svg support
function falcontwstarter_svg_support() {
    add_theme_support('svg-support');
}
add_action('init', 'falcontwstarter_svg_support');
