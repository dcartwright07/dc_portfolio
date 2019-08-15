<?php

// Turn theme support on for various features
// ====================================
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

/* #region Initialize menus to use in the admin panel */
function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'footer-social-media-menu' => __( 'Social Media' )
		)
	);

}
add_action( 'init', 'register_theme_menus' );
/* #endregion */

/* #region Import all CSS */
function dc_theme_style() {

	// Webfonts
	wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light' );

	// Minified CSS
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome_css', get_template_directory_uri() . '/assets/css/all.min.css' );
	wp_enqueue_style( 'animate_css', get_template_directory_uri() . '/assets/css/animate.min.css' );
	wp_enqueue_style( 'simpleicons_css', get_template_directory_uri() . '/assets/css/simple-line-icons.min.css' );
	wp_enqueue_style( 'carousel_css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'carouseldefault_css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'magnificpopup_css', get_template_directory_uri() . '/assets/css/magnific-popup.min.css' );

	// Main Theme Styles
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'dc_theme_style' );
/* #endregion */

/* #region Import all JavaScript */
function dc_theme_js() {

	// Head Scripts
	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/assets/js/modernizr.min.js', '', '', false );

	// Vendor Scripts
	// wp_enqueue_script( 'vendor_js', get_template_directory_uri() . '/assets/js/vendor.min.js', array( 'jquery' ), '',  true );

	wp_enqueue_script( 'appear_js', get_template_directory_uri() . '/assets/js/vendor/jquery.appear.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'easing_js', get_template_directory_uri() . '/assets/js/vendor/jquery.easing.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'cookie_js', get_template_directory_uri() . '/assets/js/vendor/jquery.cookie.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/assets/js/vendor/popper.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'common_js', get_template_directory_uri() . '/assets/js/vendor/common.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'validate_js', get_template_directory_uri() . '/assets/js/vendor/jquery.validate.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'piechart_js', get_template_directory_uri() . '/assets/js/vendor/jquery.easypiechart.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'gmap_js', get_template_directory_uri() . '/assets/js/vendor/jquery.gmap.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'lazyload_js', get_template_directory_uri() . '/assets/js/vendor/jquery.lazyload.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'isotope_js', get_template_directory_uri() . '/assets/js/vendor/jquery.isotope.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'carousel_js', get_template_directory_uri() . '/assets/js/vendor/owl.carousel.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'magnificpopup_js', get_template_directory_uri() . '/assets/js/vendor/jquery.magnific-popup.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'vide_js', get_template_directory_uri() . '/assets/js/vendor/jquery.vide.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'vivus_js', get_template_directory_uri() . '/assets/js/vendor/vivus.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'rstools_js', get_template_directory_uri() . '/assets/js/vendor/jquery.themepunch.tools.min.js', array( 'jquery' ), '',  true );
	wp_enqueue_script( 'rsrevolution_js', get_template_directory_uri() . '/assets/js/vendor/jquery.themepunch.revolution.min.js', array( 'jquery' ), '',  true );

	// Theme Scripts
	wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/assets/js/theme.js', array( 'jquery', 'bootstrap_js' ), '',  true );
	wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery', 'bootstrap_js' ), '',  true );
	wp_enqueue_script( 'themeinit_js', get_template_directory_uri() . '/assets/js/theme.init.js', array( 'jquery', 'bootstrap_js' ), '',  true );

}
add_action( 'wp_enqueue_scripts', 'dc_theme_js' );
/* #endregion */

// Add SVG image support to available MIME types
// ====================================
function add_file_types_to_uploads( $file_types ) {

	$new_filetypes = array();
	$new_filetypes[ 'svg' ] = 'image/svg+xml';
	$file_types = array_merge( $file_types, $new_filetypes );
	return $file_types;

}
add_filter( 'upload_mimes', 'add_file_types_to_uploads' );

?>