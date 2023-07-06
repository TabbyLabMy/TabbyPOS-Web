<?php
/*----------------------------------------------------
LOAD COMPOSER PSR - 4
-----------------------------------------------------*/
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ):
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME VERSION
-----------------------------------------------------*/
define( 'APPIE_DEV_MODE', false );
if ( APPIE_DEV_MODE ) {
    define( 'APPIE_VERSION', time() );
	define( 'APPIE_SCRIPT_VAR', '.' );
} else {
    define( 'APPIE_VERSION', '1.4' );
	define( 'APPIE_SCRIPT_VAR', '.min.' );
}


/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME ASSETS URL
-----------------------------------------------------*/
define( 'APPIE_THEME_URI', get_template_directory_uri() );
define( 'APPIE_IMG', APPIE_THEME_URI . '/assets/images' );
define( 'APPIE_CSS', APPIE_THEME_URI . '/assets/css' );
define( 'APPIE_JS', APPIE_THEME_URI . '/assets/js' );

/*----------------------------------------------------
SHORTHAND CONTANTS FOR THEME ASSETS DIRECTORY PATH
-----------------------------------------------------*/
define( 'APPIE_THEME_DIR', get_template_directory() );
define( 'APPIE_IMG_DIR', APPIE_THEME_DIR . '/assets/images' );
define( 'APPIE_CSS_DIR', APPIE_THEME_DIR . '/assets/css' );
define( 'APPIE_JS_DIR', APPIE_THEME_DIR . '/assets/js' );

// option prefix
define( 'APPIE_OPTION_KEY', 'appie_settings' );
/*----------------------------------------------------
SET UP THE CONTENT WIDTH VALUE BASED ON THE THEME'S DESIGN
-----------------------------------------------------*/

// hooks for unyson framework
// ----------------------------------------------------------------------------------------
function appie_framework_customizations_dir_rel_path( $rel_path ) {

    return '/app/Core/Hook';
}
add_filter( 'fw_framework_customizations_dir_rel_path', 'appie_framework_customizations_dir_rel_path' );

if ( !isset( $content_width ) ) {
    $content_width = 800;
}
if ( class_exists( 'Appie\\Init' ) ):
    Appie\Init::register_services();
endif;

/*----------------------------------------------------
UTILITY
-----------------------------------------------------*/
require_once APPIE_THEME_DIR . '/app/Utility/global.php';
require_once APPIE_THEME_DIR . '/app/Utility/Helpers.php';
require_once APPIE_THEME_DIR . '/app/Utility/template-tags.php';

/*----------------------------------------------------
option init
-----------------------------------------------------*/
require_once APPIE_THEME_DIR . '/app/Option/Init.php';
require_once APPIE_THEME_DIR . '/woocommerce/woo-setup.php';


