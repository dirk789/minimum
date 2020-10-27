<?php 

function wpmm_setup() {
    register_nav_menus( array(
        'mega_menu' => 'Casanha Mega Menu'
    ) );
}
add_action( 'after_setup_theme', 'wpmm_setup' );

function wpmm_init() {
    $location = 'mega_menu';
    $css_class = 'has-mega-menu';
    $locations = get_nav_menu_locations();
    if ( isset( $locations[ $location ] ) ) {
        $menu = get_term( $locations[ $location ], 'nav_menu' );
        if ( $items = wp_get_nav_menu_items( $menu->name ) ) {
            foreach ( $items as $item ) {
                if ( in_array( $css_class, $item->classes ) ) {
                    register_sidebar( array(
                        'id'   => 'mega-menu-widget-area-' . $item->ID,
                        'name' => $item->title . ' - Casanha Mega Menu',
                        'before_widget' => '',
                        'after_widget' => '', 
                      ) );
                }
            }
        }
    }
}
add_action( 'widgets_init', 'wpmm_init' );

// get html shortcode
//include( plugin_dir_path( __FILE__ ) . 'header.php');