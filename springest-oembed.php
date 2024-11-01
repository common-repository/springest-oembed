<?php

/*
Plugin Name: Springest oEmbed
Description: Adds support for embedding Springest review widgets via oEmbed.
Version: 1.0
Author: Springest
Author URI: http://www.springest.com
*/

if ( function_exists('wp_oembed_add_provider') ) {
  add_action( 'plugins_loaded', 'enable_oembed_springest', 7 );
}

function enable_oembed_springest() {
  wp_oembed_add_provider( '#http://www\.springest\.(.*)/oembed/.*#i' , 'http://api.springest.nl/oembed.json', true );
}

?>
