<article id="post-<?php the_ID(  ); ?>" <?php post_class( 'module-Article-Item' ); ?> >
    <a href="<?php the_permalink(  ); ?>" class="module-Article-Item_Link">
        <div class="module-Article-Item_Body">
        <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(  ); ?></time>
            <h2 class="module-Article_Item_Title"><?php the_title(  ); ?></h2>
        </div>
    </a>
</article>