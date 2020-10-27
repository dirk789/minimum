<?php 

function casanhaheader_function() {
    $html .= '
    <header>
            <ul class="mega-menu">';
                
                    $locations = get_nav_menu_locations();
                    if ( isset( $locations[ 'mega_menu' ] ) ) {
                        $menu = get_term( $locations[ 'mega_menu' ], 'nav_menu' );
                        if ( $items = wp_get_nav_menu_items( $menu->name ) ) {
                            foreach ( $items as $item ) {
                                echo "<li>";
                                    echo "<a href=\"{$item->url}\">{$item->title}</a>";
                                    if ( is_active_sidebar( 'mega-menu-widget-area-' . $item->ID ) ) {
                                        echo "<div id=\"mega-menu-{$item->ID}\" class=\"mega-menu\">";
                                            dynamic_sidebar( 'mega-menu-widget-area-' . $item->ID );
                                        echo "</div>";
                                    }
                                echo "</li>";
                            }
                        }
                    }
                $html .= '
            </ul>
        </header>
        ';

        return $html;
}

add_shortcode('casanhaheader', 'casanhaheader_function');