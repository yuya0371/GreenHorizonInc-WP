<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
        <?php wp_body_open(  ); ?>
        <div class="content-Wrap">
            <header class="header">
                <div class="header-Icon">
                    <a class="header-Icon-Link" href="#">
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
                <!-- ここまでヘッダー -->
            <main class="main">
                <div class="main-Contents-Wrap">
                    <div class="home-Hero">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Hero-Image.png" alt="">
                    </div>
                    <div class="top-content">
                        <div class="main-content-header">
                            <h1>未来の地球のために、今できることを。</h1>
                        </div>
                        <div class="main-content-text">
                            <p>Green Horizon Inc.は、地球環境に配慮したエコ商品や
                            <br>サービスを企画・販売する企業です。
                            <br>持続可能な未来を目指し、サステナブルなライフスタイルを
                            <br>広める活動を行っています。</p>
                        </div>
                        <a href="#" class="main-content-More">詳しくはこちら</a>
                    </div>
                </div>
                <div class="product-Introduction">
                    <div class="main-content-header">
                        <h1>製品紹介</h1>
                    </div>
                    <div class="image-grid">
                        <a href="#" class="grid-item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/daily_necessities.png" alt="日用品">
                        </a>
                        <a href="#" class="grid-item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/kitchen_supplies.png" alt="キッチン用品">
                        </a>
                        <a href="#" class="grid-item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/fashion.png" alt="ファッション">
                        </a>
                        <a href="#" class="grid-item">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/gadget.png" alt="ガジェット">
                        </a>
                    </div>
                </div>
                <div class="home-news">
                    <div class="main-content-header">
                        <h1>新着情報</h1>
                    </div>
                </div>
            </main>

        </div>
    </body>