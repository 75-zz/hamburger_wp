<?php get_header("archive"); ?>
<div class="l-hero-archive">


<?php echo "<h1 class='p-hero-archive__title'>". get_the_archive_title() . "</h1>"; ?>

</div>
<section class="p-content-archive">
    <h2>小見出しが入ります</h2>
    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="c-cards">
                <?php if (has_post_thumbnail()) : ?>
                    <img class="blog-item__thumbnail-image" src="<?php the_post_thumbnail_url('large'); ?>">
                <?php endif; ?>
                <div class="c-cards__textarea">
                    <h3><?php the_title(); ?></h3>
                    <h4><?php the_excerpt(); ?></h4>
                    <p><?php the_content('', true, ''); ?></p>
                    <button><a href="<?php the_permalink(); ?>">詳しく見る</a> </button>
                </div>
            </article>
    <?php endwhile;
    endif; ?>

</section>
<section class="c-pagination">
<div class="p-pagelink">
    <?php wp_link_pages( 'before=<p>&after=</p>&next_or_number=number&pagelink= %' ); ?>
</div>
        <?php
        $args = array(
            'mid_size' => 6,
            'prev_text' => '&lt;&lt;',
            'next_text' => '&gt;&gt;',
            'screen_reader_text' => ' ',
        );
        the_posts_pagination($args);
        ?>
</section>
</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>