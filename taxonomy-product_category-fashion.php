<?php get_header(  ); ?>
<main class="main">
    <div class="main-Contents-Wrap container-fluid">
        <div class="home-Hero">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dailyHero.png" alt="">
        </div>
        <div class="top-content">
            <div class="main-content-header">
                <h1>Green Horizon Inc.の日用品</h1>
            </div>
            <div class="main-content-text">
                <p>ファッションを楽しみながら環境にも配慮できる、エコファッションライン。
                <br>リサイクル素材のバッグや竹繊維を使った服飾アイテムで、持続可能なトレンドを提案。
                <br>地球にも人にも優しい選択をお届けします。</p>
            </div>
        </div>
        <div class="products-List-Container">
            <div class="products-List-Wrap row">
                <?php if(have_posts(  )): ?>
                    <?php 
                    while(have_posts(  )):
                        the_post(  );
                    ?>
                        <?php get_template_part( 'template-parts/loop', 'products' ); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(  ); ?>