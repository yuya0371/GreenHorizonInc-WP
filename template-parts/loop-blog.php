<article id="post-<?php the_ID(  ); ?>" <?php post_class( 'module-Article-Blog' ); ?>>
    <a href="<?php the_permalink(  ); ?>" class="module-Article-Blog-Link">
        <div class="module-Article-Blog-Img">
            <?php if(has_post_thumbnail(  )): ?>
                <?php the_post_thumbnail( 'archive_thumbnail' ); ?>
            <?php else:?>
                <img src="<?php echo esc_url(get_template_directory_uri(  )); ?>/assets/img/dummy-image.png" alt="" width="200" height="150" load="lazy">
            <?php endif; ?>
        </div>
        <div class="module-Article-Blog-Body">
            <h2 class="module-Article-Blog-Title"><?php the_title(  ); ?></h2>
            <ul class="module-Article-Blog-Meta">
                    <?php
                    $category_list=get_the_category(  );
                    if ($category_list):
                ?>
                <li class="module-Article-Blog-Cat">
                    <?php echo esc_html( $category_list[0]->name ); ?>
                </li>
                <?php endif; ?>

                <li class="module-Article-Blog-Date">
                    <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(  ); ?></time>
                </li>
            </ul>
            <?php the_excerpt(  ); ?>
        </div>
    </a>
</article>