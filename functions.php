<?php
/**
 * activello functions and definitions
 *
 * @package activello-child
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */


/*
  Embed SoundCloud Audio into WordPress with Shortcode
  http://www.internoetics.com/2015/10/26/embed-soundcloud-audio-into-wordpress-with-shortcode/
*/

// Add SoundCloud oEmbed

// function add_oembed_soundcloud(){
//   wp_oembed_add_provider( 'http://soundcloud.com/*', 'http://soundcloud.com/oembed' );

// }





function child_theme_setup() {
    add_image_size( 'activello-child-featured', 500, 500, true );

    // add_shortcode('soundcloud','beliefmedia_internoetics_wordpress_soundcloudclip_shortcode');
    // add_action('init','add_oembed_soundcloud');
}
add_action( 'after_setup_theme', 'child_theme_setup', 11 );