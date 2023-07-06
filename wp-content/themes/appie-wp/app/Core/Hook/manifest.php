<?php if (!defined('ABSPATH')) die('Direct access forbidden.');

$manifest = array();

$manifest[ 'name' ]         = esc_html__( 'appie', 'appie' );
$manifest[ 'uri' ]          = esc_url( 'https://wp.quomodosoft.com/user/quomodotheme' );
$manifest[ 'description' ]  = esc_html__( 'Appie is App Landing WordPress Theme', 'appie' );
$manifest[ 'version' ]      = '1.0';
$manifest[ 'author' ]       = 'quomodotheme';
$manifest[ 'author_uri' ]   = esc_url( 'https://themeforest.net/user/quomodotheme' );
$manifest[ 'requirements' ] = array(
	'wordpress' => array(
		'min_version' => 5.0,
	),
);

$manifest[ 'id' ] = 'scratch';

$manifest[ 'supported_extensions' ] = array(
	'backups'		 => array(),
);


?>
