<?php get_header(); ?>
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
                    <div class="home-news-contents">
                        <?php 
                        $home_news=array(
                            'post_type'=>'post',
                            'posts_per_page'=>10,
                        );
                        $home_news_query=new WP_Query($home_news);
                        if($home_news_query->have_posts(  )):
                         ?>
                         <?php 
                        while($home_news_query->have_posts(  )):
                            $home_news_query->the_post(  );
                         ?>
                         <?php get_template_part( 'template-parts/loop', 'post' ); ?>
                         <?php
                         endwhile;
                         wp_reset_postdata(  );
                         ?>
                         <?php endif; ?>
                    </div>
                </div>
            </main>
            <!-- ここまでメイン -->
<?php get_footer(); ?>