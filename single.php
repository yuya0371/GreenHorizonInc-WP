<?php get_header(  ); ?>
<main>
    <div class="single-Blog-Wrap container-fluid">
        <div class="single-Blog-Container">
            <?php if(have_posts(  )):?>
                <?php while(have_posts(  )):
                    the_post(  ); ?>
                    <article id="post-<?php the_ID(  ); ?>"<?php post_class(  ); ?>>
                        <header class="single-Blog-Header">
                            <h1 class="single-Blog-Title">
                                <?php the_title(); ?>
                            </h1>
                            <div class="single-Blog-Meta">
                                <?php the_category( ',' ); ?>
                                <?php
                                $osakobo_post_year = get_the_date('Y');
                                $osakobo_post_month = get_the_date('m');
                                ?>
                                <a href="<?php echo get_month_link( $osakobo_post_year, $osakobo_post_month ) ?>" class="single-Blog-Meta_Date">
                                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                                </a>
                            </div>
                        </header>
                        <div class="single-Blog-Body">
                            <?php if(has_post_thumbnail(  )):?>
                            <div class="single-Blog-EyeCatch">
                                <?php the_post_thumbnail(  );?>
                            </div>
                            <?php endif?>
                            <?php the_content(  ); ?>
                            <footer class="content-Blog-Footer">
                                <?php
                                the_tags( ' <ul class="content-Tags" aria-label="タグ"><li> ', '</li><li>', ' </li></ul> ' );
                                ?>
                                <nav class="content-Blog-Nav" aria-label="前後の記事">
                                    <div class="content-Blog-Nav_Prev">
                                        <?php previous_post_link( '&lt;%link' ); ?>
                                    </div>
                                    <div class="content-Blog-Nav_Next">
                                        <?php next_post_link( '%link &gt;' ); ?>
                                    </div>
                                </nav>
                            </footer>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?> 
        </div>
    </div>
</main>
<?php get_footer(  ); ?>