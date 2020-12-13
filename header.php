<?php 

function custom_mini_cart() { 
    echo '<a href="#" class="dropdown-back" data-toggle="dropdown"> ';
    echo '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
    echo '<div class="basket-item-count" style="display: inline;">';
        echo '<span class="cart-items-count count">';
            echo WC()->cart->get_cart_contents_count();
        echo '</span>';
    echo '</div>';
    echo '</a>';
    echo '<ul class="dropdown-menu dropdown-menu-mini-cart">';
        echo '<li> <div class="widget_shopping_cart_content">';
                  woocommerce_mini_cart();
            echo '</div></li></ul>';

      }
       add_shortcode( '[custom-casanha-mini-cart]', 'custom_mini_cart' );


// MAIN MENU

function casanhaheader_function() {
   
    echo "
    <header id=\"header__mega\">
    <div class=\"logo\"> <a href=\"/\"> <svg fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 114 35\"> <defs /> <path d=\"M0 17.5V35h8.75V17.5h8.204v1.504c0 1.367-.055 1.531-.766 1.887-.793.41-1.422 1.449-1.422 2.379 0 .683.985 1.066 2.734 1.066 1.641 0 2.735-.465 2.735-1.148 0-.848-.738-1.997-1.477-2.352-.628-.273-.71-.465-.71-1.832V17.5h8.203V35H35V0H0v17.5zM44.107 4.566c-.274.082-.356 1.204-.356 4.184 0 3.445.055 4.074.438 4.21.82.329 7.629.192 7.984-.163.192-.192.329-.793.329-1.367 0-1.012-.028-1.04-.93-1.04s-.957.055-1.04 1.012l-.081 1.04h-4.649V5.058h4.649l.082 1.039c.082.984.137 1.039.957.957.765-.082.875-.192.957-.985.164-1.586-.137-1.695-4.293-1.668-2.051 0-3.883.082-4.047.164zM56.877 8.504a303.301 303.301 0 00-1.86 4.375c-.054.137.328.246.82.246.821 0 .985-.11 1.286-.957l.328-.957h4.32l.329.957c.3.82.465.957 1.258.957.492 0 .902-.082.902-.164s-.82-2.05-1.832-4.375l-1.805-4.211H58.654l-1.777 4.129zm3.746-.3l.848 2.187h-3.72l.849-2.188c.492-1.203.93-2.187 1.011-2.187.082 0 .52.984 1.012 2.187zM67.35 4.566c-.219.082-.356.63-.356 1.34V7.11l3.309 1.641 3.281 1.668-.082 1.012-.082 1.011-2.242.082-2.27.082v-1.12c0-1.067-.027-1.094-.957-1.094-.957 0-.957 0-.957 1.203 0 .847.137 1.258.438 1.367.82.328 7.355.191 7.711-.164.492-.492.41-2.242-.137-2.735-.273-.246-1.75-1.011-3.308-1.722L68.88 7.027l.082-.984.082-.984h4.375l.082 1.039c.082.984.137 1.039.957.957.766-.082.875-.192.957-.985.165-1.586-.136-1.695-4.156-1.668-1.969 0-3.746.082-3.91.164zM81.378 5.25c-.22.492-.657 1.504-.985 2.27-.328.738-1.012 2.324-1.531 3.472l-.902 2.133h.93c.792 0 .956-.11 1.257-.957l.355-.957H84.796l.41.957c.328.82.52.957 1.312.957h.957l-1.886-4.32-1.86-4.293-.984-.082c-.903-.082-1.04 0-1.367.82zm2.433 3.363l.684 1.778h-1.778c-.984 0-1.777-.055-1.777-.137 0-.055.246-.766.574-1.559.328-.793.684-1.75.848-2.133.219-.601.273-.628.52-.218.136.273.574 1.285.93 2.27zM97.347 4.512c0 .082 1.558 2.05 3.445 4.375l3.473 4.238h1.313c.738 0 1.339-.055 1.339-.137 0-.082-.957-2.05-2.105-4.375l-2.133-4.238h-2.652c-1.477 0-2.68.055-2.68.137zM43.751 25.977V35H47.58l.054-6.563.082-6.535 5.88 6.535 5.879 6.508 1.449.028 1.422.027V16.953H58.517l-.054 6.399-.082 6.37-5.825-6.37-5.824-6.399H43.75v9.024zM69.729 25.977V35h3.801l.082-4.32.082-4.293 5.414-.082 5.387-.055V35h4.102V16.953h-4.102v7.93H73.557v-7.93h-3.828v9.024zM101.476 18.102c-.274.656-2.051 4.648-3.965 8.914-1.887 4.238-3.446 7.765-3.446 7.847 0 .082.848.137 1.887.137h1.887l.793-1.996.793-1.969H108.421l.793 1.969.821 1.996H114l-1.313-2.953c-.711-1.613-2.516-5.66-3.992-9.024l-2.68-6.07H101.968l-.492 1.149zm6.262 11.21c0 .137-1.723.22-3.829.22-2.105 0-3.828-.055-3.828-.137 0-.165 3.555-8.915 3.746-9.27.137-.191 3.883 8.668 3.911 9.188z\" fill=\"#000\" /></svg></a> </div> 

    <nav id=\"nav--desktop\">
            <ul class=\"casanha-mega-menu\">";
                
                    $locations = get_nav_menu_locations();
                    if ( isset( $locations[ 'mega_menu' ] ) ) {
                        $menu = get_term( $locations[ 'mega_menu' ], 'nav_menu' );
                        if ( $items = wp_get_nav_menu_items( $menu->name ) ) {
                            foreach ( $items as $item ) {
                                echo "<li>";
                                    echo "<a href=\"{$item->url}\">{$item->title}</a>";
                                    if ( is_active_sidebar( 'mega-menu-widget-area-' . $item->ID ) ) {
                                        echo "<div id=\"casanha-mega-menu-{$item->ID}\" class=\"mega-menu mega-menu__dropdown\">";
                                            echo "<div class=\"mega-menu-inner\">";
                                            dynamic_sidebar( 'mega-menu-widget-area-' . $item->ID );
                                            echo "</div>";
                                        echo "</div>";
                                    }
                                echo "</li>";
                            }
                        }
                    }

                echo "</ul>  
        "; 


        echo "<div id=\"header__search\">";
            echo '<div id="search__icon">';

            echo '<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><defs/><path d="M11.573 1.154a10.573 10.573 0 100 21.147 10.573 10.573 0 000-21.147v0z" stroke="#000" stroke-width="1.917" stroke-miterlimit="10"/><path d="M19.462 19.616L26.846 27" stroke="#000" stroke-width="1.917" stroke-miterlimit="10" stroke-linecap="round"/></svg>
            
            </div>';

        echo "<div class=\"search-container\">";

        echo do_shortcode( '[ivory-search id="6422" title="Default Search Form"]' );
    
        echo "</div>";
        echo "</div>";

        //shopping cart
        echo " 
        <div class=\"header__cart\">
            
            <div class=\"header__class-count\">";
                
                //svg Cart
                echo "<svg class=\"cart__icon\" width=\"25\" height=\"28\" viewBox=\"0 0 25 28\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M17.7977 7.26735V6.30612C17.7977 3.31583 15.4342 0.9 12.5 0.9C9.56581 0.9 7.20226 3.31583 7.20226 6.30612V7.26735H3.1928H3.10274L3.09334 7.35691L3.04469 7.82051L3.04461 7.82119L0.965592 26.3919L0.965559 26.3922L0.900587 26.9892L0.888525 27.1H1H24H24.1115L24.0994 26.9892L24.0344 26.3922L24.0344 26.3919L21.9554 7.82119L21.9553 7.82051L21.9067 7.35691L21.8973 7.26735H21.8072H17.7977ZM12.5 2.16122C14.7635 2.16122 16.5582 3.99029 16.5582 6.30612V7.26735H8.44181V6.30612C8.44181 3.99029 10.2365 2.16122 12.5 2.16122ZM2.28134 25.8388L4.22429 8.52857H7.20226V9.58376C6.88987 9.79071 6.68249 10.1432 6.68249 10.551C6.68249 11.1909 7.19028 11.7122 7.82203 11.7122C8.45379 11.7122 8.96158 11.1909 8.96158 10.551C8.96158 10.1432 8.7542 9.79071 8.44181 9.58376V8.52857H16.5582V9.58376C16.2458 9.79071 16.0384 10.1432 16.0384 10.551C16.0384 11.1909 16.5462 11.7122 17.178 11.7122C17.8097 11.7122 18.3175 11.1909 18.3175 10.551C18.3175 10.1432 18.1101 9.79071 17.7977 9.58376V8.52857H20.7757L22.7187 25.8388H2.28134Z\" fill=\"black\" stroke=\"black\" stroke-width=\"0.2\"/> </svg>";
                //cart count
                if ( WC()->cart->get_cart_contents_count() >= 1 ) {

                    echo "<span class=\"cart__count\">";
                        echo WC()->cart->get_cart_contents_count();
                    echo "</span>";

                };

            echo "</div>";

        echo "
         <div class=\"header__mini-cart\">
        ";

        woocommerce_mini_cart();
        

        echo "
            </nav>
         </div>
        </div>";


        echo "
        <div class=\"mobile-menu-button\">";

        echo '<a href="/shop?focus=true"><svg fill="none" class="mobile__search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><defs/><path d="M11.573 1.154a10.573 10.573 0 100 21.147 10.573 10.573 0 000-21.147v0z" stroke="#000" stroke-width="1.917" stroke-miterlimit="10"/><path d="M19.462 19.616L26.846 27" stroke="#000" stroke-width="1.917" stroke-miterlimit="10" stroke-linecap="round"/></svg></a>';

       echo "<a href=\"/cart\"><div class=\"header__class-count\">";
                
        //svg Cart
        echo "<svg class=\"cart__icon\" width=\"25\" height=\"28\" viewBox=\"0 0 25 28\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M17.7977 7.26735V6.30612C17.7977 3.31583 15.4342 0.9 12.5 0.9C9.56581 0.9 7.20226 3.31583 7.20226 6.30612V7.26735H3.1928H3.10274L3.09334 7.35691L3.04469 7.82051L3.04461 7.82119L0.965592 26.3919L0.965559 26.3922L0.900587 26.9892L0.888525 27.1H1H24H24.1115L24.0994 26.9892L24.0344 26.3922L24.0344 26.3919L21.9554 7.82119L21.9553 7.82051L21.9067 7.35691L21.8973 7.26735H21.8072H17.7977ZM12.5 2.16122C14.7635 2.16122 16.5582 3.99029 16.5582 6.30612V7.26735H8.44181V6.30612C8.44181 3.99029 10.2365 2.16122 12.5 2.16122ZM2.28134 25.8388L4.22429 8.52857H7.20226V9.58376C6.88987 9.79071 6.68249 10.1432 6.68249 10.551C6.68249 11.1909 7.19028 11.7122 7.82203 11.7122C8.45379 11.7122 8.96158 11.1909 8.96158 10.551C8.96158 10.1432 8.7542 9.79071 8.44181 9.58376V8.52857H16.5582V9.58376C16.2458 9.79071 16.0384 10.1432 16.0384 10.551C16.0384 11.1909 16.5462 11.7122 17.178 11.7122C17.8097 11.7122 18.3175 11.1909 18.3175 10.551C18.3175 10.1432 18.1101 9.79071 17.7977 9.58376V8.52857H20.7757L22.7187 25.8388H2.28134Z\" fill=\"black\" stroke=\"black\" stroke-width=\"0.2\"/> </svg>";
        //cart count
        if ( WC()->cart->get_cart_contents_count() >= 1 ) {

            echo "<span class=\"cart__count\">";
                echo WC()->cart->get_cart_contents_count();
            echo "</span>";

        };

        echo "</div></a>";

         echo  " <svg id=\"open-menu\" width=\"43\" height=\"11\" viewBox=\"0 0 43 11\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <line x1=\"43\" y1=\"1\" x2=\"17\" y2=\"0.999998\" stroke=\"black\" stroke-width=\"2\"/> <line x1=\"43\" y1=\"10\" x2=\"-8.74228e-08\" y2=\"10\" stroke=\"black\" stroke-width=\"2\"/> </svg> 
        </div>
        <div class=\"mobile-menu\">
                <div class=\"mobile-menu__inner\">
                <ul id=\"mobile-list\">
        
        ";
            
                
                    $locations = get_nav_menu_locations();
                    if ( isset( $locations[ 'mega_menu' ] ) ) {
                        $menu = get_term( $locations[ 'mega_menu' ], 'nav_menu' );
                        if ( $items = wp_get_nav_menu_items( $menu->name ) ) {
                            foreach ( $items as $item ) {
                                // echo "<li "; 

                                if ( is_active_sidebar( 'mega-menu-widget-area-' . $item->ID ) ) {
                                    echo "<li class=\"is-mega\">";
                                } else {
                                    echo "<li>";
                                }

                                // echo ">";

                                    echo "<a class=\"mobile-title\" href=\"{$item->url}\">{$item->title}</a>";
                                    if ( is_active_sidebar( 'mega-menu-widget-area-' . $item->ID ) ) {
                                        echo "<div class=\"mega-menu mega-menu__mobile\">";
                                            echo "<div class=\"mega-menu-inner\">";
                                            dynamic_sidebar( 'mega-menu-widget-area-' . $item->ID );
                                            echo "</div>";
                                        echo "</div>";
                                    }
                                echo "</li>";
                            }
                        }
                    }


       echo "
        </ul>
            <div id=\"mobile-header__footer\">
            
            <div class=\"header__class-count\">
                    <a href=\"/cart\">
            ";
                //svg Cart
                echo "<svg class=\"cart__icon\" width=\"25\" height=\"28\" viewBox=\"0 0 25 28\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"> <path d=\"M17.7977 7.26735V6.30612C17.7977 3.31583 15.4342 0.9 12.5 0.9C9.56581 0.9 7.20226 3.31583 7.20226 6.30612V7.26735H3.1928H3.10274L3.09334 7.35691L3.04469 7.82051L3.04461 7.82119L0.965592 26.3919L0.965559 26.3922L0.900587 26.9892L0.888525 27.1H1H24H24.1115L24.0994 26.9892L24.0344 26.3922L24.0344 26.3919L21.9554 7.82119L21.9553 7.82051L21.9067 7.35691L21.8973 7.26735H21.8072H17.7977ZM12.5 2.16122C14.7635 2.16122 16.5582 3.99029 16.5582 6.30612V7.26735H8.44181V6.30612C8.44181 3.99029 10.2365 2.16122 12.5 2.16122ZM2.28134 25.8388L4.22429 8.52857H7.20226V9.58376C6.88987 9.79071 6.68249 10.1432 6.68249 10.551C6.68249 11.1909 7.19028 11.7122 7.82203 11.7122C8.45379 11.7122 8.96158 11.1909 8.96158 10.551C8.96158 10.1432 8.7542 9.79071 8.44181 9.58376V8.52857H16.5582V9.58376C16.2458 9.79071 16.0384 10.1432 16.0384 10.551C16.0384 11.1909 16.5462 11.7122 17.178 11.7122C17.8097 11.7122 18.3175 11.1909 18.3175 10.551C18.3175 10.1432 18.1101 9.79071 17.7977 9.58376V8.52857H20.7757L22.7187 25.8388H2.28134Z\" fill=\"white\" stroke=\"white\" stroke-width=\"0.2\"/> </svg>";
                //cart count
                if ( WC()->cart->get_cart_contents_count() >= 1 ) {
                    echo "<span class=\"cart__count\">";
                        echo WC()->cart->get_cart_contents_count();
                    echo "</span>";
                };
            echo "</a></div>";
            
                
            echo "
            </div>
        </div>
       </div>
    </header>
        ";
}

add_shortcode('casanhaheader', 'casanhaheader_function');
