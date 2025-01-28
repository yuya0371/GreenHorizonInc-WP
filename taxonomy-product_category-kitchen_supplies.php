<?php get_header(  ); ?>
<main class="main">
    <div class="main-Contents-Wrap container-fluid">
        <div class="home-Hero">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/dailyHero.png" alt="">
        </div>
        <div class="top-content">
            <div class="main-content-header">
                <h1>Green Horizon Inc.のキッチン用品</h1>
            </div>
            <div class="main-content-text">
                <p>エコとデザインを兼ね備えたキッチン用品は、
                <br>竹製まな板やガラス保存容器、蜜蝋を使ったエコラップなど、自然の恵みを活かした製品が揃っています。
                <br>環境に配慮しながら、料理や保存の時間をもっと楽しく、便利に。</p>
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