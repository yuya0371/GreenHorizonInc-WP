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
                <p>Green Horizon Inc.の日用品シリーズは
                <br>日常生活の中で環境に配慮した選択をサポートするためにデザインされています。
                <br>再生可能な素材や自然由来の成分を活用し
                <br>使い捨てを減らす持続可能な商品を提供します
                <br>機能性とエコロジーを両立させることで、地球に優しいライフスタイルを提案します。</p>
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