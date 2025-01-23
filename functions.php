<?php
function theme_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array('search-form') );
    add_image_size( 'page_eyechatch', 1000, 610, true );
    register_nav_menus( 
        array(
            'main-menu'=>'メインメニュー',
            'sub-menu'=>'サブメニュー',
        )
    );
}
add_action( 'after_setup_theme', 'theme_setup' );

function create_products_post_type() {
    register_post_type('products',
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'thumbnail'),
            'rewrite' => array('slug' => 'products'),
        )
    );
}
add_action('init', 'create_products_post_type');

function create_products_categories() {
    $labels = array(
        'name' => _x('Product Categories', 'taxonomy general name'),
        'singular_name' => _x('Product Category', 'taxonomy singular name'),
        'menu_name' => __('Product Categories'),
    );
    
    register_taxonomy('product_category', 'products', array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'product-category'),
    ));
}
add_action('init', 'create_products_categories', 0);

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

function widgets_init(){

    register_sidebars( 3, 
    array(
        'name'=>'フッター%s',
        'id'=>'footer-widget-area',
        'description'=>'フッターのサイドバー',
        'before_widget'=>'<div id="%1$s" class="%2$s">',
        'after_widget'=>'</div>',
    )
    );
}
add_action( 'widgets_init','widgets_init' );

?>