<?php get_header(); ?>
<main>
    <div class="archive-Blog-Wrap container-fluid">
        <div class="home-Hero">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Hero-Image.png" alt="">
        </div>
        <div class="archive-Blog-Top">
            <div class="main-content-header">
                <h1>ブログ・コラム</h1>
            </div>
            <div class="main-content-text">
                <p>持続可能なライフスタイルや環境保護に関する情報を発信しています。
                <br>私たちのビジョン「地球環境に優しい選択を、すべての人に」を
                <br>実現するために、役立つ知識や最新トレンドを共有します。</p>
            </div>
        </div>
        <div class="archive-Blog-contents">
            <?php if(have_posts(  )): ?>
            <?php while(have_posts(  )):
                the_post(  );
                ?>
                <?php get_template_part( 'template-parts/loop', 'blog' ); ?>
            <?php endwhile; ?>
            <?php get_template_part( 'template-parts/parts','pagination' ); ?>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
