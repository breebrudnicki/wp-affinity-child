<?php
function my_theme_enqueue_styles() {

    $parent_style = 'affinity-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/*
*
* ENQUE COUNTDOWN JS
*/
function enqueue_countdown() {
  wp_register_script('my_countdown', get_template_directory_uri() . '/assets/js/countdown.js', false, false, true);
  wp_enqueue_script('my_countdown');
}
add_action( 'wp_enqueue_scripts', 'enqueue_countdown' );


?>
