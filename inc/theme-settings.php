<?php
/**
 * Check and setup theme's default settings
 *
 * @package brostrap
 *
 */

if ( ! function_exists( 'brostrap_setup_theme_default_settings' ) ) :
	function brostrap_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$brostrap_posts_index_style = get_theme_mod( 'brostrap_posts_index_style' );
		if ( '' == $brostrap_posts_index_style ) {
			set_theme_mod( 'brostrap_posts_index_style', 'default' );
		}

		// Sidebar position.
		$brostrap_sidebar_position = get_theme_mod( 'brostrap_sidebar_position' );
		if ( '' == $brostrap_sidebar_position ) {
			set_theme_mod( 'brostrap_sidebar_position', 'right' );
		}

		// Container width.
		$brostrap_container_type = get_theme_mod( 'brostrap_container_type' );
		if ( '' == $brostrap_container_type ) {
			set_theme_mod( 'brostrap_container_type', 'container' );
		}
	}
endif;
