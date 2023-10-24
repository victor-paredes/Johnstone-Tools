<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';










/* admin CSS */
add_action('admin_head', 'admin_css');

function admin_css() {
  echo '<style>
	
	/* Remove profile elements */
	#dashboard-widgets-wrap,
	.user-rich-editing-wrap, 
	.user-admin-color-wrap, 
	.show-admin-bar, 
	.user-comment-shortcuts-wrap, 
	.user-profile-picture,
	.user-url-wrap,
	.user-description-wrap,
	.application-passwords {
		display:none;
	}

	#wpadminbar, #adminmenu li.menu-top:hover {
		background: #0f3465;
	}
	#adminmenu, #adminmenuback, #adminmenuwrap, #adminmenu .wp-submenu {
		background: #05588f;
	}

	
  </style>';
}



/**
 * Hooks the WP cpt_post_types filter 
 *
 * @param array $post_types An array of post type names that the templates be used by
 * @return array The array of post type names that the templates be used by
 **/
// function my_cpt_post_types( $post_types ) {
//     $post_types[] = 'landing-page';
//     $post_types[] = 'another-type';
//     return $post_types;
// }
// add_filter( 'cpt_post_types', 'my_cpt_post_types' );



function custom_admin_favicon() {
    echo '<link rel="shortcut icon" href="' . esc_url( '/wp-content/uploads/2023/10/favico.png' ) . '" />';
}

add_action('admin_head', 'custom_admin_favicon');



