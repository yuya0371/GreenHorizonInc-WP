<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <?php
        if (is_page('about')) {
        wp_enqueue_style('about-style', get_template_directory_uri(). '/assets/css/about.css');
        }
        ?>

        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
        <?php wp_body_open(  ); ?>
        <div class="content-Wrap">
            <header class="header">
                <div class="header-Icon">
                    <a class="header-Icon-Link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Logo.png" alt="">
                    </a>
                </div>
                <div class="header-Nav">
                    <div class="header-Nav-Inner">
                        <?php wp_nav_menu( 
                            array(
                                'theme_location'=>'main-menu',
                                'menu_class'=>'header-Nav_Items',
                                'container'=>false,
                            )
                        ); ?>
                    </div>
                </div>
                <div class="header-SNS-Icons">
                    <a href="#" class="header-SNS-Icon-X">
                        <img class="SNS-Icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/x.png" alt="X">
                    </a>
                    <a href="#" class="header-SNS-Icon-Instagram">
                        <img class="SNS-Icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/instagram.png" alt="Instagram">
                    </a>
                </div>
            </header>
            <?php if(!is_front_page(  )): ?>
            <?php if ( function_exists( 'bcn_display' ) ) : ?>
            <nav class="breadCrumb" typeof="BreadcrumbList" vocab="http://schema.org/" aria-label="現在のページ">
            <?php bcn_display(); ?>
            </nav>
            <?php endif; ?>
            <?php endif; ?>