<?php
   /*
   Plugin Name: Casanha Tools
   Plugin URI: https://minimum.digital
   description: >-
  A plugin for the website of Casanha
   Version: 0.2
   Author: Dirk Mulder
   Author URI: https://dirk.app
   License: GPL2
   */

// The proper way to enqueue GSAP script
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script() {
    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-scroll-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-js2', plugin_dir_url( __FILE__ ) . '/js/script.js', array(), false, true );
    

    if (is_page( 'Homepage' )) {
        wp_enqueue_script('homepage-animation', plugin_dir_url( __FILE__ ) . '/js/homepage.js', array(), false, true);
        wp_register_style( 'swipercss', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
        wp_enqueue_script( 'swiperjs', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), false, true );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );


//customize login page
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', plugin_dir_url( __FILE__ ) . '/css/login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


// custom flags
add_filter( 'trp_flags_path', 'trpc_flags_path', 10, 2 );
function trpc_flags_path( $original_flags_path,  $language_code ){

	// only change the folder path for the following languages:
	$languages_with_custom_flags = array( 'en_US', 'vi' );

	if ( in_array( $language_code, $languages_with_custom_flags ) ) {
		return  plugin_dir_url( __FILE__ ) . '/flags/' ;
	}else{
		return $original_flags_path;
	}
}

//Mega menu PHP Files
include( plugin_dir_path( __FILE__ ) . 'menu.php');
