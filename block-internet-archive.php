<?php
/**
 * Plugin Name: Block Internet Archive
 * Description: Protect your dignity! Prevent the Internet Archive Wayback Machine from saving periodic snapshots of your website.
 * Author: Carlo Manf
 * Author URI: http://carlomanf.id.au
 * Version: 1.0.0
 */

// It's a simple plugin...
add_filter( 'robots_txt', function( $output ) {

	return $output . "\nUser-agent: ia_archiver\nDisallow: /\n";

} );
