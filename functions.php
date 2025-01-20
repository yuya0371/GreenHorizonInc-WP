<?php
function theme_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array('search-form') );
    add_image_size( 'page_eyechatch', 1000, 610, true );
    register_nav_menu( 'main-menu', 'メインメニュー' );
}
add_action( 'after_setup_theme', 'theme_setup' );

function enqueue_scripts(){
    wp_enqueue_script( 'jQuery' );
    wp_enqueue_style(
        'bootstrap-css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
        array(),
        '4.5.2'
    );
    wp_enqueue_script(
        'bootstrap-js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
        array('jquery'),
        '4.5.2',
        true
    );
    wp_enqueue_style(
        'GreenHorizonInc-theme-styles',
        get_template_directory_uri(  ).'/assets/css/theme-styles.css',
        array(),
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

?>