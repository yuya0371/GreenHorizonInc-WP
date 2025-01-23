<?php get_header(  ); ?>
<div class="about-container content">
    <main class="main">
        <div class="home-Hero">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/Hero-Image.png" alt="">
        </div>
        <?php if(have_posts(  )):?>
        <?php 
        while(have_posts(  )):
        the_post();
        ?>
        <article id="post-<?php the_ID();?>"<?php post_class();?>>
            <header class="content-Header">
                <h1 class="content-Title">
                    <?php the_title(  );?>
                </h1>
            </header>
            <div class="content-Body">
                <?php if (has_post_thumbnail(  )): ?>
                <div class="content-EyeCatch">
                    <!-- <img src="./assets/img/shop.jpg" alt=""> -->
                        <?php the_post_thumbnail( 'page-eyecatch' );?>
                </div>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
        </article>
        <?php endwhile;?>
        <?php endif; ?>
    </main>
</div>
<?php get_footer(  ); ?>