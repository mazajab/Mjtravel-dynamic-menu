<?php
function custom_excerpt_length($length) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
	
	function wptutsplus_register_theme_menu() {
    register_nav_menu( 'primary', 'Main Navigation Menu' );
}
add_action( 'init', 'wptutsplus_register_theme_menu' );
	
