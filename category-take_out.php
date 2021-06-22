<?php /*
Template Name:take_out
*/
?>
<?php get_header("archive"); ?>
<div class="l-hero-archive">

<?php echo "<h1 class='p-hero-archive__title'>". get_the_title() . "</h1>"; ?>

</div>
<section class="p-content-archive">
    <h2>小見出しが入ります</h2>
    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>


    <?php
  $arg = array(
             'posts_per_page' => -1, // 表示する件数
             'orderby' => 'date', // 日付でソート
             'order' => 'ASC', // DESCで最新から表示、ASCで最古から表示
             'category_name' => 'eat-in' // 表示したいカテゴリーのスラッグを指定
         );
  $posts = get_posts( $arg );
  if( $posts ): ?>
  <?php
      foreach ( $posts as $post ) :
        setup_postdata( $post ); ?>
      <article class="c-cards">
      <?php if (has_post_thumbnail()) : ?>
                    <img class="blog-item__thumbnail-image" src="<?php the_post_thumbnail_url('large'); ?>">
                <?php endif; ?>
                <div class="c-cards__textarea">
                    <h3><?php the_title(); ?></h3>
                    <h4><?php the_excerpt(); ?></h4>
                    <p><?php the_content('', FALSE, ''); ?></p>
                    <button><a href="<?php the_permalink(); ?>">詳しく見る</a> </button>
      </article>
<?php endforeach; ?>
<?php
  endif;
  wp_reset_postdata();
?>
</section>
<section class="c-pagination">
<div class="p-pagelink">
    <?php wp_link_pages( 'before=<p>&after=</p>&next_or_number=number&pagelink= %' ); ?>
        <?php
        $args = array(
            'mid_size' => 3,
            'prev_text' => '&lt;&lt;',
            'next_text' => '&gt;&gt;',
            'screen_reader_text' => ' ',
        );
        the_posts_pagination($args);

        ?></div>
</section>
</section>
</main>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>