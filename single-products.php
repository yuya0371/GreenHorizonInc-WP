<?php get_header(  ); ?>
<main>
    <div class="single-Product-Wrap container-fluid">
        <div class="product-Detail-Container">
            <?php if(have_posts(  )):?>
                <?php while(have_posts(  )):
                    the_post(  ); ?>
                    <article id="post-<?php the_ID(  ); ?>"<?php post_class(  ); ?>>
                        <div class="product-Detail-Img">
                            <?php if(has_post_thumbnail(  )): ?>
                                <?php the_post_thumbnail( ); ?>
                            <?php else: ?>
                                <img src="<?php echo esc_url( get_template_directory_uri(  ) ); ?>/assets/img/dummy-image.png" alt="" width="200" height="150" load="lazy">
                            <?php endif; ?>
                        </div>
                        <div class="product-Detail-Text">
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(  ); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(  ); ?>