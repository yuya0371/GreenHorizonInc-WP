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
                <p>持続可能な生活をサポートする革新的なガジェットシリーズ。
                <br>ソーラーパネル付きランタンや折りたたみ式エコボトル、リサイクル素材のバックパックなど、
                <br>アウトドアや日常のシーンで役立つエコアイテムを提供します。
                </p>
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