<article id="post-<?php the_ID(  ); ?>" <?php post_class( 'module-Article-Product col-md-4' ); ?> >
    <div class="module-Article-Product_Wrap">
        <a href="<?php the_permalink(  ); ?>" class="module-Article-Product_Link">
            <div class="module-Article-Product_Img">
                <?php if(has_post_thumbnail(  )): ?>
                    <?php the_post_thumbnail( 'archive_thumbnail' ); ?>
                <?php else:?>
                    <img src="<?php echo esc_url(get_template_directory_uri(  )); ?>/assets/img/dummy-image.png" alt="" width="200" height="150" load="lazy">
                <?php endif; ?>
            </div>
            <div class="module-Article-Product_container">
                <div class="module-Article-Product_Body">
                <time class="col-4" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(  ); ?></time>
                    <h2 class="module-Article_Product_Title col-8 "><?php the_title(  ); ?></h2>
                </div>
            </div>
        </a>
    </div>
</article>