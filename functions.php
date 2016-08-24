<?php
/**
 *
 *
 * @package activello-child
 */

function child_theme_setup() {
    add_image_size( 'activello-child-featured', 500, 500, true );
}

add_action( 'after_setup_theme', 'child_theme_setup', 11 );