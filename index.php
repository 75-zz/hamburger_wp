<?php get_header(); ?>

                <div class="l-hero-archive">
                    <h1 class="p-hero-archive__title"><?php the_search_query(); ?></h1>
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
                    <p><?php the_content('', FALSE, ''); ?></p>
                    <button><a href="<?php the_permalink(); ?>">詳しく見る</a> </button>
                </div>
            </article>
    <?php endwhile; ?>
    
    <?php else: ?>
    <div class="col-12 text-center">
    <p>検索結果はありませんでした</p>
    </div>
<?php endif; ?>

                    </section>
                    <section class="c-pagination">
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