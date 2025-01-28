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
                    <h2 class="module-Article_Product_Title"><?php the_title(  ); ?></h2>
                    <?php the_excerpt(  ); ?>
                </div>
            </div>
        </a>
    </div>
</article>