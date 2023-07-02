<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 11);

function theme_enqueue_styles() {
    if (is_front_page()) {
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'twenty-twenty-one-style' );
        wp_dequeue_style( 'twenty-twenty-one-print-style' );
    }

    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
}