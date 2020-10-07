<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'FLATTER_DIR_URI' ) ) {
	define( 'FLATTER_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'FLATTER_DIR_ASSETS_URI' ) ) {
	define( 'FLATTER_DIR_ASSETS_URI', FLATTER_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'FLATTER_DIR_CSS_URI' ) ) {
	define( 'FLATTER_DIR_CSS_URI', FLATTER_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'FLATTER_DIR_JS_URI' ) ) {
	define( 'FLATTER_DIR_JS_URI', FLATTER_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'FLATTER_DIR_IMGS_URI' ) ) {
	define( 'FLATTER_DIR_IMGS_URI', FLATTER_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'FLATTER_DIR_ICON_IMG_URI' ) ) {
	define( 'FLATTER_DIR_ICON_IMG_URI', FLATTER_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'FLATTER_DIR_PATH' ) ) {
	define( 'FLATTER_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'FLATTER_DIR_PATH_INC' ) ) {
	define( 'FLATTER_DIR_PATH_INC', FLATTER_DIR_PATH . 'inc/' );
}

//Flatter Libraries Folder Directory
if ( ! defined( 'FLATTER_DIR_PATH_LIBS' ) ) {
	define( 'FLATTER_DIR_PATH_LIBS', FLATTER_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'FLATTER_DIR_PATH_CLASSES' ) ) {
	define( 'FLATTER_DIR_PATH_CLASSES', FLATTER_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'FLATTER_DIR_PATH_HOOKS' ) ) {
	define( 'FLATTER_DIR_PATH_HOOKS', FLATTER_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function flatter_admin_script(){
    wp_enqueue_style( 'flatter-admin', get_template_directory_uri().'/assets/css/flatter_admin.css', false, '1.0.0' );
    wp_enqueue_script( 'flatter_admin', get_template_directory_uri().'/assets/js/flatter_admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'flatter_admin_script' );



/**
 * Include File
 *
 */
require_once( FLATTER_DIR_PATH_INC . 'flatter-breadcrumbs.php' );
require_once( FLATTER_DIR_PATH_INC . 'flatter-widgets-reg.php' );
require_once( FLATTER_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( FLATTER_DIR_PATH_INC . 'post-like.php' );
require_once( FLATTER_DIR_PATH_INC . 'flatter-functions.php' );
require_once( FLATTER_DIR_PATH_INC . 'flatter-commoncss.php' );
require_once( FLATTER_DIR_PATH_INC . 'support-functions.php' );
require_once( FLATTER_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( FLATTER_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( FLATTER_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( FLATTER_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( FLATTER_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( FLATTER_DIR_PATH_HOOKS . 'hooks.php' );
require_once( FLATTER_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( FLATTER_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( FLATTER_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Flatter object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Flatter = new Flatter();