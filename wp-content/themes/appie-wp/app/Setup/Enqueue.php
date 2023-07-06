<?php
namespace Appie\Setup;

/**
 * Enqueue.
 */
class Enqueue 
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */
	public function register() 
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}
 
	public function enqueue_scripts() 
	{
		

    	// stylesheets
		// ::::::::::::::::::::::::::::::::::::::::::
		if ( !is_admin() ) {
			// wp_enqueue_style() $handle, $src, $deps, $version

			// 3rd party css
			wp_enqueue_style( 'appie-fonts', appie_google_fonts_url(['Roboto:300,400,500,600,700,900']), null, APPIE_VERSION );		
			wp_enqueue_style( 'fontawesome', APPIE_CSS . '/font-awesome.min.css', null, APPIE_VERSION );
			wp_enqueue_style( 'bootstrap', APPIE_CSS . '/bootstrap.min.css', null, APPIE_VERSION );
			wp_enqueue_style( 'animate', APPIE_CSS . '/animate.min.css', null, APPIE_VERSION );
			wp_enqueue_style( 'slick', APPIE_CSS . '/slick.min.css', null, APPIE_VERSION );
			wp_enqueue_style( 'magnific-popup', APPIE_CSS . '/magnific-popup.css', null, APPIE_VERSION );
			// theme css
			wp_enqueue_style( 'appie-custom-animate', APPIE_CSS . '/custom-animation.min.css', null, APPIE_VERSION );
			wp_enqueue_style( 'appie-default', APPIE_CSS . '/default.min.css', null, time() );
			wp_enqueue_style( 'appie-style', APPIE_CSS . '/style'.APPIE_SCRIPT_VAR.'css', null, time() );
			wp_enqueue_style( 'appie-blog', APPIE_CSS . '/blog'.APPIE_SCRIPT_VAR.'css', null, time() );
			wp_enqueue_style( 'appie-responsive', APPIE_CSS . '/responsive'.APPIE_SCRIPT_VAR.'css', null, time() );
			

		}

		// javascripts
		// :::::::::::::::::::::::::::::::::::::::::::::::
		if ( !is_admin() ) {
			
			// 3rd party scripts
			wp_enqueue_script( 'popper', APPIE_JS . '/popper.min.js', array( 'jquery' ), APPIE_VERSION, true );	
			wp_enqueue_script( 'bootstrap', APPIE_JS . '/bootstrap.min.js', array( 'jquery','popper' ), APPIE_VERSION, true );
			wp_enqueue_script( 'slick', APPIE_JS . '/slick.min.js', array( 'jquery' ), APPIE_VERSION, true );
     		wp_enqueue_script( 'magnific-popup', APPIE_JS . '/jquery.magnific-popup.min.js', array( 'jquery' ), APPIE_VERSION, true );
     		wp_enqueue_script( 'tweenmax', APPIE_JS . '/TweenMax.min.js', array( 'jquery' ), APPIE_VERSION, true );
     		wp_enqueue_script( 'waypoints', APPIE_JS . '/waypoints.min.js', array( 'jquery' ), APPIE_VERSION, true );
     		wp_enqueue_script( 'goodshare', APPIE_JS . '/goodshare.min.js', array( 'jquery' ), APPIE_VERSION, true );
     		wp_enqueue_script( 'wow', APPIE_JS . '/wow.js', array( 'jquery' ), APPIE_VERSION, true );
			
			// theme scripts
			
			wp_enqueue_script( 'appie-main', APPIE_JS . '/main'.APPIE_SCRIPT_VAR.'js', array( 'jquery','bootstrap','magnific-popup','wow','waypoints','slick','tweenmax' ), time(), true );
			// Load WordPress Comment js
			if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		    	wp_enqueue_script( 'comment-reply' );
			}

		}
    }
}
