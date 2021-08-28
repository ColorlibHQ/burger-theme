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
if ( ! defined( 'BURGER_DIR_URI' ) ) {
	define( 'BURGER_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'BURGER_DIR_ASSETS_URI' ) ) {
	define( 'BURGER_DIR_ASSETS_URI', BURGER_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'BURGER_DIR_CSS_URI' ) ) {
	define( 'BURGER_DIR_CSS_URI', BURGER_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'BURGER_DIR_JS_URI' ) ) {
	define( 'BURGER_DIR_JS_URI', BURGER_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'BURGER_DIR_IMGS_URI' ) ) {
	define( 'BURGER_DIR_IMGS_URI', BURGER_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'BURGER_DIR_ICON_IMG_URI' ) ) {
	define( 'BURGER_DIR_ICON_IMG_URI', BURGER_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'BURGER_DIR_PATH' ) ) {
	define( 'BURGER_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'BURGER_DIR_PATH_INC' ) ) {
	define( 'BURGER_DIR_PATH_INC', BURGER_DIR_PATH . 'inc/' );
}

//Burger Libraries Folder Directory
if ( ! defined( 'BURGER_DIR_PATH_LIBS' ) ) {
	define( 'BURGER_DIR_PATH_LIBS', BURGER_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'BURGER_DIR_PATH_CLASSES' ) ) {
	define( 'BURGER_DIR_PATH_CLASSES', BURGER_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'BURGER_DIR_PATH_HOOKS' ) ) {
	define( 'BURGER_DIR_PATH_HOOKS', BURGER_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function burger_admin_script(){
    wp_enqueue_style( 'burger-admin', get_template_directory_uri().'/assets/css/burger-admin.css', false, '1.0.0' );
    // wp_enqueue_script( 'burger_admin', get_template_directory_uri().'/assets/js/burger-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'burger_admin_script' );



/**
 * Include File
 *
 */
require_once( BURGER_DIR_PATH_INC . 'burger-breadcrumbs.php' );
require_once( BURGER_DIR_PATH_INC . 'burger-widgets-reg.php' );
require_once( BURGER_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( BURGER_DIR_PATH_INC . 'post-like.php' );
require_once( BURGER_DIR_PATH_INC . 'burger-functions.php' );
require_once( BURGER_DIR_PATH_INC . 'burger-commoncss.php' );
require_once( BURGER_DIR_PATH_INC . 'support-functions.php' );
require_once( BURGER_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( BURGER_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( BURGER_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( BURGER_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( BURGER_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( BURGER_DIR_PATH_HOOKS . 'hooks.php' );
require_once( BURGER_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( BURGER_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( BURGER_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Burger object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Burger = new Burger();