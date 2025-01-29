archive
<?php get_header(); ?>

<h1>アーカイブ</h1>

<?php if (have_posts()) : ?>
    <ul>
        <?php while (have_posts()) : the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <p><?php the_excerpt(); ?></p>
            </li>
        <?php endwhile; ?>
    </ul>

    <?php the_posts_pagination(); ?>

<?php else : ?>
    <p>投稿がありません。</p>
<?php endif; ?>

<?php get_footer(); ?>
