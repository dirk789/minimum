<?php 

function wpmm_setup() {
    register_nav_menus( array(
        'mega_menu' => 'Casanha Mega Menu'
    ) );
}
add_action( 'after_setup_theme', 'wpmm_setup' );

